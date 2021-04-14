<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TodoController extends Controller
{
    public function index()
    {
        $listTarget = TodoList::all();
        return view('pages.list')->with([
            'listTarget' => $listTarget, 'bar' => $this->ProgresBar()
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'target' => 'required|string'
        ]);

        if (TodoList::where('waktu', Carbon::today())->count() < 5) {
            $list = $request->all();
            $list['waktu'] = Carbon::today();
            TodoList::create($list);

            return back();
        }

        return redirect('/')->with('status', 'Target sudah cukup, tidak boleh lebih dari 5 target perharian');
    }

    public function selesai($id)
    {
        $list = TodoList::findOrFail($id);
        if ($list) {
            $list->status = 1;
            $list->save();
        }

        return back();
    }

    public function ProgresBar()
    {
        $list = TodoList::where('status', 1)->where('waktu', Carbon::today())->get();
        $bar = 0;
        foreach ($list as  $value) {
            $bar += 20;
        }
        return $bar;
    }
}
