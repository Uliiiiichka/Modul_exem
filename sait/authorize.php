<?php 
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'modul_05';      // имя базы данных
	$link = mysqli_connect($host, $user, $pass, $name);
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
		$res = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($res);
		
		if (!empty($user)) {
			echo '<script>alert("Успешно авторизировались")</script>';
			session_start();
			$_SESSION['auth'] = $login;
			var_dump($_SESSION['auth']);
			header("Location: index.php"); 
		} else {
			echo '<script>alert("Пользователь не найден")</script>';
			header("Location: index.php"); 
		}
	}
?>