<?php

// useはトレイトの宣言(複数use使用)
// それぞれScheme,Blueprint,Migration関数を使っている
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//artisan make:migrationで生成(同時にup, down二つのメソッド)されたもの class クラス名 extends 継承元クラス名
class AddTitleToContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // マイグレーション実行時は up メソッドが実行される
    public function up()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('title', 50)->after('your_name');//your_nameの後に件名追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //downメソッドはロールバック（マイグレーションを元に戻す機能）の時に実行
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->dropColumn('title');
        });
    }
}
