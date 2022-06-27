<?php

/* Polaczenie sie z baza danych */
$conn =mysqli_connect("localhost","root","","blog");

/* sprawdzenie polaczenia*/
if(mysqli_connect_error()) {
    echo "Nieudane połączenie";
    printf("Error : %s",mysqli_connect_error());
}

?>
