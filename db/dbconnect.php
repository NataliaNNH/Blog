<?php

/* Polaczenie sie z baza danych */
$conn =mysqli_connect("b67d3db54acc4f","78247360","","blog");

/* sprawdzenie polaczenia*/
if(mysqli_connect_error()) {
    echo "Nieudane połączenie";
    printf("Error : %s",mysqli_connect_error());
}

?>
