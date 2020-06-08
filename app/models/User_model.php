<?php

class User_model
{

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
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllUsersByUsername($username)
    {
//        SELECT * FROM users WHERE username=:username OR email=:email
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function getAllUsersNameById($id)
    {
        $this->db->query('SELECT full_name FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addUser($username, $password, $role, $full_name, $birth_date, $address, $email, $phone_number)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(username, password, role, full_name, birth_date, address, email, phone_number) VALUES(:username, :password, :role, :full_name, :birth_date, :address, :email, :phone_number)');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);
        $this->db->bind('full_name', $full_name);
        $this->db->bind('birth_date', $birth_date);
        $this->db->bind('address', $address);
        $this->db->bind('email', $email);
        $this->db->bind('phone_number', $phone_number);
        $this->db->execute();
    }

    public function updateUser($username, $password, $role, $full_name, $birth_date, $address, $email, $phone_number, $id)
    {
        $this->db->query(
            'UPDATE ' . $this->table . ' SET 
        username=:username, 
        password=:password, 
        role=:role, 
        full_name=:full_name, 
        birth_date=:birth_date, 
        address=:address, 
        email=:email, 
        phone_number=:phone_number 
        WHERE id=:id'
        );
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->bind('role', $role);
        $this->db->bind('full_name', $full_name);
        $this->db->bind('birth_date', $birth_date);
        $this->db->bind('address', $address);
        $this->db->bind('email', $email);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }

}