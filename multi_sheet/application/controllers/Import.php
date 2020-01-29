<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

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

    public function __construct(){
        parent::__construct();  
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->model('m_import');
      }

	public function index()
	{
        $ids = $_GET['ids'];
        $idk = $_GET['idk'];

        $nama_sekolah = $this->m_import->get_nama_sekolah($ids)->result();
        $nama_kelas = $this->m_import->get_nama_kelas($idk)->result();

        $data = array(
            'ids'   => $nama_sekolah,
            'idk'   => $nama_kelas,
        );

		$this->load->view('import',$data);
    }
    
    public function tulis(){
		echo "abcd";
	}

	public function proses_import(){
		$fileName = $_FILES['file']['name'];
		 
		$config['upload_path'] = './assets/upload/'; //buat folder dengan nama assets di root folder
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size'] = 10000;
		 
		$this->load->library('upload');
		$this->upload->initialize($config);
		 
		if(! $this->upload->do_upload('file') )
		$this->upload->display_errors();
			 
		$media = $this->upload->data('file');
		$inputFileName = './assets/upload/'.$config['file_name'];
		// $inputFileName = './assets/upload/rapor.xlsx';
		
		$data = array(
			'siswa' => $this->input->post('jml_siswa'),
			// 'siswa' => 1,
            'sekolah'   => $this->input->post('sekolah'),
            'kelas'     => $this->input->post('kelas'),
            'idk'     => $this->input->post('idk'),
        );
        
		$this->siswa_spiritual($inputFileName,$data);
		$this->siswa_sosial($inputFileName,$data);
		$this->siswa_nis($inputFileName,$data);
		$this->siswa_thn_pelajaran($inputFileName,$data);
		$this->siswa_saran($inputFileName,$data);
		$this->siswa_fispres($inputFileName,$data);
		$this->siswa_siswa($inputFileName,$data);
		$this->siswa_ekstra($inputFileName,$data);

		$this->pengetahuan_pai($inputFileName,$data);
		$this->pengetahuan_nis($inputFileName,$data);
		$this->pengetahuan_kkm($inputFileName,$data);
		$this->pengetahuan_mat($inputFileName,$data);
		$this->pengetahuan_ind($inputFileName,$data);
		$this->pengetahuan_ipa($inputFileName,$data);
		$this->pengetahuan_ips($inputFileName,$data);
		$this->pengetahuan_olg($inputFileName,$data);
		$this->pengetahuan_pkn($inputFileName,$data);
		$this->pengetahuan_sdbp($inputFileName,$data);
		$this->pengetahuan_bjw($inputFileName,$data);
		
		$this->keterampilan_pai($inputFileName,$data);
		$this->keterampilan_nis($inputFileName,$data);
		$this->keterampilan_kkm($inputFileName,$data);
		$this->keterampilan_mat($inputFileName,$data);
		$this->keterampilan_ind($inputFileName,$data);
		$this->keterampilan_ipa($inputFileName,$data);
		$this->keterampilan_ips($inputFileName,$data);
		$this->keterampilan_olg($inputFileName,$data);
		$this->keterampilan_pkn($inputFileName,$data);
		$this->keterampilan_sdbp($inputFileName,$data);
        $this->keterampilan_bjw($inputFileName,$data);
        
        redirect('http://prototype123.site/media.php?module=pilih_inputrapor_langsung');
	  }
	
	public function siswa_spiritual($inputFileName,$data){
		$siswa      = $data['siswa'];
		$kelas      = $data['kelas'];
		$sekolah    = $data['sekolah'];
	   try {
		   $inputFileType = IOFactory::identify($inputFileName);
		   $objReader = IOFactory::createReader($inputFileType);
		   $objPHPExcel = $objReader->load($inputFileName);
	   } catch(Exception $e) {
		   die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	   }
		   $awal = 9;
		   $sheetCurrent =  $objPHPExcel->getSheet(15);
		   // $highestRow = $sheetCurrent->getHighestRow();
		   $highestRow = $awal+$siswa;
		   $highestColumn =$sheetCurrent->getHighestColumn();
	   for ($row = $awal; $row < $highestRow; $row++){                                  
		   $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
										   NULL,
										   TRUE,
										   FALSE);
			$data = array(
			   "nama"       		=> $rowData[0][1],
			   "sikap_spiritual"   	=> $rowData[0][6],
               "sekolah"  	        => $sekolah,
               "kelas"  	        => $kelas,
           );
           $this->m_import->create_pribadi($data);
		//    print("<pre>".print_r($data,true)."</pre>");
   }
   }
   
   public function siswa_sosial($inputFileName,$data){
	   $siswa = $data['siswa'] ;

	   try {
		   $inputFileType = IOFactory::identify($inputFileName);
		   $objReader = IOFactory::createReader($inputFileType);
		   $objPHPExcel = $objReader->load($inputFileName);
	   } catch(Exception $e) {
		   die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	   }
		   $awal = 8;
		   $sheetCurrent =  $objPHPExcel->getSheet(16);
		   // $highestRow = $sheetCurrent->getHighestRow();
		   $highestRow = $awal+$siswa;
		   $highestColumn =$sheetCurrent->getHighestColumn();
	   for ($row = $awal; $row < $highestRow; $row++){                                  
		   $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
										   NULL,
										   TRUE,
                                           FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
			$data = array(
			   "sikap_sosial"  	=> $rowData[0][8],
           );
           $this->m_import->update_pribadi($data,$where);
		//    print("<pre>".print_r($data,true)."</pre>");
   }
   }

	  public function siswa_saran($inputFileName,$data){
		  $siswa = $data['siswa'] ;
  
		  try {
			  $inputFileType = IOFactory::identify($inputFileName);
			  $objReader = IOFactory::createReader($inputFileType);
			  $objPHPExcel = $objReader->load($inputFileName);
		  } catch(Exception $e) {
			  die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		  }
			  $awal = 18;
			  $sheetCurrent =  $objPHPExcel->getSheet(31);
			  // $highestRow = $sheetCurrent->getHighestRow();
			  $highestRow = $awal+$siswa;
			  $highestColumn =$sheetCurrent->getHighestColumn();
		  for ($row = $awal; $row < $highestRow; $row++){                                  
			  $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
											  NULL,
											  TRUE,
                                              FALSE);
                $where = array(
                    "nama"       	=> $rowData[0][1],
                );
			   $data = array(
				  "saran"  => $rowData[0][2],
              );
              $this->m_import->update_pribadi($data,$where);
			//   print("<pre>".print_r($data,true)."</pre>");
	  }
      }            
      
	  public function siswa_nis($inputFileName,$data){
        $siswa = $data['siswa'] ;

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
            $awal = 6;
            $sheetCurrent =  $objPHPExcel->getSheet(32);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       				=> $rowData[0][1],
            );
             $data = array(
                "nis"  			=> $rowData[0][2],
                "alamat"  			=> $rowData[0][7],
            );
            $this->m_import->update_pribadi($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
    }
	
	  public function siswa_fispres($inputFileName,$data){
		  $siswa = $data['siswa'] ;
  
		  try {
			  $inputFileType = IOFactory::identify($inputFileName);
			  $objReader = IOFactory::createReader($inputFileType);
			  $objPHPExcel = $objReader->load($inputFileName);
		  } catch(Exception $e) {
			  die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		  }
			  $awal = 6;
			  $sheetCurrent =  $objPHPExcel->getSheet(33);
			  // $highestRow = $sheetCurrent->getHighestRow();
			  $highestRow = $awal+$siswa;
			  $highestColumn =$sheetCurrent->getHighestColumn();
		  for ($row = $awal; $row < $highestRow; $row++){                                  
			  $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
											  NULL,
											  TRUE,
                                              FALSE);
                $where = array(
                    "nama"       				=> $rowData[0][1],
                );
			   $data = array(
				  "tinggi_badan1"  			=> $rowData[0][2],
				  "tinggi_badan2"  			=> $rowData[0][3],
				  "berat_badan1"  			=> $rowData[0][4],
				  "berat_badan2"  			=> $rowData[0][5],
				  "pendengaran"  			=> $rowData[0][6],
				  "penglihatan"  			=> $rowData[0][7],
				  "gigi"  					=> $rowData[0][8],
				  "prestasi1_jenis"  		=> $rowData[0][9],
				  "prestasi1_keterangan"  	=> $rowData[0][10],
				  "prestasi2_jenis"  		=> $rowData[0][11],
				  "prestasi2_keterangan"  	=> $rowData[0][12],
				  "prestasi3_jenis"  		=> $rowData[0][13],
				  "prestasi3_keterangan"  	=> $rowData[0][14],
			  );
              $this->m_import->update_pribadi($data,$where);
			//   print("<pre>".print_r($data,true)."</pre>");
	  }
      }
      
    public function siswa_siswa($inputFileName,$data){
        $siswa = $data['siswa'] ;

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
            $awal = 6;
            $sheetCurrent =  $objPHPExcel->getSheet(32);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
              $where = array(
              );
            if($rowData[0][5]=='Laki-laki')
                $jk = 'L';
            else
                $jk = 'P';

                $ttl = explode("," , $rowData[0][4]);
             $data = array(
                "nis"    			=> $rowData[0][2],
                "nisn"  			=> $rowData[0][3],
                "nama"       	    => $rowData[0][1],
                "jk"            	=> $jk,
                "alamat"		    => $rowData[0][7],
                "idk"   			=> $data['idk'],
                "tlp"  		        => '',
                "bapak"          	=> $rowData[0][8],
                "k_bapak"  		    => $rowData[0][10],
                "ibu"  	            => $rowData[0][9],
                "k_ibu"  		    => $rowData[0][11],
                "tempat"  			=> $ttl[0],
                "tanggal"  			=> $ttl[1],
                // "tahun_ajaran"		=> $rowData[0][4],
                "pass"  	        => md5($rowData[0][2]),
                "waliname"          => $rowData[0][9],
                "walipass"        	=> md5($rowData[0][2].strtolower($rowData[0][9])),
            );
            $this->m_import->create_siswa($data);
            // print("<pre>".print_r($data,true)."</pre>");
    }
    }
	  
      public function siswa_thn_pelajaran($inputFileName,$data){
          $siswa      = $data['siswa'] ;
          $sekolah    = $data['sekolah'];
          $idk    = $data['idk'];
  
          try {
              $inputFileType = IOFactory::identify($inputFileName);
              $objReader = IOFactory::createReader($inputFileType);
              $objPHPExcel = $objReader->load($inputFileName);
          } catch(Exception $e) {
              die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
          }
              $awal = 19;
              $sheetCurrent =  $objPHPExcel->getSheet(1);
              // $highestRow = $sheetCurrent->getHighestRow();
              $highestColumn =$sheetCurrent->getHighestColumn();                                 
              $tahun = $sheetCurrent->rangeToArray('A' . 22 . ':' . $highestColumn . 22,NULL,TRUE,FALSE);
              $semester = $sheetCurrent->rangeToArray('A' . 21 . ':' . $highestColumn . 21,NULL,TRUE,FALSE);
  
              $where = array(
                  "idk"           => $idk,
              );
              if(substr($semester[0][13],0,1)=='1'){
                $thn = 'Gasal '.substr($tahun[0][13],0,4)."/".substr($tahun[0][13],7,4);
              }else{
                $thn = 'Genap '.substr($tahun[0][13],0,4)."/".substr($tahun[0][13],7,4);
              }
              $data = array(
				"tahun_ajaran" 	=> $thn,
				// "tahun_pelajaran" 	=> $tahun[0][13],
              );
            //   var_dump($data);
              $this->m_import->update_siswa($data,$where);
              // print("<pre>".print_r($data,true)."</pre>");
      }
	
	  public function siswa_ekstra($inputFileName,$data){
		  $siswa = $data['siswa'] ;
  
		  try {
			  $inputFileType = IOFactory::identify($inputFileName);
			  $objReader = IOFactory::createReader($inputFileType);
			  $objPHPExcel = $objReader->load($inputFileName);
		  } catch(Exception $e) {
			  die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		  }
			  $awal = 6;
			  $sheetCurrent =  $objPHPExcel->getSheet(13);
			  // $highestRow = $sheetCurrent->getHighestRow();
			  $highestRow = $awal+$siswa;
			  $highestColumn =$sheetCurrent->getHighestColumn();
		  for ($row = $awal; $row < $highestRow; $row++){                                  
			  $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
											  NULL,
											  TRUE,
                                              FALSE);
                $where = array(
                    "nama"       	=> $rowData[0][1],
                );
			   $data = array(
				  "exs1_nama"  		=> $rowData[0][2],
				  "exs1_nilai"  	=> $rowData[0][3],
				  "exs1_predikat"	=> $rowData[0][4],
				  "exs2_nama"  		=> $rowData[0][5],
				  "exs2_nilai"  	=> $rowData[0][6],
				  "exs2_predikat"	=> $rowData[0][7],
				  "exs3_nama"  		=> $rowData[0][8],
				  "exs3_nilai"  	=> $rowData[0][9],
				  "exs3_predikat"	=> $rowData[0][10],
				  "exs4_nama"  		=> $rowData[0][11],
				  "exs4_nilai"  	=> $rowData[0][12],
				  "exs4_predikat"	=> $rowData[0][13],
			  );
              $this->m_import->update_pribadi($data,$where);
			//   print("<pre>".print_r($data,true)."</pre>");
	  }
	  }
	
	  public function siswa_presensi($inputFileName,$data){
		  $siswa = $data['siswa'] ;
  
		  try {
			  $inputFileType = IOFactory::identify($inputFileName);
			  $objReader = IOFactory::createReader($inputFileType);
			  $objPHPExcel = $objReader->load($inputFileName);
		  } catch(Exception $e) {
			  die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		  }
			  $awal = 6;
			  $sheetCurrent =  $objPHPExcel->getSheet(12);
			  // $highestRow = $sheetCurrent->getHighestRow();
			  $highestRow = $awal+$siswa;
			  $highestColumn =$sheetCurrent->getHighestColumn();
		  for ($row = $awal; $row < $highestRow; $row++){                                  
			  $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
											  NULL,
											  TRUE,
                                              FALSE);
                $where = array(
                    "nama"       	=> $rowData[0][1],
                );
			   $data = array(
				  "sakit"  		=> $rowData[0][2],
				  "ijin"      	=> $rowData[0][3],
				  "alpa"    	=> $rowData[0][4],
			  );
              $this->m_import->update_pribadi($data,$where);
			//   print("<pre>".print_r($data,true)."</pre>");
	  }
	  }	  
	  
	public function pengetahuan_kkm($inputFileName,$data){
        $siswa      = $data['siswa'] ;
        $sekolah    = $data['sekolah'];

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 19;
            $sheetCurrent =  $objPHPExcel->getSheet(28);
            // $highestRow = $sheetCurrent->getHighestRow();
			$highestColumn =$sheetCurrent->getHighestColumn();                                 
            $tahun = $sheetCurrent->rangeToArray('A' . 6 . ':' . $highestColumn . 6,NULL,TRUE,FALSE);
            $kkm = $sheetCurrent->rangeToArray('A' . 19 . ':' . $highestColumn . 19,NULL,TRUE,FALSE);

            $where = array(
                "sekolah"           => $sekolah,
            );

            $data = array(
				"tahun_pelajaran" 	=> substr($tahun[0][1],2),
				"kkm"  				=> $kkm[0][3],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
	}

	public function pengetahuan_pai($inputFileName,$data){
		$siswa = $data['siswa'] ;
		$sekolah = $data['sekolah'] ;
		$kelas = $data['kelas'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 6;
            $sheetCurrent =  $objPHPExcel->getSheet(3);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
             $data = array(
                "nama"       		=> $rowData[0][1],
                "pai_nilai"      	=> round($rowData[0][2]),
                "pai_predikat"   	=> $rowData[0][3],
                "pai_deskripsi"  	=> $rowData[0][4],
                "sekolah"  	        => $sekolah,
                "kelas"  	        => $kelas,
			);
			$this->m_import->create_pengetahuan($data);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}
      
    public function pengetahuan_nis($inputFileName,$data){
      $siswa = $data['siswa'] ;

      try {
          $inputFileType = IOFactory::identify($inputFileName);
          $objReader = IOFactory::createReader($inputFileType);
          $objPHPExcel = $objReader->load($inputFileName);
      } catch(Exception $e) {
          die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
      }
          $awal = 6;
          $sheetCurrent =  $objPHPExcel->getSheet(32);
          // $highestRow = $sheetCurrent->getHighestRow();
          $highestRow = $awal+$siswa;
          $highestColumn =$sheetCurrent->getHighestColumn();
      for ($row = $awal; $row < $highestRow; $row++){                                  
          $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                          NULL,
                                          TRUE,
                                          FALSE);
          $where = array(
              "nama"       				=> $rowData[0][1],
          );
           $data = array(
              "nis"  			=> $rowData[0][2],
              "alamat"  			=> $rowData[0][7],
          );
          $this->m_import->update_pengetahuan($data,$where);
          // print("<pre>".print_r($data,true)."</pre>");
  }
  }

	public function pengetahuan_mat($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(4);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       			=> $rowData[0][1],
            );
             $data = array(
                "matematika_nilai"      => round($rowData[0][123]),
                "matematika_predikat"   => $rowData[0][124],
                "matematika_deskripsi"  => $rowData[0][125],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_ind($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(5);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       				=> $rowData[0][1],
            );
             $data = array(
                "bhs_indonesia_nilai"      	=> round($rowData[0][123]),
                "bhs_indonesia_predikat"    => $rowData[0][124],
                "bhs_indonesia_deskripsi"   => $rowData[0][125],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_ipa($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(6);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       		=> $rowData[0][1],
            );
             $data = array(
                "ipa_nilai"      	=> round($rowData[0][123]),
                "ipa_predikat"      => $rowData[0][124],
                "ipa_deskripsi"     => $rowData[0][125],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_ips($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(7);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       		=> $rowData[0][1],
            );
             $data = array(
                "ips_nilai"      	=> round($rowData[0][123]),
                "ips_predikat"      => $rowData[0][124],
                "ips_deskripsi"     => $rowData[0][125],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_olg($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 6;
            $sheetCurrent =  $objPHPExcel->getSheet(8);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       			=> $rowData[0][1],
            );
             $data = array(
                "olahraga_nilai"      	=> round($rowData[0][2]),
                "olahraga_predikat"     => $rowData[0][3],
                "olahraga_deskripsi"    => $rowData[0][4],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_pkn($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(9);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       		=> $rowData[0][1],
            );
             $data = array(
                "pkn_nilai"      	=> round($rowData[0][123]),
                "pkn_predikat"      => $rowData[0][124],
                "pkn_deskripsi"     => $rowData[0][125],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_sdbp($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(10);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       		=> $rowData[0][1],
            );
             $data = array(
                "sdbp_nilai"      	=> round($rowData[0][101]),
                "sdbp_predikat"     => $rowData[0][102],
                "sdbp_deskripsi"    => $rowData[0][103],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function pengetahuan_bjw($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(11);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       			=> $rowData[0][1],
            );
             $data = array(
                "bhs_jawa_nilai"      	=> round($rowData[0][101]),
                "bhs_jawa_predikat"     => $rowData[0][102],
                "bhs_jawa_deskripsi"    => $rowData[0][103],
            );
            $this->m_import->update_pengetahuan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_pai($inputFileName,$data){
		$siswa   = $data['siswa'] ;
		$kelas   = $data['kelas'] ;
		$sekolah = $data['sekolah'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(18);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
             $data = array(
                "nama"                          => $rowData[0][1],
                "pai_keterampilan_nilai"        => round($rowData[0][2]),
                "pai_keterampilan_predikat"     => $rowData[0][3],
                "pai_keterampilan_deskripsi"    => $rowData[0][4],
                "kelas"                         => $kelas,
                "sekolah"                       => $sekolah,
            );
            $this->m_import->create_keterampilan($data);
            // print("<pre>".print_r($data,true)."</pre>");
    }
    }  
      
	  public function keterampilan_nis($inputFileName,$data){
        $siswa = $data['siswa'] ;

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
            $awal = 6;
            $sheetCurrent =  $objPHPExcel->getSheet(32);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"      => $rowData[0][1],
            );
             $data = array(
                "nis"       => $rowData[0][2],
                "alamat"  	=> $rowData[0][7],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
    }
	  
	public function keterampilan_kkm($inputFileName,$data){
        $siswa      = $data['siswa'] ;
        $sekolah    = $data['sekolah'];

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 19;
            $sheetCurrent =  $objPHPExcel->getSheet(28);
            // $highestRow = $sheetCurrent->getHighestRow();
			$highestColumn =$sheetCurrent->getHighestColumn();                                 
            $tahun = $sheetCurrent->rangeToArray('A' . 6 . ':' . $highestColumn . 6,NULL,TRUE,FALSE);
            $kkm = $sheetCurrent->rangeToArray('A' . 19 . ':' . $highestColumn . 19,NULL,TRUE,FALSE);

            $where = array(
                "sekolah"           => $sekolah,
            );

            $data = array(
				"tahun_pelajaran" 	=> substr($tahun[0][1],2),
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
	}

	public function keterampilan_mat($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(20);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "matematika_keterampilan_nilai"      	=> round($rowData[0][132]),
                "matematika_keterampilan_predikat"      => $rowData[0][133],
                "matematika_keterampilan_deskripsi"     => $rowData[0][134],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_ind($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(21);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "bhs_indonesia_keterampilan_nilai"      	=> round($rowData[0][132]),
                "bhs_indonesia_keterampilan_predikat"      => $rowData[0][133],
                "bhs_indonesia_keterampilan_deskripsi"     => $rowData[0][134],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_ipa($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(22);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "ipa_keterampilan_nilai"      	=> $rowData[0][132],
                "ipa_keterampilan_predikat"      => $rowData[0][133],
                "ipa_keterampilan_deskripsi"     => $rowData[0][134],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_ips($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(23);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "ips_keterampilan_nilai"      	=> round($rowData[0][132]),
                "ips_keterampilan_predikat"      => $rowData[0][133],
                "ips_keterampilan_deskripsi"     => $rowData[0][134],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_olg($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(24);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "olahraga_keterampilan_nilai"      	=> round($rowData[0][2]),
                "olahraga_keterampilan_predikat"      => $rowData[0][3],
                "olahraga_keterampilan_deskripsi"     => $rowData[0][4],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_pkn($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(19);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "pkn_keterampilan_nilai"      	=> round($rowData[0][93]),
                "pkn_keterampilan_predikat"      => $rowData[0][94],
                "pkn_keterampilan_deskripsi"     => $rowData[0][95],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_sdbp($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(26);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "sdbp_keterampilan_nilai"      	=> round($rowData[0][145]),
                "sdbp_keterampilan_predikat"      => $rowData[0][146],
                "sdbp_keterampilan_deskripsi"     => $rowData[0][147],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}

	public function keterampilan_bjw($inputFileName,$data){
		$siswa = $data['siswa'] ;

		try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }
			$awal = 8;
            $sheetCurrent =  $objPHPExcel->getSheet(25);
            // $highestRow = $sheetCurrent->getHighestRow();
            $highestRow = $awal+$siswa;
            $highestColumn =$sheetCurrent->getHighestColumn();
        for ($row = $awal; $row < $highestRow; $row++){                                  
            $rowData = $sheetCurrent->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);
            $where = array(
                "nama"       	=> $rowData[0][1],
            );
             $data = array(
                "bhs_jawa_keterampilan_nilai"      	=> round($rowData[0][93]),
                "bhs_jawa_keterampilan_predikat"      => $rowData[0][94],
                "bhs_jawa_keterampilan_deskripsi"     => $rowData[0][95],
            );
            $this->m_import->update_keterampilan($data,$where);
            // print("<pre>".print_r($data,true)."</pre>");
    }
	}
}
