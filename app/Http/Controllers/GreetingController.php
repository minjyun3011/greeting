<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function words($words)
    {
        $daytiming = "";
        if ($words == 'morning') {
            $daytiming = '朝';
            $msg = 'おはようございます';
        } elseif ($words == 'afternoon') {
            $daytiming = '昼';
            $msg = 'こんにちは';
        } elseif ($words == 'evening') {
            $daytiming = '夕方';
            $msg = 'こんばんは';
        } elseif ($words == 'night') {
            $daytiming = '夜';
            $msg = 'おやすみ';
        } else {
            $daytiming = '嘘';
            $words = '';
            $msg = '正しく入力してください';
        }
        return view('message.words', ['words' => $words, 'daytiming' => $daytiming, 'msg' => $msg]);
    }

    public function comments($comment)
    {
        return view('message.comments', ['comment' => $comment]);
    }

    public function randomwords()
    {
        $arr = array("おはようございます", "こんにちは", "こんばんは", "おやすみ");
        $key = array_rand($arr);
        $message = $arr[$key];
        return view('message.randomwords', ['msg' => $message]);
    }
}
