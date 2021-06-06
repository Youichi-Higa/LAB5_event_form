<?php
// var_dump($_GET);
// exit();

$id = $_GET["id"];

include("functions.php");
$pdo = connect_to_db();

$sql = 'SELECT * FROM event_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($record);
    // exit();
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>LAB5の最近の出来事（編集画面）</title>
</head>

<body style="background-color: #ffebcd;">

    <div class="container">
        <form class="col my-3 rounded" action="website_form_update.php" method="POST" style="max-width: 800px; background-color: #24A6E9; color: white;">
            <fieldset>
                <legend class="container-sm my-3">LAB5の最近の出来事（編集画面）</legend>

                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">名前</label>
                    <select name="name" class="form-select" aria-label="Default select example">
                        <option value="<?= $record['name'] ?>" selected><?= $record['name'] ?></option>
                        <option value="安倍さん">安倍さん</option>
                        <option value="上薗さん">上薗さん</option>
                        <option value="田岸さん">田岸さん</option>
                        <option value="津曲さん">津曲さん</option>
                        <option value="橋口さん">橋口さん</option>
                        <option value="比嘉さん">比嘉さん</option>
                        <option value="藤川さん">藤川さん</option>
                        <option value="堀さん">堀さん</option>
                        <option value="松尾さん">松尾さん</option>
                        <option value="松永さん">松永さん</option>
                        <option value="宮川さん">宮川さん</option>
                        <option value="若松さん">若松さん</option>
                        <option value="森重さん">森重さん</option>
                        <option value="石橋さん">石橋さん</option>
                        <option value="角田さん">角田さん</option>
                    </select>
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">出来事</label>
                    <textarea rows="4" cols="40" name="event" placeholder="○○さんに起こった最近の出来事を教えてください。" class="form-control" id="exampleFormControlTextarea1"><?= $record['event'] ?></textarea>
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">登録者</label>
                    <input type="text" name="writer" placeholder="ジーズ  花子" class="form-control" id="exampleFormControlInput1" value="<?= $record['writer'] ?>">
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="email" name="email" placeholder="×××××@example.com" class="form-control" id="exampleFormControlInput1" value="<?= $record['email'] ?>">
                </div>
                <div class="container-sm mb-3">
                    <button class="btn text-white" style="background-color: #F39C13">送信</button>
                </div>
                <div>
                    <input type="hidden" name="id" value="<?= $record['id'] ?>">
                </div>

            </fieldset>
        </form>
        <a href="website_form_read.php" class="btn btn-secondary ms-2" role="button">一覧画面</a>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>