

<?php
$link = mysqli_connect("http://127.0.0.1/openserver/phpmyadmin/db_structure.php?server=1&db=testbd", "root", "root", "testbd");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>

/*
try{
$conn = new PDO(dsrc "mysql:localhost;dbname=testdb", username 'root', passwd 'root');

if(empty($_POST['name'])) exit("поле не заполнено");
if(empty($_POST['tel'])) exit("поле не заполнено");
if(empty($_POST['mail'])) exit("поле не заполнено");
if(empty($_POST['city'])) exit("поле не заполнено");

$query = "INSERT INTO message VALUES (NULL , :name, NOW())";
$msg = $conn->prepare($query);
$msg->execute(['name' => $_POST['name']]);

$msg_id = $conn->lastInsertId();

$query = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
$msg = $conn->prepare($query);
$msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);

header( string: "Location: index.html");
}
catch (PDOException $e)
{
    echo "error" .$e ->getMessage();
}*/
