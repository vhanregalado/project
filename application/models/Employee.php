<?php

class Employee extends CI_Model {

	public $employeeid;
	public $employeeno;
	public $employeetype;
	public $jobtitle;
	public $jobdescription;
	public $lname;
	public $fname;
	public $mname;
	public $birthdate;
	public $gender;
	public $address;	
	public $phone;
	public $mobile;
	public $email;
	public $tin_id;
	public $sss_id;
	public $philhealth_id;
	public $pag_ibig_id;
	public $datehired;
	public $empstatus;
	public $is_user;
	public $record_date;

	function getEmpNo(){
        $query = $this->db->query("SELECT * FROM tbl_employee");
        return $query->result();
    }

}