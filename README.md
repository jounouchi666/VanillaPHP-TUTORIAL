# PHP TODOアプリ（セッション管理）

## 概要

Laravelを普段使っているが、素のPHP（バニラPHP）はあまり経験がなかったため、学習目的で作成したシンプルなTODOアプリである。

セッションを使い、ブラウザ単位でTODOを管理する仕組みを実装している。

## 動作環境

- XAMPP（Apache + PHP）環境で動作確認済み
- PHP 7.x〜8.x 推奨（特にバージョン依存なし）
- ApacheのDocumentRoot以下に配置して利用すること

## 使い方

1. `index.php`をApacheのDocumentRoot配下に置く
2. ブラウザで `http://localhost/index.php` にアクセス
3. TODOの追加、編集、削除が可能
4. セッション管理のためブラウザ単位でTODOが保存される（サーバーにDBは不要）

## ファイル構成

- `index.php` … メインのPHPとHTMLコードを含む1ファイル完結型
- `style.css` … シンプルな見た目用スタイルシート

## 補足

- バリデーションやXSS対策として、入力値は `strip_tags()` と `htmlspecialchars()` を利用している
- POST後はリダイレクトして二重送信を防止している
- 永続化はしておらず、ブラウザのセッション終了でTODOはリセットされる
