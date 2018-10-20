<?php

class login extends CI_model{

	public function verify($uname,$pass){
		
		$data = $this->db->where(['username'=>$uname,'password'=>$pass])
			->get('user');

			if($data->num_rows()==1){
				return $data->row()->id;
			}else{
				return false;

			}


		
	}


	public function update($id){

		$q = $this->db->select()
				->where('id',$id)
				->get('art');
				return $q->row();

	}


	public function ArticalList(){
		$i = $this->session->userdata('id');
		$data=$this->db->select()
					->from('art')
					->where(['user_id'=>$i])
					->get();

					return $data->result();


	}


	public function Add_mod($t,$b,$i){


$data = array
			(
				'titel' => $t,
				'body' => $b,
				'user_id'=>$i
			);



	      $this->db->insert('art',$data);
	      
	      

      	


	}


	public function userd($d){
		$this->db->insert('user',$d);

	}


	public function allart(){

		$data=$this->db->select(['titel','body'])
					->from('art')
					->get();

					return $data->result();

	}

	public function del($id){

		return $this->db->delete('art',['id'=>$id]);
		

	}

	public function edit($i,$t,$b){

			
             $this->db->where('id',$i)
                ->update('art',['titel'=>$t,'body'=>$b]);

                print_r($i.$t.$b);
                exit();

		
	}


}


?>