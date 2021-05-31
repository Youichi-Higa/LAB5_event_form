<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>LAB5の最近の出来事（登録画面）</title>
</head>

<body style="background-color: #ffebcd;">

    <div class="container">
        <form class="col my-3 rounded" action="website_form_create.php" method="POST" style="max-width: 800px; background-color: #24A6E9; color: white;">
            <fieldset>
                <legend class="container-sm my-3">LAB5の最近の出来事（登録画面）</legend>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">名前</label>
                    <input type="text" name="name" placeholder="○○さん" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">出来事</label>
                    <textarea rows="4" cols="40" name="event" placeholder="○○さんに起こった最近の出来事を教えてください。" class="form-control" id="exampleFormControlTextarea1"></textarea>
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">登録者</label>
                    <input type="text" name="writer" placeholder="ジーズ  花子" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="container-sm mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="email" name="email" placeholder="×××××@example.com" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="container-sm mb-3">
                    <button class="btn text-white" style="background-color: #F39C13">送信</button>
                </div>
            </fieldset>
        </form>
        <a href="website_form_read.php" class="btn btn-secondary ms-2"  role="button">一覧画面</a>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>