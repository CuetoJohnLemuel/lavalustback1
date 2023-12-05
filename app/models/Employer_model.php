<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employer_model extends Model {

    public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}

	public function employerregister() {
        return $this->db->table('empregister')->get_all();
    }

    // public function showdetails($emp_id) {
    //     $result = $this->db->table('empregister')
    //                     ->where('emp_id', $emp_id)
    //                     ->get();
    // }

    public function showdetails($emp_id) {
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->get();
    }

    public function approvestatus($emp_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Approved'
        ];
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->update($data);
    }

    public function declinestatus($emp_id) {
        // $data = ($status == 'Approved');
        $data = [
            'status' => 'Decline'
        ];
        return $this->db->table('empregister')
                    ->where('emp_id', $emp_id)
                    ->update($data);
    }
}


// public function vacancy_approved($vacancy_id)
//     {
      
//         $this->jobvacancies->set('status', 'Approved')->where('vacancy_id', $vacancy_id)->update();

//         return redirect()->route('jobvacancy');
//     }
// $data = [
// 	'title' => 'new title',
// 	'status' => 2
// ];
// $this->db->table('table')->where('id', 10)->update($data);

// $data = [
// 	'username' => 'ronmarasigan',
// 	'password' => 'pass',
// 	'activation' => 1,
// 	'status' => 1
// ];

// $this->db->table('users')->where('id', 10)->update($data);

// ->where('id', $id)->update($data);;