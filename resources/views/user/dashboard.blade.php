@extends('layouts.app')

@section('content')
<div class="container text-center fs-4">
    <div class="row align-item-start">
        <div class="col border m-1 p-2 rounded">
           <a href="{{ route('account') }}" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/akun.png') }}"  alt="kelola akun" class="mt-2">
                <p class="mt-3">Kelola Akun</p>
           </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <a href="{{ route('transaksi') }}" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/transaksi.png') }}"  alt="transaksi" width="64" height="64" class="mt-2">
                <p class="mt-3">Transaksi</p>
            </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <img src="{{ asset('assets/image/histori.png') }}"  alt="Riwayat" class="mt-2">
            <p class="mt-3">Riwayat Transaksi</p>
        </div>
    </div>
</div>
@endsection