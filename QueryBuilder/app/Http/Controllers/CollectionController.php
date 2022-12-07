<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = DB::table('collections as t')
        ->select(
            't.id as id',
            't.namaKoleksi as judul',
            DB::raw('
            (CASE
                WHEN t.jenisKoleksi="1" THEN "Buku"
                WHEN t.jenisKoleksi="2" THEN "Majalah"
                WHEN t.jenisKoleksi="3" THEN "Cakram Digital"         
                END) as jenisKoleksi'),
            't.koleksiSisa as jumlahKoleksi',
            't.koleksiKeluar as koleksiKeluar',
            't.createdAt as createdAt'

        )
        ->orderBy('namaKoleksi', 'asc')
        ->get();
        return view('koleksi.daftarKoleksi', compact('collection'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.registrasi');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaKoleksi'=> ['required', 'string', 'max:255'],
            'jenisKoleksi'=> ['required', 'string', 'max:255'],
            'jumlahKoleksi'=> ['required', 'string', 'max:255'],
            'createdAt' => ['required', 'date', 'max:255'],
        ]
       
    );
        $collection = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'koleksiSisa' => $request->jumlahKoleksi,
            'createdAt' => Carbon::now(),
            'koleksiKeluar' => 0,
        ]);
        return redirect()->route('koleksi.daftarKoleksi')->with('success', 'Berhasil');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::findorFail($id);
        return view('koleksi.infoKoleksi' , compact('collection'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::findorFail($id);
        return view('koleksi.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $collection = Collection::findorFail($id);
        $collection->update([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            'koleksiSisa' => $request->koleksiSisa,
            'koleksiKeluar' => $request->koleksiKeluar,
        ]);
        return redirect()
            ->route('koleksi.daftarKoleksi')
            ->with('success', 'Berhasil');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::findorFail($id);
        $collection -> delete();
        return redirect()->route('koleksi');
    }
    
}
