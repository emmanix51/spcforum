<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $threads = Thread::orderBy('created_at', 'DESC');
        // check if there is a search
        if (request()->has('search')) {
            $threads = $threads->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like', '%' . request('search') . '%');
        }


        return view('dashboard', [
            'threads' => $threads->paginate(2)
        ]);
    }
}
