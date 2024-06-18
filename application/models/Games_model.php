<?php
 
class Games_model extends CI_Model
{
 
 	// public function getAllGamesJoin()
    // {
    //      $this->db->select('*');
    //      $this->db->from('users_sub_menu_games');
    //      $this->db->join('users_games','users_games.id_sub_menu_games_games=users_sub_menu_games.judul_sub_menu_games');
    //      $query = $this->db->get();
    //      return $query->result_array();
    // }
    public function getAllGamesJoin()
    {
         $this->db->select('*');
         $this->db->from('users_games');
         $this->db->join('users_sub_menu_games','users_sub_menu_games.id_sub_menu_games=users_games.id_sub_menu_games_games');
         $query = $this->db->get();
         return $query->result_array();
    }

	public function getAllGames1()
	    {
	        $this->db->order_by('id_sub_menu_games_games', 'ASC');
	        return  $this->db->get('users_games')->result_array();
	 
	    }
 
    public function getAllGames()
    {
        $this->db->order_by('id_sub_menu_games', 'ASC');
        return  $this->db->get('users_sub_menu_games')->result_array();
 
    }
 
    public function tambahGames($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }
 
    public function getGamesById($id)
    {
        return $this->db->get_where('users_sub_menu_games',['id_sub_menu_games' => $id])->row_array();
         
    }
 
    public function editGames($id)
    {
        $data['users_sub_menu_games'] = $this->db->get_where('users_sub_menu_games',['id_sub_menu_games' => $id])->row_array();
        
         
        // cek jika ada gambar yang di upload
        $upload_image = $_FILES['image'];
 
        if($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1048';
            $config['upload_path'] = './assets/img/users_sub_menu_games';
            $config['encrypt_name'] = TRUE;
      
           
            $this->load->library('upload', $config);
             
           if($this->upload->do_upload('image')) {
               $old_image = $data['users_sub_menu_games']['gambar'];
               $path = './assets/img/users_sub_menu_games/';
 
               if($old_image != 'default.jpeg') {
                   unlink(FCPATH.$path.$old_image);
               } 
                
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar',$new_image);
 
            } else {
                   $this->upload->display_errors();                
                    
               }
           }
           $data = [
                    "judul" => $this->input->post('judul', true),
                    "price" => $this->input->post('price', true),
                    "stock" => $this->input->post('stock', true),
                    "kategori" => $this->input->post('kategori', true),
                    "status" => $this->input->post('status', true), 
                    "tanggal" => $this->input->post('tanggal', true),
                    "user" => $this->input->post('user', true)
           ];
           $this->db->where('id_sub_menu_games', $this->input->post('id_sub_menu_games'));
           $this->db->update('users_sub_menu_games', $data);
    }
 
    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('users_sub_menu_games');
    }
}