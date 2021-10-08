@extends('layout.main')

@section('container')

    <div class="card_table">
        <h1 class="tittle_table">Tabel Supplier</h1>
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        <div class="tambah_akun">
            <form action="/supplier/tambah">
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
                    <th>Company</th>
                    <th>Person In Charge</th>
                    <th>Nomor Hp</th>
                    <th>Alamat</th>
                    <th>Tanggal Gabung</th>
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($suppliers as $supplier)
                    <tr class="tr_karyawan">
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->company }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->no_hp }}</td>
                        <td>{{ $supplier->alamat }}</td>
                        <td>{{ $supplier->tgl_join }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection