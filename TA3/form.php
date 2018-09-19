<?php
    require("koneksi.php");
?>
<!DOCTYPE html>
<html>
  <form method="post" enctype="multipart/form-data">
    Nama : <input type="text" name="nama"><br>
    NIM : <input type="text" name="nim"><br>
    Fakultas :  <select name="fakultas">
                  <option value="FIT">FIT</option>
                  <option value="FIK">FIK</option>
                  <option value="FRI">FRI</option>
                  <option value="FTE">FTE</option>
                  <option value="FKB">FKB</option>
                  <option value="FEB">FEB</option>
                </select><br>
    Jenis Kelamin : 
    <input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki
    <input type="radio" name="jenisKelamin" value="Perempuan">Perempuan <br>
    Gambar : <input name="gambar" type="file">
    <input type="submit" name="submit" value="Kirim">
  </form>
</html>
<?php
if(isset($_POST['nama'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $fakultas = $_POST['fakultas'];
  $jenisKelamin = $_POST['jenisKelamin'];
  $file = $_FILES['gambar']['name'];
  $tmpGambar = $_FILES['gambar']['tmp_name'];
  $dir = "gambar/";
  $folder = $dir.$file;
  $uploadGambar = move_uploaded_file($tmpGambar, $folder);
  if(!$uploadGambar)
    die("Upload Gagal!");
  
    $query = $pdo -> prepare("INSERT INTO mahasiswa VALUES('$nama','$nim','$fakultas','$jenisKelamin','$folder') "); 
    $query -> execute();
    if ($query) {
      header("Location: data.php");
    }
    else {
      die("Gagal!");
    }
}
?>