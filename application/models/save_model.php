<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Save_model extends CI_Model
 {
	
	 public function __construct() 
   {

		parent::__construct();
	 }
	
	public function savemodel($nombre,$referencia,$numero,$codigo,$file_name)
	{

  		$data = array(

      'nombre_cuenta' => $nombre,
      'referencia_pago' => $referencia,
      'numero_cuenta' => $numero,
      'codigo' => $codigo,
      'capture' => $file_name,

      );

       return $this->db->insert('datos', $data);

	}


  public function listar()
  {
      $this->db->select('*'); 
      $this->db->from('datos'); 
      $query = $this->db->get(); 
      return $query->result(); 
  }

  public function deleteSave($id_transferencia)
  {
     return $this->db->where('id_transferencia', $id_transferencia)->delete('datos');
  }

  public function edit_save($id_transferencia)
  {
        $this->db->select('*'); 
        $this->db->from('datos'); 
        $this->db->where('id_transferencia', $id_transferencia); 
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return $query->row();
        }
  } 


  public function update($id_transferencia,$nombre,$referencia,$numero,$codigo)
  {
     $data = array(
       
      'id_transferencia' => $id_transferencia,
      'nombre_cuenta' => $nombre,
      'referencia_pago' => $referencia,
      'numero_cuenta' => $numero,
      'codigo' => $codigo,

      );

     $this->db->where("id_transferencia",$id_transferencia);
     return $this->db->update("datos",$data);
  }   
    
        
}
