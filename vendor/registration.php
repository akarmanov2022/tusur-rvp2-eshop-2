<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h1>Регистрация</h1>
<form>
    <label for="fullName">ФИО:</label>
    <input type="text" id="fullName" name="fullName" required><br>

    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="confirmPassword">Повторите пароль:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required><br>

    <label for="birthdate">Дата рождения:</label>
    <input type="date" id="birthdate" name="birthdate" required><br>

    <label for="avatar">Загрузите аватар:</label>
    <input type="file" id="avatar" name="avatar" accept="image/*"><br>

    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>

<?php
