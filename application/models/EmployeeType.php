<?php

class EmployeeType extends CI_Model {

	public $emptypeid;
	public $emptypeno;
	public $emptypename;

    function getEmpType(){
        $this->db->select("emptypeid, emptypeno, emptypename");
        $this->db->from("tbl_employeetype");
        $query = $this->db->get();
        return $query->result();
    }
	
}