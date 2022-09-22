<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Style.css">
    <title>Контакты</title>
</head>
<body>
<?php require "blocks/header.php"?>
<div class="container" mt-5 >
<h3>Контактная форма</h3><br>
<h4>Вы можете отправить на почту свои контакты и описание желаемого сайта и с вами свяжутся!</h4>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите Emai" class="form-control"><br>
    <textarea name="message" class = "form-control" placeholder="Кратко изложите какой сайт вам необхом!"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
<div display = "inline-block">
<h2>Контакты</h2>
<a href="https://vk.com/id180747940" class="nav-link px-2 link-dark"><img src="img/vk.png" width="40" height="40" class = "img-thumbnail" alt=""></a>
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16"> 
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
</div>
</div>




<?php require "blocks/footer.php"?> 
</body>
</html>