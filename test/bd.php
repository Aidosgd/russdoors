<?php
//$db = mysqli_connect ("localhost","v_6960_russ","russd");
//mysqli_select_db ("v_6960_russ",$db);

$link = mysqli_connect("localhost", "v_6960_russ", "russd", "v_6960_russ");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}