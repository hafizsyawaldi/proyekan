<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("home");
    }

    public function list() 
    {
        $data["user"] = $this->user_model->getAll();
        $this->load->view("daftar", $data); //menampilkan
    }

    public function cari() 
    {

        $data['keyword'] = $this->input->get('keyword');
		$this->load->model('user_model');

		$data['search_result'] = $this->user_model->caridata($data['keyword']);
		
		$this->load->view('cari_form.php', $data);
    }

    public function add() //nambah data
    {
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        } 

        $this->load->view("new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) show_404();
       
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
        } 

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url("/user/list"));
        }
    }
}