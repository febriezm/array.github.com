<?php
$mahasiswa = ["Rafli Munawar","0854512345615","Psikologi","raflimunawar@gmail.com"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Daftar Mahasiswa</title>

</head>
<body>
<h1>Daftar Mahasiswa</h1>    

<ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>