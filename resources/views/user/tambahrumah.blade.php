@extends('layouts.app')

@section('content')
    <div class="row mt-1 ms-3 me-3 p-1" style="background-color: olive">
        <p class="m-1" style="color: aqua">Tambah Stok Rumah</p>
    </div>
    <form action="">
        <div class="row ms-3 me-3 mt-3">
            <label class="col-1 text-end">Tanggal :</label>
            <input type="date" class="col-2">
            <input type="submit" class="col-1 text-wrap btn btn-success btn-sm ms-2" value='cari'>
        </div>
        </div>
    </form>
    <br>

    <div class="row mt-1 ms-3 me-3 p-1">
        <table class="table table-striped table-bordered border-success" style="background-color: bisque; font-size: 12px">
        <thead style="background-color: forestgreen;  font-size: 11px">
            <tr>
                <th style="color: aqua" scope="col">No.</th>
                <th style="color: aqua" scope="col">Nama Barang</th>
                <th style="color: aqua" scope="col">Qty/Pack</th>
                <th style="color: aqua" scope="col">Satuan</th>
                <th style="color: aqua" scope="col">Harga Satuan</th>
                <th style="color: aqua" scope="col">Stok Saat Ini</th>
                <th style="color: aqua" scope="col">Tambah Stok Terakhir</th>
                <th style="color: aqua" scope="col">Tanggal Tambah Terakhir</th>
                <th style="color: aqua" scope="col">Tambah Stok Hari Ini</th>
                <th style="color: aqua" scope="col">Jumlah Tambah</th>
                <th style="color: aqua" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td colspan="10" class="fw-bold">Data Bar</td>
            </tr>
            {{-- Looping disini --}}
            <tr>
                <td>1</td>
                <td>Susu Ultramilk Vanilla 1L</td>
                <td>4</td>
                <td>L</td>
                <td>15.000</td>
                <td>20</td>
                <td>5</td>
                <td>12/02/2023</td>
                <td>4</td>
                <form action="">
                    <td>
                        <input type="Number">
                    </td>
                    <td>
                        <input type="submit" class="btn btn-sm btn-success" value="Tambah">
                    </td>
                </form>
            </tr>
            {{-- Looping disini --}}
            <tr>
                <td></td>
                <td colspan="10" class="fw-bold">Data Dapur</td>
            </tr>
            {{-- Looping disini --}}
            <tr>
                <td>1</td>
                <td>Susu Ultramilk Vanilla 1L</td>
                <td>4</td>
                <td>L</td>
                <td>15.000</td>
                <td>20</td>
                <td>5</td>
                <td>12/02/2023</td>
                <td>4</td>
                <form action="">
                    <td>
                        <input type="Number">
                    </td>
                    <td>
                        <input type="submit" class="btn btn-sm btn-success" value="Tambah">
                    </td>
                </form>
            </tr>
            {{-- Looping disini --}}
        </tbody>
    </table>
    </div>
@endsection