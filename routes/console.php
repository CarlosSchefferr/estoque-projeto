<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('cache:data', function () {
    try {
        $cache = Cache::remember('produtos', 60, function () {
            $produtos = Produto::all();
            return $produtos;
        });
        dump($cache);

        $cache = Cache::remember('users', 60, function () {
            $users = User::all();
            return $users;
        });
        dump($cache);
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        dump('Error caching data');
    }
})->describe('Cache data for 1 hour');