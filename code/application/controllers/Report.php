<?php

class Report extends CI_Controller{
function __construct(){
    parent::__construct();
        $this->load->model('m_admin');
    $this->load->helper('url');
  }

  function index(){
     $data['contact'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_report',$data);
  }

  function download(){
    $filename = 'report.xls';
  header('Content-Type:   application/ms-excel');
  header('Content-Disposition: attachment; filename=' .$filename);
  $data['contact'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_report',$data);

  }
}