<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_import extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function create_pengetahuan($data){
        $this->db->insert('rapor_pengetahuan',$data);
    }

    public function update_pengetahuan($data,$where){
        $this->db->where($where);
        $this->db->update('rapor_pengetahuan',$data);
    }

    public function create_keterampilan($data){
        $this->db->insert('rapor_keterampilan',$data);
    }

    public function update_keterampilan($data,$where){
        $this->db->where($where);
        $this->db->update('rapor_keterampilan',$data);
    }

    public function create_pribadi($data){
        $this->db->insert('rapor_pribadi',$data);
    }

    public function update_pribadi($data,$where){
        $this->db->where($where);
        $this->db->update('rapor_pribadi',$data);
    }

    public function update_siswa($data,$where){
        $this->db->where($where);
        $this->db->update('siswa',$data);
    }

    public function create_siswa($data){
        $this->db->insert('siswa',$data);
    }
}