@extends('layout.main')

@section('container')

    <div class="card_table">
        <h1 class="tittle_table">Tabel Tanaman</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        
            <form action="/tanaman/tambah">
            @csrf
            <button type="submit" class="btn-tambah">
                <span>Tambah Akun</span>
            </button>
            </form>
        </div>
        <table class="tabel_karyawan">
            <thead class="thead_karyawan">
                <tr class="tr_karyawan">
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Spesies</th>
                    <th>Asal</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($tanamen as $data)
                    <tr class="tr_karyawan">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->spesies }}</td>
                        <td>{{ $data->asal }}</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection