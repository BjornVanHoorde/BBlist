<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    public function show() {
        $shops = [
            'babycorner' => 'The Baby\' Corner',
        ];

        return view('scrape-form', compact('shops'));
    }
}
