<?php
//$db = mysqli_connect ("localhost","v_6960_russ","russd");
//mysqli_select_db ("v_6960_russ",$db);

$link = mysqli_connect("localhost", "v_6960_russ", "russd", "v_6960_russ");

/* �������� ���������� */
if (mysqli_connect_errno()) {
    printf("�� ������� ������������: %s\n", mysqli_connect_error());
    exit();
}