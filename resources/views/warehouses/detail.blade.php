@extends('layouts.layouts')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Barang </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID_Barang: </b>{{$Warehouse->id_barang}}</li>
                <li class="list-group-item"><b>Kode_Barang: </b>{{$Warehouse->kode_barang}}</li>                
                <li class="list-group-item"><b>Nama_Barang: </b>{{$Warehouse->nama_barang}}</li>                
                <li class="list-group-item"><b>Kategori: </b>{{$Warehouse->kategori_barang}}</li>               
                <li class="list-group-item"><b>Harga: </b>{{$Warehouse->harga}}</li>
                <li class="list-group-item"><b>Quantity/pcs: </b>{{$Warehouse->qty}}</li>
                <li class="list-group-item"><b>Tanggal_Barang_Masuk: </b>{{$Warehouse->tanggal_barang_masuk}}</li>
                <li class="list-group-item"><b>Tanggal_Barang_Keluar: </b>{{$Warehouse->tanggal_barang_keluar}}</li>
                </ul>
            </div>
            <a class="btn btn-success mx-3" href="{{ route('warehouse.index') }}">Kembali</a>            
    </div>
 </div>
</div>
@endsection
