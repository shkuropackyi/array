

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="/script.js"></script>
    <style type="text/css" src="/style.css"></style>
</head>
<body>
    <form action="" method="post" name="mytest" onsubmit="valid(this)">
        <label for="name">Имья:</label>
        <input type="text" name="name" placeholder="name" id="name"><br><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" placeholder="password" id="password"><br><br>
        <label for="password">Повторите пароль:</label>
        <input type="repassword" name="repassword" placeholder="repassword" id="repassword"><br><br>
        <label>Пол:</label>
        <input type="radio" name="gender" id="male" value="male">
        <label>Мужской</label>
        <input type="radio" name="gender" id="female" value="female">
        <label>Женский</label><br><br>
        <button type="submit" name="submit" value="Готово">Submit</button><br><br>
    </form>
    <input type="button" name="b" value="Click me" onclick="buttonClick (this)">
    <h1>
        <a id="load-array" href="/#" class="load-array">Магічна супер-кнопка для загрузки массиву через АЯКС</a>
        <pre id="json-container"></pre>
    </h1>
</body>
</html>