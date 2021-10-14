@extends('layout.main')

@section('container')


    @if ($transaksis->count())

    <div class="card_table">
        <h1 class="tittle_table">Tabel Transaksi</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                <form action="/transaksi/tambah" class="">
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
                    <th>Nama Pembeli</th>
                    <th>Tanggal Bayar</th>
                    <th>No Hp</th>
                    <th>Status Pembayaran</th>
                    <th>Ket Pembayaran</th>
                    <th>Total Pembayaran</th>
                    <th>Id Tanaman</th>
                    <th>Id Supplier</th>
                    <th>Use</th>
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($transaksis as $data)
                        <tr class="tr_karyawan">
                            <td>{{ $data->id }} </td>
                            <td><a href='/detail/{{ $data["id"] }}'>{{ $data->nama }}</a></td>
                            <td>{{ $data->tgl }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->ket }}</td>
                            <td>{{ $data->total }}</td>
                            <td>{{ $data->tanaman_id }}</td>
                            <td>{{ $data->supplier_id }}</td>
                            <td>lihat</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif

@endsection