<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterestContact;

class InterestContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        InterestContact::create([
            'email' => $validated['email'],
        ]);

        return response()->noContent();
    }
}
