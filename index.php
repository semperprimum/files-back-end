<?php
    date_default_timezone_set('Asia/Almaty');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function putData () {
      $data = file_get_contents("comment.json");
      $arr_data = json_decode($data);
      $array = [
        'name' => $_POST['name'],
        'comment' => $_POST['comment'],
        'date_and_time' => date('j F H:i')
      ];
      $arr_data[] = $array;
      return json_encode($arr_data);
    }
    file_put_contents("comment.json", putData());
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <style>
        .mb-3 {
            margin-top: 10px;
        }
    </style>
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ваше имя</label>
    <input type="text" class="form-control" placeholder="Имя" id="exampleInputEmail1 name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Текст сообщения</label>
    <input type="text" class="form-control" placeholder="Текст" id="exampleInputPassword1 comment" name="comment">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>