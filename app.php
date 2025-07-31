<?php 
    session_start();

    // 初期化
    if (empty($_SESSION['todos'])) {
        $_SESSION['todos'] = [];
    }

    // 登録
    if (isset($_POST['add']) && !empty($_POST['title'])) {
        $_SESSION['todos'][uniqid()] = strip_tags($_POST['title']);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // 編集データの保存
    if (isset($_POST['save']) && isset($_POST['id']) && isset($_POST['title'])) {
        $_SESSION['todos'][$_POST['id']] = strip_tags($_POST['title']);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // 削除
    if (isset($_POST['delete'])) {
        unset($_SESSION['todos'][$_POST['id']]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

?>

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
        <!-- 編集モード -->
        <?php if (isset($_POST['update']) && !empty($_POST['id']) && isset($_SESSION['todos'][$_POST['id']]) ): ?>
            <h1>TODO<span class="edit">編集</span></h1>

            <div class="edit-form">
                <form action="" method="POST" id="input-form">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($_POST['id']) ?>">
                    <input
                        type="text"
                        name="title"
                        value="<?php echo htmlspecialchars($_SESSION['todos'][$_POST['id']]) ?>"
                        required
                    >
                    <button class="button-add" type="submit" name="save">保存</button>
                </form>
                <button
                    class="button-cancel"
                    type="button"
                    onclick="location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'"
                >キャンセル</button>
            </div>
        <!-- 通常表示 -->
        <?php else: ?>
            <h1>TODO</h1>

            <div class="add-form">
                <form action="" method="POST" id="input-form">
                    <input type="text" name="title" placeholder="TODOを入力" required>
                    <button class="button-add" type="submit" name="add">登録</button>
                </form>
            </div>
            
            <ul class="TODO-items">
                <?php foreach ($_SESSION['todos'] as $id => $todo): ?>
                    <li class="TODO-item">
                        <div class="TODO-title"><?php echo htmlspecialchars($todo) ?></div>
                        <div class="nav-container">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id) ?>">
                                <button class="button-update" type="submit" name="update">編集</button>
                            </form>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id) ?>">
                                <button class="button-delete" type="submit" name="delete">削除</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </main>
</body>
</html>