<?php 
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'modul_05';      // имя базы данных
	$link = mysqli_connect($host, $user, $pass, $name);
	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$familya = $_POST['Familya'];
		$name = $_POST['Name'];

		$query = "INSERT INTO users SET login='$login', password='$password', email='$email', familya='$familya', name='$name', telefon='$phone'";
		mysqli_query($link, $query);
		session_start();
			$_SESSION['auth'] = $login;
		header("Location: index.php"); 
	}
?>