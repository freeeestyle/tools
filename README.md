<p align="center">
	<img src="https://tools.shinjiezumi.work/img/main.svg" width="100%" height="100px">
</p>

# URL
https://tools.shinjiezumi.work

# このWebアプリについて
Web開発の中で用途がありそうなツールを自作して公開していきます。

## ツール一覧
- ダミーデータ作る君

## ダミーデータ作る君
テスト用のダミーデータを作成するツールです。
様々な種類のダミーデータを作成することが出来ます。

# 使用技術
## フロントエンド
- Vue.js
- Materialize CSS FW
- Sass(Scss)

## バックエンド
- PHP 7.3
- Laravel 5.8
- MySQL 5.7

## ミドルウェア

- Nginx
- PHP-FPM

## 開発環境

docker(docker-compose)

## 本番環境

Webarena VPSクラウド

# 環境構築

1. クローン

    ```
    git clone https://github.com/shinjiezumi/tools.git
    ```

2. イメージビルド、コンテナ起動

    ```
    docker-compose up -d
    ```

3. 初期化

    ```
    docker-compose exec app bash
    bash script/init.sh
    ```
