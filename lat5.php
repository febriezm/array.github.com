<?php
$angka = [23,56,8,90,34,1,43,987];
?>
<!DOCTYPE html>
<html> 
<head>
<title>Latihan Pengulangan</title>
<style>
div{
    color: white;
    width: 50px;
    height: 50px;
    background-color: brown;
    text-align: center;
    line-height: 50px;
    margin: 5px;
    float: right;
}
</style>
</head>
<body>
    <?php
    for ($i=0; $i< count($angka);  $i++) {?>
    <div><?php echo $angka[$i]; ?></div>
<?php } ?>
</body>
</html>