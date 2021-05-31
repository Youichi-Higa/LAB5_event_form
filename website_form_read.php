<?php

$data = [];

$file = fopen('data/data.csv', "r");
flock($file, LOCK_EX);

if ($file) {
  while ($line = fgets($file)) {
    array_push($data, $line);
  }
};

flock($file, LOCK_UN);
fclose($file);

// var_dump($data);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>LAB5の最近の出来事（一覧画面）</title>
</head>

<body style="background-color: #ffebcd;">

  <div class="container">
    <h3 class="py-3" style="color:#24A6E9;">LAB5の最近の出来事（一覧画面）</h3>

    <div class="row" id="output">
    </div>
    <a href="website_form_input.php" class="btn btn-secondary mb-3" role="button">入力画面</a>
  </div>

  <!-- jpuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script>
    const json_data = <?= json_encode($data) ?>;
    const data = json_data.map(x => {
      return {
        name: x.split(',')[0],
        event: x.split(',')[1],
        writer: x.split(',')[2],
        email: x.split(',')[3].split('\n').join(""),
      }
    })
    console.log(data);

    const output_data = [];
    data.forEach(function(x) {
      output_data.push(`
      <div class="col-sm-3 my-3">
        <div class="card" style="background-color: #24A6E9; color: white;">
          <img src="img/G's_logo.jpeg" class="card-img-top" alt="...">
          <div class="card-body border" style="min-height: 180px;">
            <h5 class="card-title" id="name">${x.name}</h5>
            <p class="card-text" id="event">${x.event}</p>
          </div>
          <div class="card-body">
            <p class="card-title" id="writer">${x.writer}</p>
            <p class="card-text" id="email">${x.email}</p>
          </div>
        </div>
      </div>
      `)
    });

    $("#output").html(output_data);
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>