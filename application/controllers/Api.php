<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


    public function upfile()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 10000;
        $config['min_width']        = 230;
        $config['min_height']       = 346;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            var_dump($error);
        }
        else
        {
            $updata = array('upload_data' => $this->upload->data());
            //插入数据库

            //var_dump($_POST);

            $data['title'] = $_POST['booktitle'];
            /*
            if($_POST['booktype']=="fiction") {
                $data['type'] = 1;
            } else if($_POST['booktype']=="art") {
                $data['type'] = 2;
            }  else if($_POST['booktype']=="culture") {
                $data['type'] = 3;
            } else if($_POST['booktype']=="science") {
                $data['type'] = 4;
            } else if($_POST['booktype']=="technology") {
                $data['type'] = 5;
            } else if($_POST['booktype']=="comics") {
                $data['type'] = 6;
            } else {
                $data['type'] = 1;
            }*/

            $data['type'] = $_POST['booktype'];
            $data['author'] = $_POST['bookauthor'];
            $data['price'] = (int)($_POST['bookprice'])*100;
            if($_POST['newold']=='new') {
                $data['isnew'] = 1;
            } else {
                $data['isnew'] = 0;
            }
            $data['contributor'] = $this->session->id;
            $data['imgpath'] = 'http://localhost/uploads/' .$this->upload->data('file_name');

            $ret = $this->db->insert('eshop_book', $data);
            if($ret) {
                echo '0';
                redirect('http://localhost/uadmin/index.html');
            } else {
                echo '-1';
            }
        }
    }

    public function adduser()
    {

        $this->load->library('session');
        $this->load->helper('url');
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        $uemail = $_POST['uemail'];
        $utel = $_POST['utel'];
        $uaddr = $_POST['upostaddr'];
        $cardnum = $_POST['ucardnum'];
        $balance = rand(100000,200000);
        $expire = $_POST['uexpire'];
        $backcode = $_POST['ubackcode'];



        $data = array(
            'username' => $uname,
            'password' => $upass,
            'email' => $uemail,
            'tel'   => $utel,
            'address' => $uaddr,
            'balance' => $balance,
            'cardnum' => $cardnum,
            'expire' => $expire,
            'backcode' => $backcode
        );



        $ret = $this->db->insert('eshop_customer', $data);
        if($ret) {
            $this->session->set_userdata($data);
            echo '0';
        } else {
            echo '-1';
        }
    }

    public function viewbook($viewid) 
    {
        if(empty($viewid)) {
            $this->load->helper('url');
            redirect('http://localhost/');
            exit;
        }
        $sql = "select * from eshop_book where id='" . $viewid . "';";
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['bookinfo'] = $retdata;
        $this->load->view('tpl/bookview',$data);

    }

    public function addtocart()
    {
        $this->load->library('session');
        $this->load->helper('url');
        //var_dump($_POST);
        $id = $_POST['id'];
        $uname = $_POST['username'];
        $bookid = $_POST['bookid'];
        $query = $this->db->query("select * from eshop_cart where custid='$id'");
        $retdata = $query->result_array();

        $query1 = $this->db->query("select * from eshop_book where id='$bookid'");
        $retdata1 = $query1->result_array();

        $index = 0;
        if($retdata[$index]['custid']==$retdata1[$index]['contributor']) {
            echo '不能添加自己的书';
            exit;
        }

        if(count($retdata)) {
            //存在购物车
            error_reporting(E_ALL ^ E_DEPRECATED);
            $nowcart = $retdata[0]['booklist'];
            $nowcart = trim($nowcart);
            $ordarr = split(' ',$nowcart);
            array_push($ordarr, $bookid);
            $ordarr = array_unique($ordarr);
            //var_dump($ordarr);
            $ordlist = join(" ",$ordarr);
            $this->session->set_userdata('listcart', $ordarr);
            $sqlstr = "update eshop_cart set booklist='".$ordlist.
             "' where custid='$id'";
            $query = $this->db->query($sqlstr);

        } else {
            //创建购物车
            $data = array(
            'custname' => $uname,
            'custid' => $id,
            'booklist' => $bookid
            );
            $ret = $this->db->insert('eshop_cart', $data);
            if($ret) {
                echo '0';
            } else {
                echo '-1';
            }
        }
    }

    public function checkout() {
        if(empty($_POST)) {
            echo '-10,please select to pay!';
            exit;
        }
        //var_dump($_POST);

        $this->load->library('session');
        $mysession = $this->session->userdata();
        //var_dump($mysession);

        //0代表待支付
        $sql1 = "select * from eshop_order where stat='0' and custid='".$mysession['id']."'";
        //echo $sql1;
        $query1 = $this->db->query($sql1);
        $retdata1 = $query1->result_array();
        if(count($retdata1)>0) {
            echo "-1,you exist nopay orders";
            exit;
        }

        //插入订单表未支付
        $data = array(
            'ordtime' => date('y-m-d h:i:s',time()),
            'custid' => $mysession['id'],
            'username' => $mysession['username'],
            'itemid'   => $_POST['orderlist']
        );
        $ret = $this->db->insert('eshop_order', $data);
        $ordid = $this->db->insert_id();
        //var_dump($ordid);
        if($ret) {
        } else {
            echo "-2,插入订单表失败";
            exit;
        }
        $inwhere = explode(" ",trim($_POST['orderlist']));
        $postlist = $inwhere;
        $inwhere = join(',',$inwhere);

        //扣钱
        $sql2 = "select c.balance-sum(b.price) as mymoney, sum(b.price) as amt from eshop_book b,eshop_customer c where b.id in (" . $inwhere . ") and  c.id='" . $mysession['id'] ."' ";
        //var_dump($sql2);
        $query2 = $this->db->query($sql2);
        $retdata2 = $query2->result_array();
        if(count($retdata2)!=1) {
            echo "-3,not found";
            exit;
        } else if((int)$retdata2[0]['mymoney']<0){
            echo "-4,no money";
            exit;
        } else {
            //扣钱
            //
            //
            $sql3 = "update eshop_customer set balance=balance-" . (int)$retdata2[0]['amt'] ." where id='". $mysession['id'] ."'";
            //echo $sql3;
            $query3 = $this->db->query($sql3);
            if($query3) {

            } else {
                echo "-5,update failed";
                exit;
            }
        }

        $this->session->balance = (int)$this->session->balance - (int)$retdata2[0]['amt'];
        
        //更新成支付成功
        $sql4 = "update eshop_order set stat='1' where id='" . $ordid ."'";
        $query4 = $this->db->query($sql4);
        if($query4) {

        } else {
                echo "-5,update failed";
                exit;
        }

//更新书的状态
         $sql5 = "update eshop_book set stat='0' where id in (" . $inwhere . ") ";
            //echo $sql3;
            $query5 = $this->db->query($sql5);
            if($query5) {

            } else {
                echo "-5,update failed";
                exit;
            }
        

        //更新订单状态为1 代表已支付
        $sql4 = "update eshop_order set stat='1' where id='" . $ordid ."'";
        $query4 = $this->db->query($sql4);
        if($query4) {

        } else {
                echo "-5,update failed";
                exit;
        }
       
        $sqlcart = "select * from eshop_cart where custid='".$mysession['id']."'";
        $querycart = $this->db->query($sqlcart);
        $retdatacart = $querycart->result_array();
        $custcart = trim($retdatacart[0]['booklist']);
        //var_dump($custcart);
        $custcart = explode(" ",$custcart);
        $leftlist  = array_diff($custcart,$postlist); //还有$result的没支付
        //var_dump($leftlist);
        $leftliststr = join(' ',$leftlist);

        if(empty($leftlist)) {
            //全部被支付删除购物车
            $sql5 = "delete from eshop_cart where custid='" . $mysession['id'] ."'";
            $query5 = $this->db->query($sql5);
            if($query5) {
                  echo '0,支付成功';
                    exit;
            } else {
                    echo "-5,delete cart failed";
                    exit;
            }
            
        } else {
            //部分支付更新订单内容
            $sql5 = "update eshop_cart set booklist='".$leftliststr. "' where custid='" . $mysession['id'] ."'";
            $query5 = $this->db->query($sql5);
            if($query5) {
                $inwhere = join(',',$postlist);
                $sql5 = "update eshop_book set stat='0' where id in (". $inwhere . ")";
                $query5 = $this->db->query($sql5);
                if($query5) {
                    echo '0,支付成功';
                    exit;
                }



            } else {
                    echo "-5,update cart failed";
                    exit;
            }
        }



        

        //更新书籍已售出
        
        //更新购物车



/*
        $sql5 = "delete from eshop_cart where custid='" . $mysession['id'] ."'";
        $query5 = $this->db->query($sql5);
        if($query5) {

        } else {
                echo "-5,delete cart failed";
                exit;
        }
        echo '0';*/

    }
}
