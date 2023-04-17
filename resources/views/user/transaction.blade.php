@extends('layouts.app')

@section('content')
<div class="container text-center fs-4">
    <div class="row align-item-start">
        <div class="col border m-1 p-2 rounded">
           <a href="" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/rumah.png') }}"  alt="kelola akun" class="mt-2" width="64" height="64">
                <p class="mt-3">Stok Rumah</p>
           </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <a href="" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/dapur.png') }}"  alt="transaksi" width="64" height="64" class="mt-2">
                <p class="mt-3">Stok Dapur</p>
            </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <img src="{{ asset('assets/image/bar.png') }}"  alt="Riwayat" class="mt-2">
            <p class="mt-3">Stok Bar</p>
        </div>
    </div>
</div>
@endsection