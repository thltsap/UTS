@extends('layouts.layouts')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Barang </div>            
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('warehouse.store') }}" id="myForm">
                @csrf
                    <div class="form-group">
                        <label for="id_barang">ID Barang</label> 
                        <input type="text" name="id_barang" class="form-control" id="id_barang" aria-describedby="id_barang" > 
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label> 
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang" > 
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label> 
                        <input type="nama_barang" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang" > 
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori </label>  
                        <input type="kategori_barang" name="kategori_barang" class="form-control" id="kategori_barang" aria-describedby="kategori_barang" > 
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label> 
                        <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" > 
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity/pcs</label>  
                        <input type="qty" name="qty" class="form-control" id="qty" aria-describedby="qty" > 
                    </div>
                    <div class="form-group">
                        <label for="tanggal_barang_masuk">Tanggal Barang Masuk</label>  
                        <input type="date" name="tanggal_barang_masuk" class="form-control" id="tanggal_barang_masuk" aria-describedby="tanggal_barang_masuk">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_barang_keluar">Tanggal Barang Keluar</label>  
                        <input type="date" name="tanggal_barang_keluar" class="form-control" id="tanggal_barang_keluar" aria-describedby="tanggal_barang_keluar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success mx-3" href="{{ route('warehouse.index') }}">Kembali</a>
                </form>
                </div>
            </div>
        </div>
        </div>
@endsection
