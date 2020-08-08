<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$this->load->model('M_Apps');
		$data["users"] = $this->M_Apps->show('user')->result();
		$this->load->view('v_user',$data);
	}
	
	public function delete($id)
	{
		$where = array(
			'id' => $id
		);
		
		$this->load->model('M_Apps');
		$this->M_Apps->hapus('user',$where);
		redirect(base_url('index.php/dashboard'));
	}


	public function create()
	{
		$this->load->view('v_addUser');
	}
	
	public function save()
	{
		$data = array (
			'name' => $this->input->post('name'),
			'userName' => $this->input->post('username'),
			'userPassword' => $this->input->post('password'),
			'createdAt' => date('Y-m-d H:i:s'),
			'updatedAt' => date('Y-m-d H:i:s')
		);
		
		
		$this->load->model('M_Apps');
		$this->M_Apps->create('user',$data);
		redirect(base_url('index.php/dashboard'));
	}
	
	
	public function update($id)
	{
		$where = array(
			'id' => $id
		);
		
		$this->load->model('M_Apps');
		$data['users'] = $this->M_Apps->search('user',$where)->result();
		$this->load->view('v_updateUser',$data);
	}

	
	public function updated($id)
	{
		$where = array(
			'id' => $id
		);
		
		
		$data = array (
			'name' => $this->input->post('name'),
			'userName' => $this->input->post('username'),
			'userPassword' => $this->input->post('password'),
			'createdAt' => date('Y-m-d H:i:s'),
			'updatedAt' => date('Y-m-d H:i:s')
		);
		
		
		$this->load->model('M_Apps');
		$this->M_Apps->update('user',$data,$where);
		redirect(base_url('index.php/dashboard'));
	}
	
}
