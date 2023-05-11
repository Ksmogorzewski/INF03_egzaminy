<?php 
    $sql = mysqli_connect('localhost','root' ,'','wedkowanie');

    if($sql === false){
        die("ERROR: could not connect"
            . mysqli_connect_error());
    }

    $imie = $_REQUEST['fimie'];
    $nazwisko = $_REQUEST['fnazwisko'];
    $adres = $_REQUEST['fadres'];

    $wprowadz = "INSERT INTO Karty_wedkarskie VALUES ('$imie', '$nazwisko', '$adres', 'NULL', 'NULL')";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        mysqli_query($sql, $wprowadz);
    }
    mysqli_close($sql);
?>