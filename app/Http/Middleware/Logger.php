<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class Logger
{
    public function handle(Request $request, Closure $next)
    {
        $id = Uuid::uuid4()->toString();
        $response = $next($request);
        $log = [
            "ID" => $id,
            "URI" => $request->getUri(),
            "USER_AGGENT" => $request->server('HTTP_USER_AGENT')
        ];
        Log::info($log);
        return $response;
    }
}
