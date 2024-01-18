<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user_hafizh";

    public $id;
    public $id_hafizh;
    public $nama_hafizh;
    public $username_hafizh;
    public $password_hafizh;
    public $level_hafizh;

    public function rules()
    {
        return [
            ['field' => 'idh',
            'label' => 'Idh',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required'],
        ];
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_hafizh = $post["idh"];
        $this->nama_hafizh = $post["nama"];
        $this->username_hafizh = $post["username"];
        $this->password_hafizh = $post["password"];
        $this->level_hafizh = $post["level"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_hafizh = $post["idh"];
        $this->nama_hafizh = $post["nama"];
        $this->username_hafizh = $post["username"];
        $this->password_hafizh = $post["password"];
        $this->level_hafizh = $post["level"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function caridata($keyword)
    {
	    if(!$keyword){
		return null;
	    }
	    $this->db->like('nama_hafizh', $keyword);
	    $this->db->or_like('id_hafizh', $keyword);
        $this->db->or_like('username_hafizh', $keyword);
        $this->db->or_like('level_hafizh', $keyword);
	    $query = $this->db->get($this->_table);
	    return $query->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}