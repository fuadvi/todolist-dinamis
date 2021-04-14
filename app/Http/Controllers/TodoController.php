<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $listTarget = TodoList::all();

        return view('pages.list')->with([
            'listTarget' => $listTarget
        ]);
    }
}
