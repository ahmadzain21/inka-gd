<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;
use Illuminate\Pagination\LengthAwarePaginator;

class SheetDbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sheetdb = new SheetDB('tn09rl43aqvo5');
        $datas = $sheetdb->get();

        dd($datas);

        $currentPage = $request->input('page', 1);
    $perPage = 10;
    $offset = ($currentPage - 1) * $perPage;

    $paginatedItems = array_slice($datas, $offset, $perPage);

    $paginator = new LengthAwarePaginator(
        $paginatedItems,
        count($datas),
        $perPage,
        $currentPage,
        ['path' => url()->current()]
    );

    return view('admin.pages.sheetdb.index', ['datas' => $paginator, 'datasJson' => $datas ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$sheetdb = new SheetDB('19a76gr9ig8fg');

        //$datas = $sheetdb->search(['KODE MATERIAL' => $id]);

        //dd($datas[0]);

        //if (count($datas) > 0) {
            //$data = $datas[0];
        //} else {
            //$data = 'no data';
        //}

        $data = 'data';

        return view('admin.pages.sheetdb.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
