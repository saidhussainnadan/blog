<?php


class addpost extends CI_controller{


	public function addblog(){
		$this->load->view('add');
		
}

	public function adbolog(){
		$t = $this->input->post('title');
		$a = $this->input->post('Artical');
		$i = $this->session->userdata('id');
		$this->load->model('login');
		$this->login->Add_mod($t,$a,$i);

		return redirect('blog/dashboard');
	}




	 public function newuser(){

	 	$this->load->view('Register');
	 }


	 public function reg(){
	 	$this->load->model('login');


	 	$userinfo =array
			(
				'username' => $this->input->post('uname'),
				'password' => $this->input->post('pass'),
				'email'=>$this->input->post('email'),
				'city'=>$this->input->post('city'),
				'phone'=>$this->input->post('phone')
			);

			$this->login->userd($userinfo);

			return redirect('blog/login');

	 }



	


	

}




?>