<?php
session_start();
if($_SESSION["rule"] == 2) {
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b7cf324568026c","90ce335c", "heroku_666d3fc091d73be") or die ("���������� ������������ � �������");
 $zapros="DELETE FROM app WHERE id=" . $_GET['id'];
 mysqli_query($conn, $zapros);
}
 header("Location: index.php");
 exit;
?>