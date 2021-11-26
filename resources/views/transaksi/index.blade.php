@extends('layout.main')

@section('container')


    {{-- @if ($transaksis->count()) --}}

    <div class="card_table">
        <h1 class="tittle_table h1">Tabel Transaksi</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                <form action="/transaksi/create" class="">
                    @csrf
                    <button type="submit" class="btn-tambah flex">
                        <span>Tambah Data</span>
                    </button>
                </form>
                @include('partial.search')
            </div>

        </div>
        <table class="tabel_karyawan">
            <thead class="thead_karyawan">
                <tr class="tr_karyawan">
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Tanggal Bayar</th>
                    <th>No Hp</th>
                    <th>Status Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Total Pembayaran</th>
                    <th>Nama Tanaman</th>
                    {{-- <th>Id Supplier</th> --}}
                    @can('admin')
                    <th>Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($transaksis as $data)
                        <tr class="tr_karyawan">
                            <td>{{ $data->id }} </td>
                            {{-- <td><a href='/detail/{{ $data->id }}'>{{ $data->nama }}</a></td> --}}
                            <td> <a href="transaksi/{{$data->id}}"> {{ $data->supplier->name }} </a></td>
                            <td>{{ $data->tgl }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->ket }}</td>
                            <td>{{ $data->total }}</td>
                            <td>{{ $data->tanaman->nama }}</td>
                            {{-- <td>{{ $data->supplier_id }}</td> --}}
                            @can('admin')
                            <td>
                                {{-- <form action="{{ url('transaksi/'.$data->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-action btn-color-1" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                                </form> --}}
                                <form action="/transaksi/{{ $data->id }}/edit" method="POST">
                                    @method('get')
                                    @csrf
                                    <button class="btn-action btn-color-2"><i class="fas fa-edit"></i></button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div>{{ $transaksis->$tanamans }}</div> --}}
    </div>
    {{-- @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif --}}

    {{ $transaksis->links('vendor.pagination.custom') }}

@endsection