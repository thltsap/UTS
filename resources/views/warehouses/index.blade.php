@extends('warehouses.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <div class="alert alert-dark" role="alert">
                <h2>GUDANG PT. CEMPAKA</h2>
            </div>
                </div>
            <div class="my-2">
            <a class="btn btn-success" href="{{ route('warehouse.create') }}"> Input Barang </a>
            <a class="btn btn-dark" href="{{ route('home') }}"> Home </a>
        </div>        
    </div>
    </div>
 
    @if ($message = Session::get('success'))
         <div class="alert alert-success">
                <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <td>Id Barang</td>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Kategori</td>
            <td>Harga</td>
            <td>Quantity/Pcs</td>
            <td>Tanggal Barang Masuk</td>
            <td>Tanggal Barang Keluar</td>
            <td>Action</td>
        </tr>
        @foreach ($warehouses as $Warehouse)
        <tr>
 
            <td>{{ $Warehouse->id_barang}}</td>
            <td>{{ $Warehouse->kode_barang }}</td>
            <td>{{ $Warehouse->nama_barang }}</td>
            <td>{{ $Warehouse->kategori_barang }}</td>
            <td>{{ $Warehouse->harga }}</td>
            <td>{{ $Warehouse->qty }}</td>
            <td>{{ $Warehouse->tanggal_barang_masuk}}</td>
            <td>{{ $Warehouse->tanggal_barang_keluar}}</td>
            <td>
                <form action="{{route('warehouse.destroy', $Warehouse->id_barang) }}" method="POST">                            
                <a class="btn btn-info" href="{{ route('warehouse.show',$Warehouse->id_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('warehouse.edit',$Warehouse->id_barang) }}">Edit</a>

                @csrf 
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <div class="d-flex">
        {{ $warehouses->links() }}
    </div>
@endsection
