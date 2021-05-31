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
    <h3 class="py-3 text-nowrap" style="color:#24A6E9;">LAB5の最近の出来事（一覧画面）</h3>

    <div class="row" id="output">
    </div>
    <a href="website_form_input.php" class="btn btn-secondary mb-3" role="button">登録画面</a>
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

    img_obj = {
      abe: "img/01_abe.png",
      kamizono: "img/02_kamizono.jpeg",
      tagishi: "img/04_tagishi.jpeg",
      tsumagari: "img/05_tsumagari.jpeg",
      hashiguchi: "img/06_hashiguchi.png",
      higa: "img/07_higa.jpeg",
      fujikawa: "img/08_fujikawa.jpeg",
      hori: "img/09_hori.png",
      matsuo: "img/10_matsuo.jpeg",
      matsunaga: "img/11_matsunaga.jpeg",
      miyakawa: "img/12_miyakawa.jpeg",
      wakamatsu: "img/13_wakamatsu.png",
      morishige: "img/14_morishige.jpeg",
      ishibashi: "img/15_ishibashi.jpeg",
      kadota: "img/16_kadota.png"
    }

    data.forEach(function(x) {
      if (x.name == "安倍さん") {
        x.img = (img_obj["abe"])
      } else if (x.name == "上薗さん") {
        x.img = (img_obj["kamizono"])
      } else if (x.name == "田岸さん") {
        x.img = (img_obj["tagishi"])
      } else if (x.name == "津曲さん") {
        x.img = (img_obj["tsumagari"])
      } else if (x.name == "橋口さん") {
        x.img = (img_obj["hashiguchi"])
      } else if (x.name == "比嘉さん") {
        x.img = (img_obj["higa"])
      } else if (x.name == "藤川さん") {
        x.img = (img_obj["fujikawa"])
      } else if (x.name == "堀さん") {
        x.img = (img_obj["hori"])
      } else if (x.name == "松尾さん") {
        x.img = (img_obj["matsuo"])
      } else if (x.name == "松永さん") {
        x.img = (img_obj["matsunaga"])
      } else if (x.name == "宮川さん") {
        x.img = (img_obj["miyakawa"])
      } else if (x.name == "若松さん") {
        x.img = (img_obj["wakamatsu"])
      } else if (x.name == "森繁さん") {
        x.img = (img_obj["morishige"])
      } else if (x.name == "石橋さん") {
        x.img = (img_obj["ishibashi"])
      } else if (x.name == "角田さん") {
        x.img = (img_obj["kadota"])
      }
    });

    console.log(data);


    const output_data = [];
    data.forEach(function(x) {
      output_data.push(`
      <div class="col-sm-3 my-3">
        <div class="card" style="background-color: #24A6E9; color: white;">
          <img src=${x.img} class="card-img-top" alt="...">
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