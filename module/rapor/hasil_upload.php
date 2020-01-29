<?php

//include "config.php";
$query = mysqli_query($koneksi,"SELECT * FROM rapor_langsung ");
?>
<br><br>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nis"];?></td>
            <td><?php echo $data["kelas"];?></td>
            <td>
                <a href="module/rapor/delete.php?idrapor=<?php echo $data['id_raporlangsung'];?> ">Delete</a> |
                <a href="./././cetak.php?module=cetak_rapor2&idrapor=<?php echo $data['id_raporlangsung'];?>">
                                        <button type="button" class="btn btn-primary">Cetak Rapor
                                        </button> 
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>