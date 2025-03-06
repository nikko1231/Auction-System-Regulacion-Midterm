<?php

namespace App\Http\Controllers;

use App\Models\Bidder;
use Illuminate\Http\Request;

class BidderController extends Controller
{
    public function index()
    {

        $bidders = Bidder::orderBy('last_name', 'ASC')->get();
        return inertia('Bidder/Bidder', [
            'bidders' => $bidders
        ]);
    }
}
