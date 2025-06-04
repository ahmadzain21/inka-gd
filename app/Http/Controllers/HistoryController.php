<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        $datas = History::all();

        //dd($datas);

        return view('admin.pages.history.index', compact(['datas']));
    }
}
