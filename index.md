DuPoの創作手順

table

## データベースから作ります。

```
#root権限でmysqlにログインする。
sudo mysql -u root

#db作成
create database dupo;

# ユーザ権限を与える
user:dbuser
pass:kimkim1201

# コマンド実行
grant all on dupo.* to dbuser@localhost identified by 'kimkim1201';

```

以上より今回のMySQLの設定は以下となる。

user:dbuser
database:dupo
pass:kimkim1201


これを`.env`に反映させる。


```.env
APP_ENV=local
APP_KEY=base64:eTp1rZZv2QkmWPmjF8SyKHgBx2Y6TDtM9Xnu5TZpjmQ=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dupo
DB_USERNAME=dbuser
DB_PASSWORD=kimkim1201

```

## テーブルを作る。

### nipos tabbleマイグレーションファイルを作成する。

記事を管理します。

#### step1 migrationファイルを作る。

```
php artisan make:migratiom
```

今回nipoテーブルを作る意味で以下のようにする。

```php
php artisan make:migration create_nipos_table --create=nipos
```

-create=nipos(table名)で以下の様な既にカラムを予め指定できるマイグレーションファイルを作ってくれる

```php
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNiposTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('nipos', function (Blueprint $table) {
           $table->increments('id');
           $table->timestamps();
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('nipos');
   }
}

```

>参考:miagration
>https://readouble.com/laravel/5.1/ja/migrations.html


crate_nipo_table(マイグレーションファイル)ができた。


#### step2 マイグレーションファイルを実行する。

```ph
php artsisan migrate

Migration table created successfully.
# いらん
Migrated: 2014_10_12_000000_create_users_table
# いらん
Migrated: 2014_10_12_100000_create_password_resets_table
# 今回のやつ
Migrated: 2016_11_21_155357_create_nipos_table
```

これでなんかもうmysqlにtable作られてた!

- 検証したい。

### MySQLにログインします。

- 1 とりあえず入る
`sudo mysql -u root`
- 2 ちゃんと入る。
`sudo mysql -u root -p`
`pass:secret`
 入力後に無事ログインしました。

入ってる-!

- tabele

desc niois;でもok!

```
mysql> show tables;
+----------------+
| Tables_in_dupo |
+----------------+
| migrations     |
| nipos          |
+----------------+
2 rows in set (0.01 sec)

```


### 既存のマイグレーションファイルを変更加える。

- 新しくマイグレーションファイルを作成する。
- オプション: --table = niposをしてあげる。

`php artisan  make:migration add_summary_to_nipos_table --table=nipos;
`
だいたい、この様にマイグレーションファイルが完成する。

```
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SummaryToTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::table('nipos', function (Blueprint $table) {
           $table->string('summary')->nullable();
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::table('nipos', function (Blueprint $table) {
           $table->dropColumn('summary');
       });
   }
}



```

```
php artisan migrate
```

実行する。

#### ちゃんと反映されているかを確認。

use dupo;
desc nipos;


```php
mysql> desc nipos;
+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| title      | varchar(255)     | NO   |     | NULL    |                |
| body       | text             | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
| summary    | varchar(255)     | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+
6 rows in set (0.00 sec)

```






## nipoモデルを作る。

テーブル出来たので、次はそのデータを管理するモデルを作る。

modelを作る。

`php artisan make:model Nipo`

すると以下のようなファイルが生成される。

```
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nipo extends Model
{
   //
}
```


laravelのモデルは**Eloquen**モデルって呼ばれています。**tinker**コマンドで、インタラクティブに操作できる。

### tinker コマンドでtableにデータを入れる。

#### step1 tinkerコマンド準備

```
php artisan tinker
Psy Shell v0.7.2 (PHP 7.0.8-2+deb.sury.org~xenial+1 — cli) by Justin Hileman
```

#### step2 インスタンス呼び出し。

ok
```
$nipo = new App\Nipo();
=> App\Nipo {#672}
```

#### step3 データを入れていく。


```
>>> $nipo->title = 'title1';
=> "title1"
>>> $nipo->body = 'Hello Wold';
=> "Hello Wold"
>>> $nipo->save();

## ここで「sumaryになんにも無いすけどぉ～って怒られるので、ここも入れてあげる。」
Illuminate\Database\QueryException with message 'SQLSTATE[HY000]: General error: 1364 Field 'summary' doesn't have a default value (SQL: insert into `nipos` (`title`, `body`, `updated_at`, `created_at`) values (title1, Hello Wold, 2016-11-23 08:04:51, 2016-11-23 08:04:51))'

>>> $nipo->summary = 'okok';
=> "okok"
>>> $nipo->save();
=> true
```

*修正しました = summary の中身をnull okにする。*

```

=> App\Nipo {#681}
>>> $nipo->title = 'title1';
=> "title1"
>>> $nipo->body = 'Hello Wold';
=> "Hello Wold"
>>> $nipo->save();
=> true

```

#### step4 データがちゃんと入ったか確認する。

tinkerコマンドで
```php
>>> $nipo->toArray();
=> [
    "title" => "title1",
    "body" => "Hello Wold",
    "updated_at" => "2016-11-23 08:04:51",
    "created_at" => "2016-11-23 08:04:51",
    "summary" => "okok",
    "id" => 1,
  ]
```

mysql直打ちコマンドで

```
mysql> mysql> select * from nipos;
+----+--------+------------+---------------------+---------------------+---------+
| id | title  | body       | created_at          | updated_at          | summary |
+----+--------+------------+---------------------+---------------------+---------+
|  1 | title1 | Hello Wold | 2016-11-23 08:04:51 | 2016-11-23 08:04:51 | okok    |
+----+--------+------------+---------------------+---------------------+---------+


```
### tinker createメソッドでいい感じにやる。

例

```
APP\Nipo::create(['title'=>'title 2' ,'body'=> 'body 2'] );

## が怒られる
Illuminate\Database\Eloquent\MassAssignmentException with message 'title'
```

怒られる理由としては、、Mass Assignment の例外が起きているので、意図せぬ入力に関しては入らないようにするので修正する。

```
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#モデルです
class Nipo extends Model
{
   //dataを挿入してもいいようにする。
   protected $fillable = ['title', 'body'];

}

```

これでok

後は以下のコマンドでdataを入れる。

```
Psy Shell v0.7.2 (PHP 7.0.8-2+deb.sury.org~xenial+1 — cli) by Justin Hileman
>>> APP\Nipo::create(['title'=>'AAAAAAAAAA' ,'body'=> 'Yeaaaaa'] );
PHP Fatal error:  Class 'APP\Nipo' not found in eval()'d code on line 1
>>> $nipo = new App\Nipo();
=> App\Nipo {#685}
>>> APP\Nipo::create(['title'=>'AAAAAAAAAA' ,'body'=> 'Yeaaaaa'] );
=> App\Nipo {#693
    title: "AAAAAAAAAA",
    body: "Yeaaaaa",
    updated_at: "2016-11-28 20:48:04",
    created_at: "2016-11-28 20:48:04",
    id: 8,
  }
>>>

```

ちゃんとこれで入っている。


## ルーティングとコントローラを考える。

**常に我々ルーティングとコントローラは表裏一体と考えるのだ。**

>考えるべきことURLになにが来たらどんなページへ飛んで欲しいかだ。して欲しい事はその下へ書く。

今回は

- urlに`index`と入ったら、indexページへ飛ぶ。
- そのindexページでデータを取得して表示するようにする。
### route

###  NiposController

Niposは標準敵なCRUD操作をメインに扱うコントロールとして生成する。

#### step1 artisanコマンドでcontrollerを作成する。

```
php artisan make:controller NiposController
```

### 次にどんなアクセスがあったら、どういう操作をしてほしいかを考える。

- どんなアクセスが来るか?
  - `localhost:8000/dd`
- どんな操作をしてほしいか?
  - MySQLからdataを全て持ってきて表示する。


#### ルーティング

```
// URL(localhost/dd)画面にアクセスしたら、にgetでNiposContollerのindexメソッドを呼び出す
Route::get('/dd','NiposController@dd');
```

`/dd`でアクセスが来たら、`NiposController`の`dd`メソッドを実行して下さい。と言う。

#### コントローラ

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 名前空間を使うこで短くする。
use App\Nipo;

class NiposController extends Controller
{

    public function dd(){
        // 名前空間を使う。
        // $nipos = \APP\Nipo::all();
        $nipos = Nipo::all();
        //laravelで便利コマンド dd(dump die) dieはexit?
        dd($nipos->toArray());

        //niposディレクトリのdd.blade.index.phpにアクセスする。
        return view('nipos.dd');
    }
}
```


### データを最新順に並べる。

```
public function dd(){
        // 作られた准に表示する。
        // $nipos = Nipo::orderBy('created_at','desc')->get();
        // これでもok
        $nipos = Nipo::latest('created_at')->get();
        // nipos
        //laravelで便利コマンド dd(dump die)
        dd($nipos->toArray());
        return view('nipos.dd');
    }
```

以上でブラウザにMySQLからデータを取得して、最新順に並べる動作が出来た。


## MySQLから引っぱてきたデータをViewに与える。

### コントローラでwithを使ってデータを渡す

viewのファイルを指定した後にwithで変数にデータを渡す。
ココらへんはsmartyの構造文ぽいなぁ。

```
public function dupo(){
        $nipos = Nipo::latest('created_at')->get();
        // withでデータをviewへ渡す。
        return view('dupos.dupo')->with('nipos',$nipos);
    }
```

### viewファイルで@foreachでデータを表示する。

@foreachを使う

`{{- --}}`はbladeのコメントアウトに相当する。

```
@foreach ($nipos as $nipo)
{{-- タイトルだけ表示する。 --}}
<li><a href="">{{ $nipo->title }}</a></li>
@endforeach

```

### もし何も無かった場合はNot yet! Sorryと表示するように修正する。

@forelseを使う。

```
forelse ($nipos as $nipo)
{{-- タイトルだけ表示する。 --}}
<li><a href="">{{ $nipo->title }}</a></li>
@empty
{{-- 何もこなかった場合の処理 --}}
<li>No dupo! Sorry</li>
@endforelse
```

## show処理を実装する。

### ルーティング

### メソッド



## creat処理を実装する。

単純に記事作成画面(create画面)を作るだけである。

### ルーティング


### creataメソッド


```
@section('content')
<div class="center">
    <form method="post" action="{{ url('/dupo/store')}}" >
      <!--Lalavel特有のCSRF対策をスルーするための対策(TOkenを仕込む)です。 -->
      {{ csrf_field() }}

        <h3 class="title">タイトル</h3>
        <p>
            <input type="text" name="title" placeholder="title">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>


        <h3 class="title">今日のDuPo</h3>
        <p>
            <textarea name="body" placeholder="本文を入力してください" cols="30" rows="20"></textarea>
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="記事を投稿する。">
        </p>
    </form>
</div>

@endsection
```


## store処理を実装する。

### ルーティング

`post`で`/dupo/store`にアクセスしたら、`store`メソッドで処理する。
従って処理は
`Route::post('/dupo/store','DupoController@store');``

### storeメソッド

```
//storeメソッド
public function store(NipoRequest $request){

    /* NipoRequestを使わない場合
    $this->validate($request, [
    'title' => 'required|min:3',
    'body' => 'required'
    ]);
    */

    // data挿入を行う。
    $nipo = new Nipo();
    $nipo->title =$request->title;
    $nipo->body  =$request->body;
    $nipo->save();
    return redirect('/')->with('flash_message', '新規記事を作成しました！');
}


```


## validation作るぞ

これを実行する。

`php artisan make:request NipoRequest`

NipoRequestを作成します。


```
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NipoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //  バリデーション
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required'
        ];
    }
}
```

Todo:バリデーションエラーメッセージを綺麗にしたい
