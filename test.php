<?php

$login = $_POST['login'];

$db = new mysqli('localhost', 'root', '', 'oct_2002');

$sql = "select * from users where login like '$login';";

var_dump($sql);
exit();

$db->query($sql);