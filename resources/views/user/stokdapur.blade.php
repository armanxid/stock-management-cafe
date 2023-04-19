@extends('layouts.app')

@section('content')
<div class="container text-center fs-4">
    <div class="row align-item-start">
        <div class="col border m-1 p-2 rounded">
           <a href="{{ route('inquirydapur') }}" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/inquiry.png') }}"  alt="kelola akun" class="mt-2" width="64" height="64">
                <p class="mt-3">Inquiry Stok Dapur</p>
           </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <a href="{{ route('tambahrumah') }}" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/tambah.png') }}"  alt="transaksi" width="64" height="64" class="mt-2">
                <p class="mt-3">Tambah Stok Dapur</p>
            </a>
        </div>
        <div class="col border m-1 rounded p-2">
            <a href="{{ route('tambahrumah') }}" style="text-decoration: none ; color: black">
                <img src="{{ asset('assets/image/pakai.png') }}"  alt="transaksi" width="64" height="64" class="mt-2">
                <p class="mt-3">Pakai Stok Dapur</p>
            </a>
        </div>
    </div>
</div>
@endsection