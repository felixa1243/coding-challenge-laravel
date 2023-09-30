<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Lib\Max;
use App\Lib\Prime;
use App\Lib\Sort;

class ChallengeService
{
    public function findMax(Request $request)
    {
        $validator = Validator::make($request->only("numbers"), [
            "numbers" => "required|array",
            "numbers.*" => "int"
        ]);
        $validator->validate();
        $data = $validator->validated();
        return Max::findMax($data["numbers"]);
    }
    public function isPrime(Request $request)
    {
        $validator = Validator::make($request->only("number"), [
            "number" => "required|int"
        ]);
        $validator->validate();
        $data = $validator->validated();
        return Prime::isPrime($data["number"]);
    }
    public function sortChar(Request $request)
    {
        $validator = Validator::make($request->only("word"), [
            "word" => "required"
        ]);
        $validator->validate();
        $data = $validator->validated();
        return Sort::sort($data["word"]);
    }
}
