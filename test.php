<?php

$login = $_POST['login'];

$db = new mysqli('localhost', 'root', '', 'oct_2002');

$sql = "SELECT * FROM users WHERE login LIKE '$login';";

$db->query($sql);
