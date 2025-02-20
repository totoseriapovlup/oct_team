<?php

$login = $_POST['login'];

$db = new mysqli('localhost', 'root', '', 'oct_2002');

$sql = "select * from users where login like '$login';";

$db->query($sql);
