@extends('layouts.app')

@section('content')
    <div class="row mt-1 ms-3 me-3 p-1" style="background-color: olive">
        <p class="m-1" style="color: aqua">Inquiry Stok Rumah</p>
    </div>
    <form action="">
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Tipe :</label>
            <select name="" id="" class="col-1">
                <option value="">Semua</option>
                <option value="">Dapur</option>
                <option value="">Bar</option>
            </select>
        </div>
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Status :</label>
            <select name="" id="" class="col-1">
                <option value="">Sisa</option>
                <option value="">Habis</option>
            </select>
        </div>
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Tanggal :</label>
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
        <p class="m-1" style="color: aqua">Data Stok Rumah</p>
    </div>
    <div class="row mt-1 ms-3 me-3 p-1">
        <table class="table table-striped" style="background-color: bisque">
        <thead style="background-color: forestgreen">
            <tr>
                <th style="color: aqua" scope="col">No.</th>
                <th style="color: aqua" scope="col">Nama Barang</th>
                <th style="color: aqua" scope="col">Qty/Pack</th>
                <th style="color: aqua" scope="col">Satuan</th>
                <th style="color: aqua" scope="col">Tipe</th>
                <th style="color: aqua" scope="col">Harga Satuan</th>
                <th style="color: aqua" scope="col">Stok Saat Ini</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Susu Ultramilk Vanilla 1L</td>
                <td>4</td>
                <td>Liter</td>
                <td>Bar</td>
                <td>14.000</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Beras Wangi</td>
                <td>4</td>
                <td>Liter</td>
                <td>Dapur</td>
                <td>14.000</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection