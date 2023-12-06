<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manual_guide extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('form_validation');

	}
    
    
    public function index()
    {
            if($this->session->userdata('loginuser') == true && $this->session->userdata('userid') != '' && $_SESSION['user_logs'] == $this->panda->validate_login())
            {     
                $user_guid = $_SESSION['user_guid'];
                $customer_guid =  $_SESSION['customer_guid'];
                $file_path = $this->db->query("SELECT * FROM lite_b2b.acc WHERE acc_guid = '$customer_guid'");
                $path = $file_path->row('file_path');
                $file_config_main_path = $this->file_config_b2b->file_path_name($customer_guid,'web','manual_guide','sec_path','MNLGS');
                $defined_path = $file_config_main_path.$path;
                //print_r($defined_path); die;
                if ( isset($_REQUEST['sv']) ) {

                    $search_value = $this->input->post('search_value');

                    $manual_guide = $this->db->query("SELECT title, description, file_name FROM lite_b2b.manual_guide WHERE active = '1' AND customer_guid = '$customer_guid' AND title LIKE '%$search_value%' ORDER BY seq ASC");
                } else{

                    $manual_guide = $this->db->query("SELECT title, description, file_name FROM lite_b2b.manual_guide WHERE active = '1' AND lang_type = 'EN' AND customer_guid = '$customer_guid' ORDER BY seq ASC");

                    $search_value = '';

                }

                $this->panda->get_uri();

                /*if ($_SESSION['user_group_name'] != "SUPER_ADMIN" ) {
                    $invoice_list = $this->db->query("SELECT * FROM b2b_invoice.supplier_monthly_main WHERE biller_guid = '$supplier_guid' AND inv_status != 'New' ");
                } else{

                    $invoice_list = $this->db->query("SELECT * FROM b2b_invoice.supplier_monthly_main ");

                }
*/
                
  
                $data = array(

                'manual_guide' => $manual_guide,
                'search_value' => $search_value,
                'path' => $path,
                'defined_path' => $defined_path,
                
                );

                $this->panda->get_uri();
                $this->load->view('header');
                $this->load->view('manual_guide/main', $data);
                $this->load->view('footer');  

            }
            else
            {
                $this->session->set_flashdata('message', 'Session Expired! Please relogin');
                redirect('#');
            }  
        
    }

            public function change_language()
    {
         
            $language_type = $_REQUEST['lt'];
            $customer_guid = $_SESSION['customer_guid'];
            $file_path = $this->db->query("SELECT * FROM lite_b2b.acc WHERE acc_guid = '$customer_guid'");
            $path = $file_path->row('file_path');

            $manual_guide = $this->db->query("SELECT title, description, file_name FROM lite_b2b.manual_guide WHERE active = '1' AND lang_type = '$language_type' AND customer_guid = '$customer_guid' ORDER BY seq ASC")->result();            


            $data = array(
                'manual_guide' => $manual_guide,
                'path' => $path
            );

            echo json_encode($data);
        
            

   
    }





}
?>