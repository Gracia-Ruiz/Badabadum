<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocaleMiddleware
{
   
    public function handle($request, Closure $next)
    {   
        $locale = session('locale', 'es');
        App::setlocale($locale);
        return $next($request);
    }
}
