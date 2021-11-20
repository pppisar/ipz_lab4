<?php
	//Підключаэмо файл зі змінними конфігурації
  require_once 'config.php';

  // Встановлюємо з'єднання з MySQL
  $conn = new mysqli($host, $user, $pass, $data);
  // Перевіряємо чи було встановлене з'єднання. Якщо ні, то виводим оповідомлення про помилку
  if($conn->connect_error) die('Warning: Error connection!');

  // Зчитуэмо данні з БД
  $q = "SELECT * FROM `students`"; // Строка запиту даних з таблиці students
  $res = $conn->query($q);//Змінна, яка буде зберігати дані, які ми отримуємо з запиту
  // Перевіряємо чи успішно був отриман результат після виконання запиту
  if(!$res) die('Warning: Query error!');

  //Виводимо отримані дані на сторінку в вигляді таблиці
  echo '<table style="border-style:Solid;font-size:24px;font-weight:bold;"><tr><th>id</th>' . 
  '<th>ПІБ</th><th>Зображення</th><th>Заклад освіти</th><th>Ступінь</th><th>EMAIL</th></tr>';
  //Починаємо перебирати кожний рядок за допомогою циклу і запомнюємо даними кожен рядок таблиці
  while ($stud = mysqli_fetch_assoc($res))
  {
    echo '<tr>';
    echo '<td>' . $stud['id'] . '</td>';
    echo '<td>' . $stud['pib'] . '</td>';
    echo '<td><img src=' . $stud['img'] . '></td>';
    echo '<td>' . $stud['edu'] . '</td>';
    echo '<td>' . $stud['degree'] . '</td>';
    echo '<td>' . $stud['email'] . '</td>';
    echo '</tr>';
  }
  echo '</table>';
?>
<!-- Кнопка для повернення на головну сторінку з системними параметрами -->
<a href="/lab4/">
	<button style="font-size:24px;" >Повернутися на головну</button>
</a>