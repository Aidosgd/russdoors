<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
{
     exit ("�� ����� �� ��� ����������, �������� ����� � ��������� ��� ����!");
}
//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//������� ������ �������
$login = trim($login);
$password = trim($password);

// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

// �������� �� ������������� ������������ � ����� �� �������
$result = mysqli_query($link, "SELECT id FROM new_users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
     exit ("��������, �������� ���� ����� ��� ���������������. ������� ������ �����.");
}

// ���� ������ ���, �� ��������� ������
$result2 = mysqli_query ($link, "INSERT INTO new_users (login,password) VALUES('$login','$password')");
// ���������, ���� �� ������
if ($result2=='TRUE')
{
     echo "�� ������� ����������������! ������ �� ������ ����� �� ����. <a href='index.php'>������� ��������</a>";
}

else {
     echo "������! �� �� ����������������.";
}
?>