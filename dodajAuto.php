<?php
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $nr_vin=$_POST['nr_vin'];
    $nr_rej=$_POST['nr_rej'];
    $rok_prod=(int)$_POST['rok_prod'];
    $pojemnosc=(float)$_POST['pojemnosc'];

    $polaczenie=@mysqli_connect("localhost","root","","ubezpieczenie") or die("nie polączono");
    $polecenie="INSERT INTO auto VALUES (null,'$marka','$model','$nr_vin','$nr_rej','$rok_prod','$pojemnosc');";
    @mysqli_query($polaczenie,$polecenie) or die("brak zapytania");
    @mysqli_close($polaczenie);
    header("Location: 2.php");
?>