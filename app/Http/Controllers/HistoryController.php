<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class HistoryController extends Controller
{
    public function index(Request $request) {

        if (Gate::allows('isAdmin')) {
            if ($request->filled(['start', 'end'])) {
                $datas = History::whereBetween('tanggal', [
                        $request->input('start'),
                        $request->input('end')
                    ])
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $datas = History::orderBy('created_at', 'desc')->paginate(10);
            }
        } else {
            if ($request->filled(['start', 'end'])) {
                $datas = History::where('user_id', Auth::user()->id)
                    ->whereBetween('tanggal', [
                        $request->input('start'),
                        $request->input('end')
                    ])
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $datas = History::where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }
        }


        //dd($datas);

        return view('admin.pages.history.index', compact(['datas']));
    }
}
