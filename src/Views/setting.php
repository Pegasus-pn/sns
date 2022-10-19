<?php

/**
 * @var string $stylePath
 * @var string $scriptPath
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylePath; ?>">
    <title>Document</title>
</head>

<body>
    <a href="./body/main.php">ちんこへ</a>
    <h1>機能一覧</h1>
    <ul>
        <li>ログイン/ログアウト</li>
        <li>パスワードを忘れたら</li>
        <li>パスワードの不可逆暗号化（解読不可能な暗号としてDBに登録）</li>
        <li>文章投稿</li>
        <li>画像投稿</li>
        <li>いいね（非同期）</li>
        <li>コメント機能</li>
        <li>Twitter共有</li>
        <li>フォロー/フォロワー</li>
        <li>アイコン画像</li>
        <li>プロフィール変更</li>
        <li>無限スクロール（非同期）</li>
    </ul>

    <h1>
        タスク一覧
    </h1>
    <ul>
        <li>画面設計</li>
        <li>DB設計</li>
        <li>ドメインモデル設計</li>
        <li>バックエンド実装</li>
        <li>フロント実装</li>
        <li>テスト</li>
        <li>ホスティング</li>
    </ul>

</body>
<script src="<?php echo $scriptPath; ?>"></script>

</html>