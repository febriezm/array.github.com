<?php
$angka = [11,46,7,8,94,63,12,77];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pengulangan Foreach</title>
        <style>
            div{
                color: black;
                width: 50px;
                height: 50px;
                background-color: burlywood;
                text-align: center;
                line-height: 50px;
                margin: 10px;
                float: left;
            }
        </style>
</head>
<body>

<?php foreach ( $angka as $key ) { ?>
    <div><?php echo $key; ?></div>
<?php } ?>
    
</body>
</html>