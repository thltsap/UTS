<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        
        $warehouses = Warehouse::where([
            ['kode_barang', '!=', null, 'OR', 'nama_barang', '!=', null], //ketika form search kosong, maka request akan null. Ambil semua data di database
            [function ($query) use ($request) {
                if (($keyword = $request->keyword)) {
                    $query->orWhere('kode_barang', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('nama_barang', 'LIKE', '%' . $keyword . '%')->get(); //ketika form search terisi, request tidak null. Ambil data sesuai keyword
                }
            }]
        ])   
        ->orderBy('kode_barang', 'asc')->paginate(5);
        return view('warehouses.index', compact('warehouses'))->
        with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouses.create');
    }     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'id_barang' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            'tanggal_barang_masuk' => 'required',
            'tanggal_barang_keluar' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            Warehouse::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('warehouse.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id_barang
        $Warehouse = Warehouse::find($id_barang);
        return view('warehouses.detail', compact('Warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        //menampilkan detail data dengan menemukan berdasarkan id_barang untuk diedit
        $Warehouse = Warehouse::find($id_barang);
        return view('warehouses.edit', compact('Warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        //melakukan validasi data
        $request->validate([
            'id_barang' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            'tanggal_barang_masuk' => 'required',
            'tanggal_barang_keluar' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            Warehouse::find($id_barang)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('warehouse.index')
            ->with('success', 'Barang Berhasil Diupdate');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        //fungsi eloquent untuk menghapus data
        Warehouse::find($id_barang)->delete();
        return redirect()->route('warehouse.index')
        -> with('success', 'Barang Berhasil Dihapus');

    }
};
