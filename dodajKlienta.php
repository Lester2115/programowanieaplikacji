<?php
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $pesel=$_POST['pesel'];
    $adres=$_POST['adres'];
    $miasto=$_POST['miasto'];

    $polaczenie=@mysqli_connect("localhost","root","","ubezpieczenie") or die("nie polączono");
    $polecenie="INSERT INTO klient VALUES (null,'$imie','$nazwisko','$pesel','$adres','$miasto');";
    @mysqli_query($polaczenie,$polecenie) or die("brak zapytania");
    @mysqli_close($polaczenie);
    header("Location: 3.php");
?>