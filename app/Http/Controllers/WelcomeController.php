<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGniew;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        return view('welcome', [
            'productsgniew' => ProductGniew::paginate(50)
        ]);

    }
}

