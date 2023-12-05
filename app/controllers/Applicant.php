<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Applicant extends Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->call->model('Applicant_model');
		$this->call->library('session');
		$this->call->helper('url');
		$this->call->database();
	}

	public function applicanthome() {
		$data['countmar'] = $this->Applicant_model->countmar();
		$data['countcust'] = $this->Applicant_model->countcust();
		$data['counthum'] = $this->Applicant_model->counthum();
		$data['countpro'] = $this->Applicant_model->countpro();
		$data['countbus'] = $this->Applicant_model->countbus();
		$data['countsal'] = $this->Applicant_model->countsal();
		$data['counttec'] = $this->Applicant_model->counttec();
		$data['countdes'] = $this->Applicant_model->countdes();
		$data['listfull'] = $this->Applicant_model->joblistfull();
		$data['listpart'] = $this->Applicant_model->joblistpart();
		$this->call->view('Applicant/applicanthome', $data);
	}

	public function contact() {
		$this->call->view('Applicant/contact');
	}

	public function about() {
		$this->call->view('Applicant/about');
	}

	public function listmarketing() {
		$data['category'] = 'Marketing';
		$data['list'] = $this->Applicant_model->categorymar();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listcustomerservice() {
		$data['category'] = 'Customer Service';
		$data['list'] = $this->Applicant_model->categorycust();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listhumanresource() {
		$data['category'] = 'Human Resource';
		$data['list'] = $this->Applicant_model->categoryhum();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listprojectmanagement() {
		$data['category'] = 'Project Management';
		$data['list'] = $this->Applicant_model->categorypro();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listbusinessdevelopment() {
		$data['category'] = 'Business Development';
		$data['list'] = $this->Applicant_model->categorybus();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listsalescommunication() {
		$data['category'] = 'Sales & Communication';
		$data['list'] = $this->Applicant_model->categorysal();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listteachingeducation() {
		$data['category'] = 'Teaching & Education';
		$data['list'] = $this->Applicant_model->categorytec();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function listdesigncreative() {
		$data['category'] = 'Design & Creative';
		$data['list'] = $this->Applicant_model->categorydes();
		$this->call->view('Applicant/job_categorylist', $data);
	}

	public function job_list() {
		$data['listfull'] = $this->Applicant_model->joblistfull();
		$data['listpart'] = $this->Applicant_model->joblistpart();
		$this->call->view('Applicant/job_list', $data);
	}

	public function job_detail() {
		$this->call->view('Applicant/job_detail');
	}

	public function category() {
		$data['countmar'] = $this->Applicant_model->countmar();
		$data['countcust'] = $this->Applicant_model->countcust();
		$data['counthum'] = $this->Applicant_model->counthum();
		$data['countpro'] = $this->Applicant_model->countpro();
		$data['countbus'] = $this->Applicant_model->countbus();
		$data['countsal'] = $this->Applicant_model->countsal();
		$data['counttec'] = $this->Applicant_model->counttec();
		$data['countdes'] = $this->Applicant_model->countdes();
		$this->call->view('Applicant/category', $data);
	}

	public function e404() {
		$this->call->view('Applicant/e404');
	}

	public function applicantregister() {
		$this->call->view('Applicant/applicantregister');
	}

	public function applydetails($vacancy_id) {
		$data = $this->Applicant_model->applydetails($vacancy_id);
		$this->call->view('Applicant/applydetails', $data);
	}

	public function uploadfile()
	{
		$this->call->library('upload', $_FILES["userfile"]);
		$this->upload
			->set_dir('public')
			->allowed_extensions(array('jpg'))
			->allowed_mimes(array('image/jpeg'))
			->is_image();
		if($this->upload->do_upload()) {
			$data['filename'] = $this->upload->get_filename();
        $path = "public/" . $this->upload->get_filename();
		redirect('job_list');
	}
}

public function registerapplicant() {
	// $employer_name = $this->io->post('employer_name');
	$applicant_id = $this->io->post('applicant_id');
	$full_name = $this->io->post('full_name');
	$address = $this->io->post('address');
	$category = $this->io->post('category');
	$status = $this->io->post('status');
	$sex = $this->io->post('sex');
	$contactnum = $this->io->post('contactnum');
	$email = $this->io->post('email');
	$password = $this->io->post('password');

	$result = $this->Applicant_model->addapplicant($applicant_id, $full_name, $address, $category, $status, $sex, $contactnum, $email, $password);

	if($result)
		redirect('applicantregister');
}

public function applicantlogin()
{
	$this->call->view('Applicant/applicantlogin');
}



public function process_login() {
	$email = $this->io->post('email');
	$password = $this->io->post('password');
	$applicant_data = $this->Applicant_model->email($email);
    $applicant_data = $this->Applicant_model->password($password);
	if($applicant_data){
		if ($applicant_data['password'] == $password) {
			redirect('applicanthome/'. $applicant_data['id']);
			// if (password_verify($password, $applicant_data['password'])) {
			// 	$this->session->set_userdata(array('email' => $email, 'id' => $applicant_data['id'], 'loggedin' => 1));
			// 	redirect('applicanthom/'. $applicant_data['id']);
			// } else {
			// 	redirect('applicantlogin');
			// 	return;
			// }
		}
		else {
			redirect('applicantlogin');
			return;
		}
	}
		
	
	redirect('login');
}
}
?>
