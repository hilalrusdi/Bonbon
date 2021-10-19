@extends('layout.main')

@section('container')

    @if ($tanamen->count())

    <div class="card_table">
        <h1 class="tittle_table">Tabel Tanaman</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
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
                    <th>Action</th>
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
                        <td>
                            <form action="{{ url('tanaman/'.$data->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn-action" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <form action="/tanaman/{{ $data->id }}/edit" method="POST">
                                @method('put')
                                @csrf
                                <button class="btn-action"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif

    {{ $tanamen->links('vendor.pagination.custom') }}

@endsection