<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    public function index()
    {
        $counter = Counter::first();
        return view('counter', compact('counter'));
    }

    public function increment()
    {
        $counter = Counter::first();
        $counter->increment('count');
        return redirect()->route('counter.index');
    }

    public function decrement()
    {
        $counter = Counter::first();
        $counter->decrement('count');
        return redirect()->route('counter.index');
    }
}
