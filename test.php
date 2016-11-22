<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 11/18/2016
 * Time: 8:19 AM
 */
?>
<html>
<body>
<form action="test.php" method="post" enctype="multipart/form-data">
    Enter number:
    <input type="text" name="num">
    <input type="submit" name="btn" value="click">
    <?php
if (isset($_POST[btn])){
    $n=$_POST[num];
    $sum=0;
    for ($i=1;$i<=num;$i++){
        $sum=$sum+($i*$i);
        echo $sum;
    }
}
    ?>
</form>
</body>
</html>
