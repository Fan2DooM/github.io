<?php
//Регистрация

$connection = mysqli_connect("localhost", "root", "", "UsersDatabase")
if($connection == false){
    echo 'Ошибка подключения';
    exit();
} else{
    echo 'Подключение успешно';
}
if(isset($_POST["login"])){
    $login = $_POST["login"];
}
if(isset($_POST["gender"])){
    $gender = $_POST["gender"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
}
$sql = mysqli_query($connection, "INSERT INTO `t_User` (`login`, `gender`, `age`, `password`) VALUES ('$login', '$gender', '$age', '$encrypted_password')") or die ("Произошла ошибка: " . mysqli_error($connection));

//Проверка авторизации

if ($result = mysqli_query($db, "SELECT `password`, `id` FROM `t_user`
WHERE `login`='" . $login . "'")) {
if (password_verify($pass, $row['password'])) {
// Функция password_verify проверяет, соответствует ли пароль
хешу
// Если функция возвращает true, то вы входите
echo "Вы вошли";
} else {
// Если функция возвращает false, то выводит ошибку
echo "Пароль не совпадает";
}
} else {
// Выводит ошибку если не нашли такой логин
echo "Пользователь не найден";
}

?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Main Page</title>
    </head>
    <body>        
        <?php
            echo "<p>Здравствуйте, " .$login. ". Спасибо за регистрацию!</p>";
        ?>
    </body>
</html>
