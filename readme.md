# 概要
こちらは埼玉県内の観光スポットの検索及び、周辺の天候情報を確認することができるサイトです。
また、ユーザー情報を登録することで、各観光スポットについて、クチコミ情報を共有することができます。
# 環境構築(macの場合)
環境構築の際に、下記のサイトを参考に行いました。<br>
URL：https://qiita.com/ucan-lab/items/17c806973e69792ada99<br>
## dockerを用いた環境構築手順(新規プロジェクトの場合)
1.git、dockerのインストール<br>
2.作業ディレクトリを作成し、作業ディレクトリへ移動する。<br>
$ mkdir (作業ディレクトリ名) <br>
$ cd (作業ディレクトリ名) <br>
3.DockerテンプレートをGitHubリポジトリからダウンロードし、ディレクトリへ移動する。<br>
$ git clone https://github.com/fukushima-shoma/japan_drive.git<br>
$ cd japan_drive<br>
4.dockerの.env の中身を変更する。<br>
   今回はWEBPORT=8000、MYSQL_VERSION=5.7、DBNAME、DBUSER、DBPASSは個々に変更する。<br>

 5.ビルド、起動する。<br>
$ docker-compose up -d --build <br>
6.Laravelプロジェクトを新規作成する。<br>
$ docker-compose exec app composer create-project --prefer-dist "laravel/laravel=5.7.*" . <br>
$ docker-compose exec app composer require predis/predis<br>
7.URL：http://127.0.0.1:8000へアクセスするとlaravelページが表示される。
## dockerを用いた環境構築手順(クローンする場合)
1.git、dockerのインストール<br>
2.作業ディレクトリを作成し、作業ディレクトリへ移動する。<br>
$ mkdir (作業ディレクトリ名) <br>
$ cd (作業ディレクトリ名) <br>
3.DockerテンプレートをGitHubリポジトリからダウンロードし、ディレクトリへ移動する。<br>
$ git clone https://github.com/fukushima-shoma/japan_drive.git<br>
$ cd japan_drive<br>
4.dockerの.env を確認し変更する。<br>
$ vi .env<br>
   今回はAPP_CODE_PATH_HOST=../drive_japan、WEBPORT=8000、DBNAME、DBUSER、DBPASSは個々に変更する。<br>
 5.ビルド、起動する。<br>
$ docker-compose up -d --build <br>
6.Laravelプロジェクトをgithubからcloneする<br>
$ git clone (GitリポジトリのURL)<br>
今回は、$ git clone https://github.com/fukushima-shoma/japan_drive.git<br>
7.ビルド、起動で作られた空のsrcフォルダを削除し、cloneしたlaravelフォルダ名をsrcにリネームする。<br>
8.再起動する<br>
$ docker-compose restart <br>
9.コンテナ内へ入る<br>
$ docker-compose exec app ash<br>
10.vendorフォルダの作成、変更する。<br>
/work # composer install<br>
今回は、作成したvendor/laravel/framework/src/illuminate/Foundation/Auth/AuthenticatesUsers.phpファイルの162行目を<br>
redirect('/');からredirect('<font color="Red">/login</font>');へ変更する。<br>
11..envファイルを作成する<br>
.env.exampleがデフォルトで入っているので、.envにリネームし設定する。<br>
12.アプリケーションキーの初期化をする。<br>
/work # php artisan key:generate<br>
13.データベースの設定を行う<br>
.envファイルのDBの設定を変更する。<br>
14.データベースにコネクトする。<br>
$ docker-compose exec db bash -c 'mysql -u(.envファイルで指定したユーザー名) -p ' <br>
(.envファイルで指定したパスワード)を入力
15.データベースの作成<br>
database create (.envファイルで指定したデータベース名);<br>
16.コンテナに入りマイグレーション<br>
$ docker-compose exec app ash<br>
/work # php artisan migrate<br>
17.続いてシーディング<br>
/work # php artisan db:seed
18.http://127.0.0.1:8000/sightseeing<br>
へアクセスするとホーム画面が表示される。<br>
