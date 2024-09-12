# アプリケーション名
お問い合わせフォーム

## 環境構築
Dockerビルド
　1. got clone git@github.com:coachtech-material/laravel-docker-template.git
　2. docker-compose up -d -build

*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに
 合わせてdocker-compose.ymlファイルを編集して下さい。

 Laravel環境構築

  1.docker-compose exec php bash
  2.composer install
  3.env.exampleファイルから.envファイルを作成し、環境変数を変更
  4.php artisan key:generate
  5.php artisan migrate
  6.php artisan db:seed

## 使用技術(実行環境)
  1.PHP 7.4.9
  2.Laravel 8.83.8
  3.MySQL 8.0.26

## ER図
  ここに作成したER図の画像を追加する

## URL
  ・環境開発：http://localhost/
  ・phpMyAdmin：http://lovalhost:8080/