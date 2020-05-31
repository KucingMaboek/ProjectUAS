<?php

class Blog_model{

    private $table = 'blogs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlogs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBlogsByPage($mulai, $halaman)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT :mulai , :halaman');
        $this->db->bind('mulai',$mulai);
        $this->db->bind('halaman',$halaman);
        return $this->db->resultSet();
    }

    public function getAllBlogsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function addBlog($nim, $nama, $jurusan)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(nim, nama, jurusan) VALUES(:nim, :nama, :jurusan)');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
    }

    public function updateBlog($nim, $nama, $jurusan)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, jurusan=:jurusan WHERE nim=:nim');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
    }

    public function deleteBlog($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }

}