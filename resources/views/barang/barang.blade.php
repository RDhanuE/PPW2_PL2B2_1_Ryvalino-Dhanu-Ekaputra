@extends('master')

@section('table')
<table class="table table-striped">
    <thead>
        <th>id</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Id_Supplier</th>
    </thead>
    <tbody>
        @foreach($table as $data)
        <tr>
            <td>{{$data -> id}}</td>
            <td>{{$data -> Nama_Barang}}</td>
            <td>{{"Rp".number_format($data -> Harga, 2, ',' , '.')}}</td>
            <td>{{$data -> Stok}}</td>
            <td>{{$data -> Id_Supplier}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection