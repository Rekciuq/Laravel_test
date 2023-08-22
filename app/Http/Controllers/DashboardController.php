<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke() {
        return view('dashboard', [
            'user' => auth()->user(),
            'isAdmin' => auth()->user()->role === 'Administrator',
            'urls' => Url::paginate(5)
        ]);
    }
}
