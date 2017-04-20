<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Emp extends CI_Controller {

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
	function __Construct(){
		parent::__Construct();
		$this->load->database();
		$this->load->model('EmployeeType');
	}

	function invalidAge($datebirth){
		$datecomp = date_diff(date_create(date('Y-m-d')),date_create($datebirth));		
		if($datecomp->format("%Y") < 18){
			$this->form_validation->set_message('invalidAge','invalid date of birth! must be 18 years old and above');
			return false;
		}else{
			return true;
		}
	}	
	
	public function index()
	{		
		$this->load->view('header');

		$this->data['EmployeeType'] = $this->EmployeeType->getEmpType();
		
		$this->load->helper('form');
		$this->load->library('form_validation');		
		$this->form_validation->set_rules(array(
			array(
				'field' => 'lname',
				'label' => 'Last Name',
				'rules' => 'required',
			),
			array(
				'field' => 'fname',
				'label' => 'First Name',
				'rules' => 'required',
			),
			array(
				'field' => 'mname',
				'label' => 'Middle Name',
				'rules' => 'required',
			),
			array(
				'field' => 'date_birth',
				'label' => 'Birth Date',
				'rules' => 'callback_invalidAge',
			),
			));			
			
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">',
			'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
		
		if ($this->form_validation->run() != TRUE){
			
		}else{
			$data = array(
				'employeeno' => date('Ymd-His'),
				'employeetype' => $this->input->post('emptype'),
				'jobtitle' => $this->input->post('jobtitle'),
				'jobdescription' => $this->input->post('jobdesc'),
				'birthdate' => $this->input->post('date_birth'),
				'datehired'=> $this->input->post('date_hire'),
				'lname' => $this->input->post('lname'),
				'fname' => $this->input->post('fname'),
				'mname' => $this->input->post('mname'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'tin_id' => $this->input->post('tin'),
				'sss_id' => $this->input->post('sss'),
				'philhealth_id' => $this->input->post('philhealth'),
				'pag_ibig_id' => $this->input->post('pagibig'),
				'empstatus' => 1,
				'is_user' => 0,
				'record_date' => date('Y-m-d H:i:s')
			);
			$this->db->set($data);
			$this->db->insert('tbl_employee',$data);
		}
		
		$this->load->view('form_register_emp',$this->data);
		$this->load->view('footer');
	}	
}