<?php

// 名前空間：namespaceはフォルダの構成と同じようになる
namespace App\Http\Controllers;

//Requestを持ってくるという形になる
use Illuminate\Http\Request;

//Modelsフォルダの中のtestsファイルを引っ張ってこれる
use App\Models\Test;

use Illuminate\Support\Facades\DB;

// namespaceだったり extends Controllerを継承している
// クラスの名前がファイルと同じ名前になるようにする 今回の場合だとTestController
class TestController extends Controller
{
    //routes/webのindexが読み込まれたらここの処理がされる
    public function index()
    {
        // テストテーブル
        $values = Test::all();


        $tests = DB::table('tests')->select('id')->get();

        // die + var_dump()をセットにしたコマンド
        // 処理を止めて変数の中身を表示してくれる
        dd($tests);

        //viewファイルのtests/testに飛ぶ
        // compact関数 変数名を入れると複数と関数を渡せる　values変数
        return view('tests.test', compact('values'));
        
    }
}

// Facade　正面入り口　アクセスするところを一つにまとめる