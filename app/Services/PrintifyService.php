<?php

// app/Services/PrintifyService.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PrintifyService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('printify.api_key');
    }

    public function getProducts()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get('https://api.printify.com/v1/products');
        return $response->json();
    }
}

