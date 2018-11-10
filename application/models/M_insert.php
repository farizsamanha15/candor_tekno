<?php  

class M_insert extends CI_Model {

	public function tambah_stok($stok, $id){
		// $query=$this->db->query("  UPDATE `produk` SET `stok`=".$stok." WHERE `id_produk`=".$id);		
	}
	public function get_stok($status){
		// $query=$this->db->query("Select * From `produk` where id_produk=".$status);
		// return $query->result_array();
	}

}