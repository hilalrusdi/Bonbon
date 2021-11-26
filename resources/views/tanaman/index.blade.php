@extends('layout.main')

@section('container')

    {{-- @if ($tanamans->count()) --}}

    <div class="card_table">
        <h1 class="tittle_table h1">Tabel Tanaman</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                @can('admin')
                <form action="/tanaman/create" class="">
                    @csrf
                    <button type="submit" class="btn-tambah flex">
                        <span>Tambah Data</span>
                    </button>
                </form>
                @endcan
                <div class="flex-1">
                @include('partial.search')
                </div>
            </div>

        </div>
        <table class="tabel_karyawan">
            <thead class="thead_karyawan">
                <tr class="tr_karyawan">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Spesies</th>
                    <th>Asal</th>
                    {{-- <th>Bobot</th> --}}
                    @can('admin')
                    <th class="w-1">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($tanamans as $data)
                    <tr class="tr_karyawan">
                        <td>{{ $data->id }}</td>
                        <td>
                            <a href="https://www.google.com/search?q={{ $data->nama }}">{{ $data->nama }}</a>
                        </td>
                        <td>{{ $data->spesies }}</td>
                        <td>{{ $data->asal }}</td>
                        {{-- <td>
                            @if ($tanamans->count($data->bobot1) == false)
                            {{ $data->bobot1 }}, {{ $data->bobot2 }}, {{ $data->bobot3 }}, {{ $data->bobot4 }}, {{ $data->bobot5 }}
                            @else
                            -
                            @endif
                        </td> --}}
                        {{-- <td></td> --}}
                        @can('admin')
                        <td>
                            {{-- <form action="{{ url('tanaman/'.$data->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn-action btn-color-1" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                            </form> --}}
                            {{-- <form action="/tanaman/{{ $data->id }}/edit" method="POST"> --}}
                            <form action="/tanaman/{{ $data->id }}/edit" method="POST">
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
    </div>
    {{-- @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif --}}

    {{ $tanamans->links('vendor.pagination.custom') }}

@endsection