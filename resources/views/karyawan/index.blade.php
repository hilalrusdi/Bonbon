@extends('layout.main')

@section('container')
    <div class="card_table">
        <h1 class="tittle_table">Tabel Karyawan</h1>
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        <div class="tambah_akun">
            <form action="/registration">
            @csrf
            <button type="submit" class="btn-tambah">
                <span>Tambah Akun</span>
            </button>
            </form>
        </div>
        <div class="content_karyawan">
            <table class="tabel_karyawan">
                <thead class="thead_karyawan">
                    <tr class="tr_karyawan">
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal Kerja</th>
                    </tr>
                </thead>
                <tbody class="tbody_karyawan">
                    @foreach ($users as $user)
                        <tr class="tr_karyawan">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->NIK }}</td>
                            <td>{{ $user->born }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->tgl_kerja }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection