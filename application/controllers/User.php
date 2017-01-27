<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
    public function index()
    {
        echo '404';
        exit;
    }

    public function dosignup()
    {
        $this->load->view('tpl/signup');
    }

    public function dologin()
    {
        $this->load->view('tpl/login');
    }

    public  function checklogin()
    {
        $admininfo="";
        $userinfo="";
        $cnt = 0;
        $sql = "select * from eshop_manager where name='". $_POST['name']. "' and password='".$_POST['pass']."'";
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        //var_dump($retdata[0]);
        if(count($retdata)==1) {
            //set session
            $this->load->library('session');
            $this->session->set_userdata($retdata[0]);
            echo "0";
            exit;
        } else {
            //查询是否是普通人员登录
            $sql = "select * from eshop_customer where username='". $_POST['name']. "' and password='".$_POST['pass']."'";
            //echo $sql;
            $query = $this->db->query($sql);
            $retdata = $query->result_array();
            if(count($retdata)==1) {
                //set session
                $this->load->library('session');
                $this->session->set_userdata($retdata[0]);

                echo "1";
                exit;
            }
            echo "-1";
            exit;
        }
        //var_dump($query);
    }
    public function logout()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('http://localhost');
        exit;
    }

    public function checkout()
    {
        //查询购物车里面的清单
        $this->load->library('session');
        $sql1 = "select booklist from eshop_cart where custid='".$this->session->id."'" ;
        //echo $sql;
        $query1 = $this->db->query($sql1);
        $retdata1 = $query1->result_array();
        if(empty($retdata1)) {
$data=null;
                $this->load->view('tpl/ucheckout',$data);
        } else {
        $books = $retdata1[0]['booklist'];
        $books = trim($books);
        //var_dump($books);
        $arr = explode(' ',$books);
        $arr = join(',',$arr);
        var_dump($arr);


        $sql2 = "select * from eshop_book where id in (". $arr.")";
        $query2 = $this->db->query($sql2);
        $retdata2 = $query2->result_array();
        
            
        $data['cart'] = $retdata2;

        
        $buybook = $data['cart'];
        $arrSell = array();
  
        for($cnt =0;$cnt<count($buybook);$cnt++) {
            array_push($arrSell,$buybook[$cnt]['contributor']);
        }
        //var_dump($arrSell);
        $arrSell = array_unique($arrSell);
        $arrSell = join(',',$arrSell);
        var_dump($arrSell);

        $sql3 = "select * from eshop_customer where id in (". $arrSell.")";
        $query3 = $this->db->query($sql3);
        $retdata3 = $query3->result_array();
        $data['seller'] = $retdata3;
        //var_dump($retdata3);
             
        
        
        $this->load->view('tpl/ucheckout',$data);
        }
    }


}
