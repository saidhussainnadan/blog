<?php

class blog extends CI_Controller{



	

	public function index(){

		$this->load->model('login');
		$aa = $this->login->allart();
		$this->load->view('view',['all'=>$aa]);
	}



	public function delet(){

		
		$this->load->model('login');
		if($this->login->del($this->input->post('id'))){
			
			return redirect('blog/dashboard');
			echo "Artical succesfuly delleted";
		}else{
			echo "Artical are not delleted plz try again!!";
		}





	}

	 


	public function logout(){

		$this->session->unset_userdata('id');
		return redirect('blog');
	}



	public function login(){

		$this->load->view('login');
		$this->load->model('login');
		$u = $this->input->post('uname');
		$p = $this->input->post('pass');

		$logid=$this->login->verify($u,$p);
		if($logid){

		$this->session->set_userdata('id',$logid);

		
			return redirect('blog/dashboard');




			

		}else{

			

			}		
		

		
	}


	public function dashboard(){


		$this->session->userdata('id');


		
		
		

		$this->load->model('login');
		
		$articals = $this->login->ArticalList();

		
		$this->load->view('dash',['artical'=>$articals]);

	
	
	}
	public function udateart(){
		
		$id = $this->input->post('id');
		$t  = $this->input->post('title');
		$b = $this->input->post('body');
		$this->load->model('login');
		$this->login->edit($id,$t,$b);
		

	}



	public function edit(){



		$this->load->model('login');
		$id = $this->input->post('id');
		$d = $this->login->update($id);
		
		$this->load->view('Edit',['up'=>$d]);


	}

	

	


	


}

?>