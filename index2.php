<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Style.css">
    <title>PHP веб сайт</title>
</head>
<body>
<?php require "blocks/header.php"?>
    <div class = "container">
        <h3 class = "mb-5">Услуги<h3>
      
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap">
    <?php
    for ($i = 0; $i <= 2; $i++):
    ?>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">
              <?php 
                if($i == 0) 
                echo "Создание сайтов через сервисы конструкторы";
                else if($i ==1 )
                echo "Создание небольших лендингов,сайтов портфолио";
                else
                echo "Создание небольших сайтов под ключ";
                
              ?>
            </h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i + 1)?>.jpg" class = "img-thumbnail" alt="">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
          </div>
        </div>
      </div>
    <?php
    endfor;
    ?>
    </div>
    <?php require "blocks/footer.php"?>
</body>
</html>