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

    public function getAllBlogsByAuthId($authId)
    {
        $this->db->query('SELECT * FROM ' . $this->table. ' WHERE authId = :authId');
        $this->db->bind('authId',$authId);
        return $this->db->resultSet();
    }

    public function getBlogsByPage($mulai, $halaman)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY `id` DESC LIMIT :mulai , :halaman');
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

    public function addBlog($authId, $title, $category, $content)
    {
        $this->db->query('INSERT INTO ' . $this->table . '(authId, title, category, date, content) VALUES(:authId, :title, :category, NOW(),:content)');
        $this->db->bind('authId',$authId);
        $this->db->bind('title',$title);
        $this->db->bind('category',$category);
        $this->db->bind('content',$content);
        $this->db->execute();
    }

    public function updateBlog($title, $category, $content, $id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET title=:title, category=:category, content=:content WHERE id=:id');
        $this->db->bind('title',$title);
        $this->db->bind('category',$category);
        $this->db->bind('content',$content);
        $this->db->bind('id',$id);
        $this->db->execute();
    }

    public function deleteBlog($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }

}