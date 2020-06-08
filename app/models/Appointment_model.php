<?php

class Appointment_model
{

    private $table = 'appointment';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAppointments()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllAppointmentsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addAppointment($name, $email, $skype_id, $phone_number, $date, $time, $subject, $conversation, $message)
    {

        $this->db->query('INSERT INTO ' . $this->table . '(name, email, skype_id, phone_number, date, time, subject, conversation, message) VALUES(:name, :email, :skype_id, :phone_number, :date, :time, :subject, :conversation, :message)');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('skype_id', $skype_id);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('date', $date);
        $this->db->bind('time', $time);
        $this->db->bind('subject', $subject);
        $this->db->bind('conversation', $conversation);
        $this->db->bind('message', $message);
        $this->db->execute();
    }

    public function updateAppointment($name, $email, $skype_id, $phone_number, $date, $time, $subject, $conversation, $message, $id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET name=:name, email=:email, skype_id=:skype_id, phone_number=:phone_number, date=:date, time=:time, subject=:subject, conversation=:conversation, message=:message WHERE id=:id');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('skype_id', $skype_id);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('date', $date);
        $this->db->bind('time', $time);
        $this->db->bind('subject', $subject);
        $this->db->bind('conversation', $conversation);
        $this->db->bind('message', $message);
        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function deleteAppointment($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }

}