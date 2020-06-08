<?php

class Message_Model
{

    private $table = 'message';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMessages()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllMessagesById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addMessage($name, $email, $phone_number, $message)
    {

        $this->db->query('INSERT INTO ' . $this->table . '(name, email, phone_number, message) VALUES(:name, :email, :phone_number, :message)');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('message', $message);
        $this->db->execute();
    }

    public function updateMessage($name, $email, $phone_number, $message, $id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET name=:name, email=:email, phone_number=:phone_number, message=:message WHERE id=:id');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('message', $message);
        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function deleteMessage($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }

}