<?php

require VENDOR_DIR . "/autoload.php";
require_once __DIR__ . "/defines.php";

use Project\Blog\Views\View;

if (($_SERVER["REQUEST_URI"] === "")) {
    $notFound = new View("404");
    return $notFound->render();
}

// URLをスラッシュで分解
$parsedUri = explode('/', $_SERVER['REQUEST_URI']);
// 最後の文字を取り出す
$lastUri = end($parsedUri);



// パスの一文字目を大文字へ変換
$call = substr($lastUri, 0, strcspn($lastUri, '?'));

// パスが / のとき
if ($lastUri === "") {
    $call = "Home";
}

if (isset($call[0])) {
    $call[0] = strtoupper($call[0]);
}

// app/controller/配下に同名のPHPファイルがないか探す。
if (file_exists(SRC_DIR . '/Controllers/' . $call . '.php')) {
    // 見つかったファイルをインクルードしてコントローラーをインスタンス化
    include SRC_DIR . '/Controllers/' . $call . '.php';
    $class = 'Project\Blog\Controllers\\' . $call;
    $obj = new $class(strtolower($call));

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        // GETならindexメソッドを呼び出す
        $response = $obj->index();
    } else {
        // POSTならpostメソッドを呼び出す
        $response = $obj->post();
    }
    // コントローラーから戻された内容をレスポンスとして戻す。
    echo $response;
    exit;
} else {
    // ファイルがなければ404エラー
    $notFound = new View("404");
    return $notFound->render();
    exit;
}
