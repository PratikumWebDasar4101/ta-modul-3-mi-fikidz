<?php
    require("koneksi.php");
?>
<!DOCTYPE html>
<html>
    <font size="50"><center>Data Mahasiswa</center></font>
    <table border="1" align="center" width="70%">
        <tr bgcolor="lightblue" align="center">
            <td width="15%">Nama</td> 
            <td width="8%">NIM</td>
            <td width="5%">Fakultas</td>
            <td width="12%">Jenis Kelamin</td>
            <td>Gambar</td>
        </tr>
        <?php
            $query = $pdo -> prepare("SELECT * FROM mahasiswa");
            $query -> execute();
            while ($data = $query -> fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr bgcolor="lightgreen">
            <td align="center"><?php echo $data['nama'];?></td>
            <td align="center"><?php echo $data['nim'];?></td>
            <td align="center"><?php echo $data['fakultas'];?></td>
            <td align="center"><?php echo $data['jenisKelamin'];?></td>
            <td align="center"><img src="<?php echo $data['gambar'];?>" width="100px"></td>
        </tr>
        <?php
            }
        ?>
    </table>
</html>