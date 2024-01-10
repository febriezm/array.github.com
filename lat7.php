<?php
$angka = [11,46,7,8,94,63,12,77];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pengulangan Foreach (2)</title>
        <style>
            div{
                color: white;
                width: 50px;
                height: 50px;
                background-color: burlywood;
                text-align: center;
                line-height: 50px;
                margin: 10px;
                float: right;
            }
        </style>
</head>
<body>

<?php foreach ( $angka as $key ) : ?>
    <div><?= $key; ?></div>
<?php endforeach ?>
    
</body>
</html>