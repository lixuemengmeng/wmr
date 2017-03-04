<?php   defined('BASEPATH') OR exit('No direct script access allowed');
class T_blog_model extends CI_Model {
    public function get_all_blog($limit=4,$offset=0){
        $this->db->select("*");
        $this->db->from('blog');
        $this->db->join('user','blog.user_id=user.user_id');
        $this->db->join('cate','blog.cate_id=cate.cate_id');
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        return  $query->result();
    }
    public function get_all_count(){
        $this->db->select("*");
        $this->db->from('blog');
        return $this->db->count_all_results();
    }


}