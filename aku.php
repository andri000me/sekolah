<?php
 
   include"config/koneksi.php";

   $result=mysqli_query($koneksi,"SELECT * FROM kota WHERE id_prov='".$_POST["prov"]."'");
    while($data_prov=mysqli_fetch_array($result)){
   
   
    ?>
        <option value="<?php echo $data_prov["nm_kota"] ?>"><?php echo $data_prov["nm_kota"] ?></option><br>
   
    <?php
    }
    ?>