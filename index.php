<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Image To Base64</title>
  </head>
  <body>
    <form action="index.php" method="post" enctype="multipart/form-data">
      Pilih Gambar :
      <input type="file" name="fileupload">
      <input type="submit" name="kirim" value="Encode">
    </form>
    <textarea name="hasil" rows="12" cols="40"></textarea>
  </body>
</html>

<?php
if (isset($_POST['kirim'])) {
  $gambar = $_FILES['fileupload'];
  // var_dump($gambar);
  $type = pathinfo($gambar['tmp_name'], PATHINFO_EXTENSION);
  $data = file_get_contents($gambar['tmp_name']);
  $hasil = 'data:image/' . $type . ';base64,' . base64_encode($data);
  echo $hasil;
}
?>
