<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('t_blog_model');
    }
    public function get_all(){
       
        $count=$this->t_blog_model->get_all_count();//获取总数量
        /**分页开始**/
        $this->load->library('pagination');

        $config['base_url'] = 'blog/get_all/';
        $config['total_rows'] = $count;
        $config['per_page'] = 4;

        /**样式开始**/
        $config['prev_link']="《";
        $config['next_link']="》";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li ><a href="blog/get_all/" class="page_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        /**样式结束**/
        $this->pagination->initialize($config);
        /**分页结束**/
        $offset=$this->uri->segment(3);
        $offset=!$offset?0:$offset;
        $rs= $this->t_blog_model->get_all_blog($config['per_page'],$offset);
        
        $this->load->view('index',array('rs'=>$rs));
        
    }
   
}



