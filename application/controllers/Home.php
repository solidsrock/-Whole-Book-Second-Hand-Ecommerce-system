<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

        $this->load->library('session');
        $data = $this->session->all_userdata();
        //var_dump($data);
        //获取最新所有书籍
        //$sql = "select * from eshop_book where stat='1' order by id desc  LIMIT 6; ";
        //echo $sql;
        $sql = "select * from eshop_book where stat='1' order by id desc  ";
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['lastbooks'] = $retdata;

        $sql1 = "select booklist from eshop_cart where custid='".$this->session->id."'" ;
        //echo $sql;
        $query1 = $this->db->query($sql1);
        $retdata1 = $query1->result_array();
        if(count($retdata1)) {
            $data['lastbooks'] = $retdata;
            $data['listcart'] = $retdata1[count($retdata1)-1];

        }

        
        $this->load->view('tpl/index',$data);
        //var_dump($data);load this view to controller

    }

    public function cshow($pid,$cid)
    {
        $this->load->library('session');
        $data = $this->session->all_userdata();
        //var_dump($data);
        //获取最新所有书籍
        $strwhere = "";
        //echo $pid;exit;
        if($pid=='0') {
            $strwhere = " and isnew='0' "; 
        } else {
            $strwhere = " and isnew='1' "; 
        }
        if(!empty($cid)) {
            $strwhere .= " and type='" . $cid . "' ";
        }
     
        $sql = "select * from eshop_book where stat='1' " . $strwhere. "order by id desc  LIMIT 6; ";
        echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['lastbooks'] = $retdata;

        $sql1 = "select booklist from eshop_cart where custid='".$this->session->id."'" ;
        //echo $sql;
        $query1 = $this->db->query($sql1);
        $retdata1 = $query1->result_array();
        if(count($retdata1)) {
            $data['lastbooks'] = $retdata;
            $data['listcart'] = $retdata1[count($retdata1)-1];

        }

        
        $this->load->view('tpl/index',$data);
    }
}
