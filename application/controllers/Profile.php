<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        if(!empty($data['username'])) {
            return $data;
        }
        else {
            redirect('http://localhost/user/login.html');
            exit;
        }
    }

    public function index()
    {
        $data = $this->islogin();
        //var_dump($data);
        $this->load->view('tpl/uprofile',$data);
    }

    //用户出售中的书籍
    public function usedsel()
    {
        $data = $this->islogin();
        $this->load->library('session');
        $mysession = $this->session->userdata();
        //var_dump($mysession);
        $sql = "select * from eshop_book where contributor='". $mysession['id']."' and isnew=0 and stat='1' order by id desc";
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['newlist'] = $retdata;
        //var_dump($retdata[0]);exit;
        $this->load->view('tpl/uusedsel',$data);
        //var_dump($data);
    }

    public function newsel()
    {
        $data = $this->islogin();
        $this->load->library('session');
        $mysession = $this->session->userdata();

        $sql = "select * from eshop_book where contributor='" .$mysession['id']. "' and isnew=1 and stat='1' order by id desc";
        //echo $sql;
        $query = $this->db->query($sql);
        $retdata = $query->result_array();
        $data['newlist'] = $retdata;
        //var_dump($retdata[0]);
        $this->load->view('tpl/unewsel',$data);
    }

    //用户的订单记录
    public function order()
    {
        $data = $this->islogin();
        //var_dump($data);
    }

    //用户发布书籍
    public function postbook()
    {
        $this->load->library('upload');
        $data = $this->islogin();
        //var_dump($data);
        $this->load->view('tpl/upostbook',$data);
    }


}
