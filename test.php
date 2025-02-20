<?php

$login = $_POST['login'];

$db = new mysqli('localhost', 'root', '', 'oct_2002');

$sql = "SELECT * FROM users WHERE login LIKE '$login';";

var_dump($sql);
exit();

$db->query($sql);