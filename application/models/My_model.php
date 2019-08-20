<?php

    class My_model extends CI_Model{

        // insert data to database
        public function sendData($data){
            $this->load->database();

            $query =  $this->db->insert('content', $data);

        }


        // return data from database
        public function fetch_data($query){
            $this->load->database();

            $this->db->select("*");
            $this->db->from("content");

            if ($query != ''){
                $this->db->like('name', $query);
            }
            return $this->db->get();



        
            }
    }



?>