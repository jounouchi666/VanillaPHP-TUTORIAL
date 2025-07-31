<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TODO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>TODO</h1>

        <form action="" method="POST" id="add-form">
            <input type="text" name="title" placeholder="TODOを入力" required>
            <button class="button-add" type="submit">登録</button>
        </form>

        <ul class="TODO-items">
            <li class="TODO-item">
                <div class="TODO-title">タイトル1</div>
                <div class="nav-container">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-update" type="submit">編集</button>
                    </form>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-delete" type="submit">削除</button>
                    </form>
                </div>
            </li>
            <li class="TODO-item">
                <div class="TODO-title">タイトル2</div>
                <div class="nav-container">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-update" type="submit">編集</button>
                    </form>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-delete" type="submit">削除</button>
                    </form>
                </div>
            </li>
            <li class="TODO-item">
                <div class="TODO-title">タイトル3</div>
                <div class="nav-container">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-update" type="submit">編集</button>
                    </form>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="">
                        <button class="button-delete" type="submit">削除</button>
                    </form>
                </div>
            </li>
        </ul>
    </main>
</body>
</html>