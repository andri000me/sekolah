            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Upload Nilai Siswa</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas Dan Upload Nilai Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                        
<!-- <br></br>
<form method="post" enctype="multipart/form-data" action="media.php?module=upload">
Pilih File Excel*:<input name="fileexcel" type="file"> <br> 
<input name="upload" type="submit" value="Import"></br>ss
</form> -->


            <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi --> 
                 <form method="post" action="" enctype="multipart/form-data">       
                    <a href="Format.xlsx" class="btn btn-default">          
                        <span class="glyphicon glyphicon-download"></span>Download File Raport</a><br><br>
                        <!-- -- Buat sebuah input type file-- class pull-left berfungsi agar file input berada di sebelah kiri -->
                        <input type="file" name="file" class="pull-left">                
                        <button type="submit" name="preview" class="btn btn-success btn-sm">         
                         <span class="glyphicon glyphicon-eye-open"></span> Preview </button>      
                     </form>            
                     <hr>            
                     <!-- Buat Preview Data -->      
                     <?php      
                     // Jika user telah mengklik tombol Preview      
                     if(isset($_POST['preview'])){        
                        $nama_file_baru = 'data.xlsx';                
                        // Cek apakah terdapat file data.xlsx pada folder tmp        
                        if(is_file('tmp/'.$nama_file_baru)) 
                        // Jika file tersebut ada          
                            unlink('tmp/'.$nama_file_baru); // Hapus file tersebut                
                        $ext = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION); // Ambil ekstensi filenya apa        
                        $tmp_file = $_FILES['file']['tmp_name'];        // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)        
                        if($ext == "xlsx"){          
                        // Upload file yang dipilih ke folder tmp          
                            move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);                    
                            // Load librari PHPExcel nya          
                            require_once 'PHPExcel/PHPExcel.php';                    
                            $excelreader = new PHPExcel_Reader_Excel2007();         
                             $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); 
                             // Load file yang tadi diupload ke folder tmp          
                            $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);                    
                            // Buat sebuah tag form untuk proses import data ke database          
                            echo "<form method='post' action='media.php?module=import'>";                    
                            // Buat sebuah div untuk alert validasi kosong          
                            //echo "<div class='alert alert-danger' id='kosong'>Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.</div>";                    
                            echo "<table class='table table-bordered'><tr>            
                            <th colspan='5' class='text-center'>Preview Data</th>          
                            </tr>          
                            <tr>
                            <th>NO </th>            
                            <th>NIS</th>            
                            <th>Nama Siswa</th>
                                                       
                            </tr>";                    
                            $numrow = 5;
                            // $numcolum =3;          
                            $kosong = 0;
                            // print_r($sheet);          
                            foreach($sheet as $row ){ 
                            // Lakukan perulangan dari data yang ada di excel            
                            // Ambil data pada excel sesuai Kolom

                                $no = $row['A'];
                                $nis = $row['C']; // Ambil data NIS            
                                $nama = $row['B']; // Ambil data nama            
                                $kelas = $row['D']; // Ambil data jenis kelamin   
                                $alamat= $row['E']; // Ambil data telepon         
                                $kkm = $row['F']; // Ambil data alamat
                                $pai_nilai = $row['G'];
                                $pai_predikat = $row['H'];
                                $pai_deskripsi = $row['I'];                                 
                                $matematika_nilai = $row['J'];
                                $matematika_predikat = $row['K'];
                                $matematika_deskripsi = $row['L'];                        
                                $bhs_indonesia_nilai = $row['M'];
                                $bhs_indonesia_predikat = $row['N'];
                                $bhs_indonesia_deskripsi = $row['O'];
                                $ipa_nilai = $row['P'];
                                $ipa_predikat = $row['Q'];
                                $ipa_deskripsi = $row['R'];                        
                                $ips_nilai = $row['S'];
                                $ips_predikat = $row['T'];
                                $ips_deskripsi = $row['U'];                        
                                $olahraga_nilai = $row['V'];
                                $olahraga_predikat = $row['W'];
                                $olahraga_deskripsi = $row['X'];                        
                                $pkn_nilai = $row['Y'];
                                $pkn_predikat = $row['Z'];
                                $pkn_deskripsi = $row['AA'];                             
                                $bhs_jawa_nilai = $row['AB'];
                                $bhs_jawa_predikat = $row['AC'];
                                $bhs_jawa_deskripsi = $row['AD'];                        
                                $sdbp_nilai = $row['AE'];
                                $sdbp_predikat = $row['AF'];
                                $sdbp_deskripsi =$row['AG'];
                                $pai_keterampilan_nilai = $row['AH'];
                                $pai_keterampilan_predikat = $row['AI'];
                                $pai_keterampilan_deskripsi = $row['AJ']; 
                                $matematika_keterampilan_nilai = $row['AK'];
                                $matematika_keterampilan_predikat = $row['AL'];
                                $matematika_keterampilan_deskripsi = $row['AM'];                        
                                $bhs_indonesia_keterampilan_nilai = $row['AN'];
                                $bhs_indonesia_keterampilan_predikat = $row['AO'];
                                $bhs_indonesia_keterampilan_deskripsi = $row['AP'];
                                $ipa_keterampilan_nilai = $row['AQ'];
                                $ipa_keterampilan_predikat = $row['AR'];
                                $ipa_keterampilan_deskripsi = $row['AS'];                        
                                $ips_keterampilan_nilai = $row['AT'];
                                $ips_keterampilan_predikat = $row['AU'];
                                $ips_keterampilan_deskripsi = $row['AV'];                        
                                $olahraga_keterampilan_nilai = $row['AW'];
                                $olahraga_keterampilan_predikat = $row['AX'];
                                $olahraga_keterampilan_deskripsi = $row['AY'];           
                                $pkn_keterampilan_nilai = $row['AZ'];
                                $pkn_keterampilan_predikat = $row['BA'];
                                $pkn_keterampilan_deskripsi = $row['BB'];
                                $bhs_jawa_keterampilan_nilai = $row['BC'];
                                $bhs_jawa_keterampilan_predikat = $row['BD'];
                                $bhs_jawa_keterampilan_deskripsi = $row['BE'];                        
                                $sdbp_keterampilan_nilai = $row['BF'];
                                $sdbp_keterampilan_predikat = $row['BG'];
                                $sdbp_keterampilan_deskrepsi =$row['BH'];
                                $sikap_spiritual = $row['BI'];
                                $sikap_sosial = $row['BJ'];
                                $exs1_nama = $row ['BK'];
                                $exs1_nilai = $row ['BL'];
                                $exs1_predikat = $row ['BM'];
                                $exs2_nama = $row ['BN'];
                                $exs2_nilai = $row ['BO'];
                                $exs2_predikat = $row ['BP'];
                                $exs3_nilai = $row ['BQ'];
                                $exs3_nama = $row ['BR'];
                                $exs3_predikat = $row ['BS'];
                                $exs4_nama = $row ['BT'];
                                $exs4_nilai = $row ['BU'];
                                $exs4_predikat = $row ['BV'];
                                $tinggi_badan1 = $row ['BW'];
                                $tinggi_badan2 = $row ['BX'];
                                $berat_badan1 = $row ['BY'];
                                $berat_badan2 = $row ['BZ'];
                                $pendengaran = $row ['CA'];
                                $penglihatan = $row ['CB'];
                                $gigi = $row ['CC'];
                                $prestasi1_jenis = $row ['CD'];
                                $prestasi1_keterangan = $row ['CE'];
                                $prestasi2_jenis = $row ['CF'];
                                $prestasi2_keterangan = $row ['CG'];
                                $prestasi3_jenis = $row ['CH'];
                                $prestasi3_keterangan = $row ['CI'];
                                $sakit = $row ['CJ'];
                                $izin = $row ['CK'];
                                $alpa = $row ['CL'];
                                $saran = $row ['CM'];

             
                                if( empty($no) && empty($nis) && empty($nama) )continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)                       
                                 //Cek $numrow apakah lebih dari 1            
                                 // Artinya karena baris pertama adalah nama-nama kolom            
                                 // Jadi dilewat saja, tidak usah diimport            
                                if($numrow > 5){              
                                // Validasi apakah semua data telah diisi              
                                    $no_td = ( ! empty($no))? "" : " style='background: #E07171;'";
                                    $nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah              
                                    $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah              
                                    //$alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // 
                                    //$kelas_td = ( ! empty($kelas))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah              
                                    // $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah              
                                    // $kkm_td = ( ! empty($kkm))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong 
                                    // $pai_td = ( ! empty($pai))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $matematika_td = ( ! empty($matematika))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $bhs_indonesia_td = ( ! empty($bhs_indonesia))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $ipa_td = ( ! empty($ipa))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $ips_td = ( ! empty($ips))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $olahraga_td = ( ! empty($olahraga))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $pkn_td = ( ! empty($pkn))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              
                                    // $bhs_jawa_td = ( ! empty($bhs_jawa))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong 
                                    // $sdbp_td = ( ! empty($sdbp))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah                            // Jika salah satu data ada yang kosong              


                                    if(empty($no) or empty($nis) or empty($nama) or empty($nama) ){
                                        $kosong++; 
                                    // Tambah 1 variabel $kosong              
                                    }                            
                                    echo "<tr>";
                                    echo "<td".$no_td." >".$no."</td>";              
                                    echo "<td".$nis_td.">".$nis."</td>";              
                                    echo "<td".$nama_td.">".$nama."</td>";              
                                    // echo "<td".$kelas_td.">".$kelas."</td>";              
                                    // echo "<td".$alamat_td.">".$alamat."</td>";              
                                    // echo "<td".$kkm_td.">".$kkm."</td>";
                                    // echo "<td".$pai_td.">".$pai."</td>";
                                    // echo "<td".$matematika_td.">".$matematika."</td>";
                                    // echo "<td".$bhs_indonesia_td.">".$bhs_indonesia."</td>";
                                    // echo "<td".$ipa_td.">".$ips."</td>";
                                    // echo "<td".$olahraga_td.">".$olahraga."</td>";
                                    // echo "<td".$pkn_td.">".$pkn."</td>";
                                    // echo "<td".$bhs_jawa_td.">".$bhs_jawa."</td>";
                                    // echo "<td".$sdbp_td.">".$sdbp."</td>";
                                    // //echo "<td".$pai_td.">".$pai."</td>";
                                    //echo "<td".$pai_td.">".$pai."</td>";
                                    
                                    echo "</tr>";            }                        
                                    $numrow++; // Tambah 1 setiap kali looping          
                            }        echo "</table>";                    
                            // Cek apakah variabel kosong lebih dari 0         
                            // Jika lebih dari 0, berarti ada data yang masih kosong          
                            if($kosong > 0){          
                            ?>              
                            <script>            
                            $(document).ready(function(){              
                            // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong              
                                $("#jumlah_kosong").html('<?php echo $kosong; ?>');                            
                                $("#kosong").show(); // Munculkan alert validasi kosong            
                            });            
                            </script>          
                            <?php          
                            }else{ 
                            // Jika semua data sudah diisi            
                                echo "<hr>";// Buat sebuah tombol untuk mengimport data ke database            
                                echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";          
                                }                    
                                echo "</form>";        
                                }
                                else{ 
                                // Jika file yang diupload bukan File Excel 2007 (.xlsx)          
                                // Munculkan pesan validasi          
                                    echo "<div class='alert alert-danger'>Hanya File Excel 2007 (.xlsx) yang diperbolehkan          </div>";        
                                }      
                            }      
                            ?>    
                        </div>
<!--<form method="post" enctype="multipart/form-data" action="upload.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" class="form-control" id="exampleInputFile">
    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

-->
</div>


<br></br>


                                    <tbody>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->