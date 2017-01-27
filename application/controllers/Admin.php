<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    public function islogin()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $data = $this->session->all_userdata();
        if(empty($data['uid'])&&empty($data['id'])) {
            redirect('http://localhost');
            exit;
        }
        else if(empty($data['uid'])) {
            redirect('http://localhost/uadmin/index.html');
            exit;
        } else {
            return $data;
        }
    }


    public function index()
    {
        $data = $this->islogin();
        $this->load->view('tpl/amanager',$data);
    }

    public function orderlist()
    {
        $data = $this->islogin();

        if(empty($_POST['searchid'])) {
            $sql = "select * from eshop_order where stat='1' order by id desc";
        } else {
            $sql = "select * from eshop_order where id=".$_POST['searchid'];
        }
		
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['orderlist'] = $retdata;
        //var_dump($retdata[0]);

        $this->load->view('tpl/aorder',$data);
    }

    public function newbooklist()
    {
        $data = $this->islogin();

         if(empty($_POST['searchid'])) {
        $sql = "select * from eshop_book where isnew='1' and stat='1' order by id desc";
        }  else {
            $sql = "select * from eshop_book where isnew='1' and id=".$_POST['searchid'];
        }
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['newbooklist'] = $retdata;
        $this->load->view('tpl/anewbook',$data);
    }

    public function usedbooklist()
    {
        $data = $this->islogin();
         if(empty($_POST['searchid'])) {
        $sql = "select * from eshop_book where isnew='0' and stat='1' order by id desc";
        }    else {
            $sql = "select * from eshop_book where isnew='0' and id=".$_POST['searchid'];
        }
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['oldbooklist'] = $retdata;
        $this->load->view('tpl/ausedbook',$data);
    }
}
