<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->view('admin/Head');
    $this->load->view('admin/Dashboard');
		$this->load->view('admin/Footer');
	}
  public function Product()
	{
    $this->load->view('admin/Head');
    $this->load->view('admin/Product');
		$this->load->view('admin/Footer');
	}
  public function List($id)
	{
    $verif_nama = explode('_',$id);
    if (count($verif_nama) > 1) {
      $nama_jenis = "";
      foreach ($verif_nama as $key) {
        $nama_jenis .= $key." ";
    }
    }else{
      $nama_jenis = $id;
    }
    $data = [
      'or_jenis' => $id,
      'jenis' => $nama_jenis
    ];
    $this->load->view('admin/Head');
    $this->load->view('admin/CustomList',$data);
		$this->load->view('admin/Footer');
	}
  public function Add()
        {
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
								$config['overwrite'] = true;
                $this->load->library('upload', $config);
								$this->upload->initialize($config);
                $cat = $this->input->post('category');
                if($this->upload->do_upload('gambar'))
                {
                        $imagez = array('upload_data' => $this->upload->data());
												//print_r($imagez['upload_data']['file_name']);
												$data_input = array(
													'images' => $imagez['upload_data']['file_name'],
                          'description' => $this->input->post('description'),
                          'description' => $this->input->post('description'),
                          'description' => $this->input->post('description'),
													'description' => $this->input->post('description'),
												);
												 $this->Main->Insert('custom',$data_input);
												 $this->session->set_flashdata('Dashboard', 'Berhasil Update gambar carousel.');
												 redirect(base_url('/admin/'),'refresh');
                }else
                {
                        $error = array('error' => $this->upload->display_errors());
												$this->session->set_flashdata('upload_fail', 'Gagal Update gambar carousel.');
												redirect(base_url('/admin/'),'refresh');
                }
}
}
