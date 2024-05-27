<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PrintifyService;

class PrintifyController extends Controller
{
     protected $printifyService;

    public function __construct(PrintifyService $printifyService)
    {
        $this->printifyService = $printifyService;
    }

    public function index()
    {
        try {
                $products = $this->printifyService->getProducts();
                dd($this->printifyService->getProducts());
                return view('printify.index', compact('products'));
            } catch (\Exception $e) {
                Log::error('Printify API Error: ' . $e->getMessage());
            }
    }
}
