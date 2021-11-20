<?php
	echo '<h1>Заголовок Host з поточного запиту: ' . $_SERVER['HTTP_HOST'] . '</h1>';
	echo '<h1>Операційна система: ' . $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] . '</h1>';
	echo '<h1>Коренева директорія операційної системи: ' . $_SERVER['WINDIR'] . '</h1>';
	echo '<h1>Браузери, які підтримує ця сторінка: ' . $_SERVER['HTTP_USER_AGENT'] . '</h1>';
	echo "<h1>Версія сервера, ім'я віртуального хоста і порт: " . $_SERVER['SERVER_SIGNATURE'] . "</h1>";
	echo "<h1>Ім'я серверу: " . $_SERVER['SERVER_NAME'] . "</h1>";
	echo '<h1>IP-адреса серверу: ' . $_SERVER['SERVER_ADDR'] . '</h1>';
	echo '<h1>Port, за яким працює сервер: ' . $_SERVER['SERVER_PORT'] . '</h1>';
	echo '<h1>Абсолютний шлях до скрипту: ' . $_SERVER['SCRIPT_FILENAME'] . '</h1>';
	echo "<h1>Порт на дистанційній машині, який використовується для зв'язку з сервером: " . $_SERVER['REMOTE_PORT'] . "</h1>";
	echo '<hr>';
?>
<a href="/lab4/page2.php">
	<button style="font-size:24px;" >Перехід на 2 сторінку</button>
</a>
