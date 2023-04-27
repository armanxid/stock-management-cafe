@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-3 justify-content-left">
            <div class="col-6">
                <label for="finduser" class="visually-hidden">Cari user</label>
                <input type="text" class="form-control" id="finduser" placeholder="Cari nama lengkap user">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-secondary mb-3">Cari User</button>
              </div>
        </div>
        <b>Filter</b>
        <hr>
        <p>Role:</p>
        <div class="input-group mb-2">
            <div class="input-group-text">
                
                <input class="form-check-input m-1" checked type="checkbox" id="checkall" value="all" aria-label="Checkbox for following text input">
                <label for="checkall">Semua</label>
            </div>
            <div class="input-group-text">
                <input class="form-check-input m-1" type="checkbox" id="checkuser" value="user" aria-label="Checkbox for following text input">
                <label for="checkuser">User</label>
            </div>
            <div class="input-group-text">
                <input class="form-check-input m-1" type="checkbox" id="checkadmin" value="admin" aria-label="Checkbox for following text input">
                <label for="checkadmin">Admin</label>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-auto align-self-end">
                <p>Status:</p>
                <div class="input-group mb-4">
                    <div class="input-group-text">
                        
                        <input class="form-check-input m-1" checked type="checkbox" id="allstatus" value="allstatus" aria-label="Checkbox for following text input">
                        <label for="allstatus">Semua</label>
                    </div>
                    <div class="input-group-text">
                        <input class="form-check-input m-1" type="checkbox" id="activeuser" value="user" aria-label="Checkbox for following text input">
                        <label for="activeuser">Aktif</label>
                    </div>
                    <div class="input-group-text">
                        <input class="form-check-input m-1" type="checkbox" id="inactiveuser" value="admin" aria-label="Checkbox for following text input">
                        <label for="inactiveuser">Non-Aktif</label>
                    </div>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <button type="submit" class="btn btn-success mb-3">Tambah user baru</button>
            </div>
        </div>
        
        <div class="col-auto">
            <table class="table table-striped-columns table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ROLE</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">INFORMASI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $data->firstItem();
                    @endphp

                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->type }}</td>
                            <td class="{{ $item -> status == 'active' ? 'text-success' : 'text-danger' }}">{{ $item->status }}</td>
                            <td><a href="{{ route('user-management.show', $item->id) }}" class="btn btn-warning">Detail</a></td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
@endsection