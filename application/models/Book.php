<?php

class Book extends CI_Model {
    public $id;
    public $title;
    public $author;
    public $year;
    public $publisher;
    public $imagepath;

    public function getAll()
   {
       $query = $this->db->get('Book');
       return $query->result();
   }

   public function insert()
   {
    $data = array(
        'title' => $this->input->post('title',true),
        'author' => $this->input->post('author',true),
        'year' => $this->input->post('year',true),
        'publisher' => $this->input->post('publisher',true),
        'imagepath' => $this->input->post('imagepath',true),
    );

    if($this->db->insert('book',$data)){
        return TRUE;
    } 
   }

   public function getByID($id){
    return $this->db->get_where('book',['id' => $id]) ->row_array();
   }

   public function update(){
    $data = array(
        'title' => $this->input->post('title',true),
        'author' => $this->input->post('author',true),
        'year' => $this->input->post('year',true),
        'publisher' => $this->input->post('publisher',true),
        'imagepath' => $this->input->post('imagepath',true),
    );
    $this->db->update('book', $data, array('id'=>$this->input->post('id',true)));
   }

   public function delete($id){
    $this->db->delete('book', array('id'=>$id));
   }
}

?>