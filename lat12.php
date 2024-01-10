<!DOCTYPE html>
<html>
<head>
    <title>Kasus Array Dalam Array</title>
        <style>
            .kotak{
                color: white;
                width: 50px; height: 50px;
                background-color: gray;
                text-align: center;
                line-height: 50px; margin: 3px;
                float: left;
                transition: 1s;
            }
            .kotak:hover{
                transform:rotate(360dg);
                border-radius: 50%;
            }
        </style>
</head>
<body>

<?php
$angka = [
[1,2,3],
[4,5,6],
[7,8,9]
];
?>

<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
    <div class="kotak"><?php echo $b; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>
    
</body>
</html>