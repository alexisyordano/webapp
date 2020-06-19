<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('save_model');
        

    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function save()
	{
        

        $file_name = $_FILES['userfile']['name'];
        $config['upload_path'] = './foto/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
		$config['max_width'] = '2024';
		$config['max_height'] = '2008';
		$foto = $file_name;
		// $config['file_name'] = '2008';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile'))
        {
           $error =  array('error' => $this->upload->display_errors());
           $this->load->view('welcome', $error);
        }

        else
        { 
        	// $foto = $file_name;
        	$data = array ('upload_data' => $this->upload->data());
			$foto = $this->upload->do_upload('image_file');
			$file_info = $this->upload->data();
			// print_r($file_name);
        }
        
        // echo $foto;
		$nombre = $this->input->post('nombre_cuenta');
		$referencia = $this->input->post('referencia_pago');
		$numero =  $this->input->post('numero_cuenta');
		$codigo = $this->input->post('codigo');
        $guardar = $this->save_model->savemodel($nombre,$referencia,$numero,$codigo,$file_name);

		if($guardar == TRUE)
		{
			// echo 'exito';
			redirect('welcome/listar?msj=1');
		}
	}

	public function listar()
	{
		$data = array(
            'titulo' => 'Bienvenidos',
            'datas' => $this->save_model->listar(),

            
        );

		$this->load->view('listar',$data);
	}


	public function delete($id_transferencia)
	{
		// echo $id_transferencia;
		if ($this->save_model->deleteSave($id_transferencia))
		 {

       		redirect('welcome/listar/msj?msj=3');
		}
	}

	public function edit($id_transferencia)
	{
		// echo $id_transferencia;
		if (!$id_transferencia == null)
		{
    		$data = array(
            	'datas' => $this->save_model->edit_save($id_transferencia)
            );
        }
        
		$this->load->view('modificar_view', $data);	
	}

	public function save_update()
	{    
		$id_transferencia = $this->input->post('id_transferencia');
        $nombre = $this->input->post('nombre_cuenta');
		$referencia = $this->input->post('referencia_pago');
		$numero =  $this->input->post('numero_cuenta');
		$codigo = $this->input->post('codigo');
		$update = $this->save_model->update($id_transferencia,$nombre,$referencia,$numero,$codigo);
		if($update)
		{
			// echo 'exito;';
			redirect('welcome/listar?msj=2');
		}
	}

}
