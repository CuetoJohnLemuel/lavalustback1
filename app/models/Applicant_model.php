<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Applicant_model extends Model {
    public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}
    
    public function applicantlist() {
        return $this->db->table('applicant')->get_all();
    }

    public function categorymar() {
        $where = [
            'category' => 'Marketing',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorycust() {
        $where = [
            'category' => 'Customer Service',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categoryhum() {
        $where = [
            'category' => 'Human Resource',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorypro() {
        $where = [
            'category' => 'Project Management',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorybus() {
        $where = [
            'category' => 'Business Development',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorysal() {
        $where = [
            'category' => 'Sales & Communication',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorytec() {
        $where = [
            'category' => 'Teaching & Education',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function categorydes() {
        $where = [
            'category' => 'Design & Creative',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function joblistfull() {
        $where = [
            'job_type' => 'Full Time',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function joblistpart() {
        $where = [
            'job_type' => 'Part Time',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->where($where)
        ->get_all();
    }

    public function countmar() {
        $where = [
            'category' => 'Marketing',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function countcust() {
        $where = [
            'category' => 'Customer Service',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function counthum() {
        $where = [
            'category' => 'Human Ressource',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function countpro() {
        $where = [
            'category' => 'Project Management',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function countbus() {
        $where = [
            'category' => 'Business Development',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function countsal() {
        $where = [
            'category' => 'Sales & Communication',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function counttec() {
        $where = [
            'category' => 'Teaching & Education',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function countdes() {
        $where = [
            'category' => 'Design & Creative',
            'status' => 'Approved'
        ];
        return $this->db->table('postjob')
        ->select_count('category', 'total_row')
        ->where($where)
        ->get();
    }

    public function applydetails($vacancy_id) {
        return $this->db->table('postjob')
                    ->where('vacancy_id', $vacancy_id)
                    ->get();
    }

    public function addapplicant( $applicant_id, $full_name, $address, $category, $status, $sex, $contactnum, $email, $password) 
        {
            $data = array(

                'applicant_id' =>$applicant_id,
                'full_name' =>	$full_name,
                'address' =>	$address,
                'category' =>	$category,
                'status' =>	$status,
                'sex' =>	$sex,
                'contact' =>	$contactnum,
                'email' =>	$email,
                'password' =>	$password
    
            );
    
            return $this->db->table('applicant')
                ->insert($data);
    
            if($result)
                return true;
        }

        // public function applicantdata($password, $email)
        // {
        //     return $this->db->table('applicant')->where ('password', $password OR 'email', $email)->get();
        // }


         public function email($email) {

            return $this->db->table('applicant')->where('email', $email)->get();

        }

        public function password($password) {

            return $this->db->table('applicant')->where('password', $password)->get();

        }

        public function isLoggedIn(){
            if($this->session->userdata('loggedin') === 1)
                return true;
        }

        public function applicant_list() {
            return $this->db->table('applicant')->get_all();
        }

        public function removeapplicant($id) {
            // $data = ($status == 'Approved');
            $data = [
                'applicant_status' => 'Removed'
            ];
            return $this->db->table('applicant')
                        ->where('id', $id)
                        ->update($data);
        }
}
?>
