@extends('layouts.app')

@section('content')
    <div class="row mt-1 ms-3 me-3 p-1" style="background-color: olive">
        <p class="m-1" style="color: aqua">Inquiry Stok Dapur</p>
    </div>
    <form action="" style="font-size: 12px">
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Status :</label>
            <select name="" id="" class="col-1">
                <option value="">Sisa</option>
                <option value="">Habis</option>
            </select>
        </div>
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end" style="font-size-adjust: inherit">Tgl. Terakhir Tambah:</label>
            <input type="date" class="col-2">
        </div>
         <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Tgl.  Terakhir Pakai:</label>
            <input type="date" class="col-2">
        </div>
        <div class="row ms-3 me-3 mt-3">
            <div class="col-1"></div>
            <input type="submit" class="col-1 text-wrap" value='cari'>
        </div>
    </form>
    <br>
    <br>
    <div class="row mt-1 ms-3 me-3 p-1" style="background-color: olive">
        <p class="m-1" style="color: aqua">Data Stok Dapur</p>
    </div>
    <div class="row mt-1 ms-3 me-3 p-1">
        <table class="table table-striped" style="background-color: bisque">
        <thead style="background-color: forestgreen">
            <tr>
                <th style="color: aqua" scope="col">No.</th>
                <th style="color: aqua" scope="col">Nama Barang</th>
                <th style="color: aqua" scope="col">Qty/Pack</th>
                <th style="color: aqua" scope="col">Satuan</th>
                <th style="color: aqua" scope="col">Harga Satuan</th>
                <th style="color: aqua" scope="col">Tambah Terakhir</th>
                <th style="color: aqua" scope="col">Tanggal Tambah Terakhir</th>
                <th style="color: aqua" scope="col">Pakai Terakhir </th>
                <th style="color: aqua" scope="col">Tanggal Pakai Terakhir</th>
                <th style="color: aqua" scope="col">Stok Saat Ini</th>
                
            </tr>
        </thead>
        <tbody>
            {{-- Looping disini --}}
            <tr>
                <td>2</td>
                <td>Beras Wangi</td>
                <td>4</td>
                <td>Liter</td>
                <td>14.000</td>
                <td>5</td>
                <td>12/02/2023</td>
                <td>5</td>
                <td>15/02/2023</td>
                <td>20</td>
            </tr>
            {{-- Looping disini --}}
        </tbody>
    </table>
    </div>
@endsection