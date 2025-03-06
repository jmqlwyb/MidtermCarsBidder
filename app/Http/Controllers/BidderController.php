<?php

namespace App\Http\Controllers;

use App\Models\Bidder;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function index()
    {
        return Inertia::render('Bidders', [
            'bidders' => Bidder::all()
        ]);
    }
}
