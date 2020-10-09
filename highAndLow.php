<?php 
$cards = array("JK.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$leftCard = mt_rand(0,13);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighAndLow</title>
</head>
<body>
    <h1 style="text-align:center">High&Lowゲーム</h1>
    <hr>
    <p style="text-align:center"><?php echo '<img src="../cards/',$cards[$leftCard],'">';?>&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="../cards/bg.png"></p>
    <form action="highAndLowS07.php" method="post">
    <p style="text-align:center">
    <input type="radio" name= "select" value="High">High
    <input type="radio" name= "select" value="Low">Low
    <?php
    echo '<input type="hidden" name="leftCard" value="',$leftCard,'">';
    ?>
    </p>
    <p style="text-align:center"><input type="submit" value="決定"></p>
    </form>
    
</body>
</html>
