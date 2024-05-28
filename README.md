# アプリケーション名
お問い合わせフォーム
## 環境構築
Dockerビルド
1. git clone　git@github.com:rain-forest3110/test-contact-form.git
2. docker-compose up -d --build
* MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed　（シーディング作れていない）

## 使用技術(実行環境)
PHP 8.3.4

Laravel Framework 8.83.8

MySQL 15.1

## ER図
< - - - 作成したER図の画像 - - - >

## URL
• 開発環境:http://localhost/

• phpMyAdmin: http://localhost:8080/
