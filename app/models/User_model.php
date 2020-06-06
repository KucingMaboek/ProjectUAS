<?php

class User_model{

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllUsersById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getAllUsersByUsername($username)
    {
//        SELECT * FROM users WHERE username=:username OR email=:email
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username OR email=:email');
        $this->db->bind('username',$username);
        $this->db->bind('email',$username);
        return $this->db->single();
    }

    public function getAllUsersNameById($id)
    {
        $this->db->query('SELECT full_name FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function addUser($nim, $nama, $jurusan)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(nim, nama, jurusan) VALUES(:nim, :nama, :jurusan)');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
    }

    public function updateUser($nim, $nama, $jurusan)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, jurusan=:jurusan WHERE nim=:nim');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }

}