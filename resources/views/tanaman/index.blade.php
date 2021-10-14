@extends('layout.main')

@section('container')

    @if ($tanamen->count())

    <div class="card_table">
        <h1 class="tittle_table">Tabel Tanaman</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                <form action="/tanaman/tambah" class="">
                    @csrf
                    <button type="submit" class="btn-tambah flex">
                        <span>Tambah Akun</span>
                    </button>
                </form>
                @include('partial.search')
            </div>

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
    @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif

@endsection