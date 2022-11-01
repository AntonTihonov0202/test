<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<h1>Hello</h1>
<h2>World</h2>
    <form action="php/mail.php" method="post">
        <fieldset>
            <legend>Поля для заполнения</legend>
            <label> Ваше имя: <input type="text" name="user_name" placeholder="Имя"</label>
            <label> Ваш email: <input type="email" name="user_email" placeholder="Email"</label>
            <label><button type="submit">Отправить</button></label>
        </fieldset>
    </form>
    <script src="js/Java.js"></script>
</body>
</html>
