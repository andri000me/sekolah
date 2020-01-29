<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

	public function import(){

		$fileA = $_FILES['file']['name'];
		
		$this->upload1($fileA);
		$this->upload2($fileA);
	
		redirect('supra/list_ujian');
		// echo var_dump($ujian_id);
	  }
	
	  public function upload1($fileName){
		// $fileName = time().$_FILES['paket_a']['name'];
		 
		$config['upload_path'] = './assets/upload/'; //buat folder dengan nama assets di root folder
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size'] = 10000;
		 
		$this->load->library('upload');
		$this->upload->initialize($config);
		 
		if(! $this->upload->do_upload('paket_a') )
		$this->upload->display_errors();
			 
		$media = $this->upload->data('paket_a');
		$inputFileName = './assets/upload/'.$config['file_name'];
		 
		try {
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
	
			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			 
			for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
												NULL,
												TRUE,
												FALSE);
												 
				//Sesuaikan sama nama kolom tabel di database                                
				 $data = array(
					// "id_koleksi_soal" => $id_paket,
					"soal_teks"       => $rowData[0][0],
					"opsi_a"          => $rowData[0][1],
					"opsi_b"          => $rowData[0][2],
					"opsi_c"          => $rowData[0][3],
					"opsi_d"          => $rowData[0][4],
					"opsi_e"          => $rowData[0][5],
					"kunci"           => $rowData[0][6],
				);
				 
				//sesuaikan nama dengan nama tabel
				// $insert = $this->db->insert("soal",$data);
				// delete_files($media['file_path']);
			}
		// redirect('supra/form_jadwal_ujian');
	}

	public function upload2($fileName){
		// $fileName = time().$_FILES['paket_a']['name'];
		 
		$config['upload_path'] = './assets/upload/'; //buat folder dengan nama assets di root folder
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size'] = 10000;
		 
		$this->load->library('upload');
		$this->upload->initialize($config);
		 
		if(! $this->upload->do_upload('paket_a') )
		$this->upload->display_errors();
			 
		$media = $this->upload->data('paket_a');
		$inputFileName = './assets/upload/'.$config['file_name'];
		 
		try {
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
	
			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			 
			for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
												NULL,
												TRUE,
												FALSE);
												 
				//Sesuaikan sama nama kolom tabel di database                                
				 $data = array(
					// "id_koleksi_soal" => $id_paket,
					"soal_teks"       => $rowData[0][0],
					"opsi_a"          => $rowData[0][1],
					"opsi_b"          => $rowData[0][2],
					"opsi_c"          => $rowData[0][3],
					"opsi_d"          => $rowData[0][4],
					"opsi_e"          => $rowData[0][5],
					"kunci"           => $rowData[0][6],
				);
				 
				//sesuaikan nama dengan nama tabel
				// $insert = $this->db->insert("soal",$data);
				// delete_files($media['file_path']);
			}
		// redirect('supra/form_jadwal_ujian');
	}
}
