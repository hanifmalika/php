<?php 
    print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="" method="post">
    <input type="text" name="nama" placeholder="Nama User">
    <input type="text" name="alamat" placeholder="Alamat User">
    <select name="Jurusan" id="">
        <option value="Informatika">informatika</option>
        <option value="Manajemen">Manajeman</option>
        <option value="desain">Desain Grafis</option>
    </select>
    <input type="submit" value="submit" id="">
    </form>
</body>
</html>