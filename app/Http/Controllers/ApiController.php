<?php

namespace App\Http\Controllers;

use App\Services\ChallengeService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    private ChallengeService $challengeService;
    public function __construct(ChallengeService $challengeService)
    {
        $this->challengeService = $challengeService;
    }
    public function getMax(Request $request)
    {
        return response()->json([
            "message" => "success",
            "result" => $this->challengeService->findMax($request)
        ]);
    }
    public function isPrime(Request $request)
    {
        return response()->json([
            "message" => "success",
            "result" => $this->challengeService->isPrime($request)
        ]);
    }
    public function sortWord(Request $request)
    {
        return response()->json([
            "message" => "success",
            "result" => $this->challengeService->sortChar($request)
        ]);
    }
}
