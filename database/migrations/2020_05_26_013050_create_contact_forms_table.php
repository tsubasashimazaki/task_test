<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //データベース大文字小文字が確認できない場合があるためスネーク 複数形contact_forms
        // 新規作成の時はcreate 追加の時はSchema::table
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //氏名・メールアドレス・url・性別・年齢・お問い合わせ内容
            $table->string('your_name', 20);
            $table->string('email', 255);
            // カラム修飾子 = カラムにタイプを付属させえたい時 nullable = 空っぽでもOKという意味
            $table->longText('url')->nullable($value = true);
            //性別は0か1なのでboolean
            $table->boolean('gender');
            //少ない文字tinyInteger
            $table->tinyInteger('age');
            $table->string('contact', 200);
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
        Schema::dropIfExists('contact_forms');
    }
}
