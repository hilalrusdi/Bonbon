@extends('layout.main')

@section('container')
    

    {{-- @if ($users->count()) --}}
    
    <div class="card_table">
        <h1 class="tittle_table">Tabel Karyawan</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                <form action="/user/create" class="">
                    @csrf
                    <button type="submit" class="btn-tambah flex">
                        <span>Tambah Akun</span>
                    </button>
                </form>
                @include('partial.search')
            </div>

        </div>
        <div class="content_karyawan">
            <table class="tabel_karyawan">
                <thead class="thead_karyawan">
                    <tr class="tr_karyawan">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="tbody_karyawan">
                    @foreach ($users as $user)
                        <tr class="tr_karyawan">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nik }}</td>
                            <td>{{ $user->born }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->tgl_kerja }}</td>
                            <td>
                                {{-- <form action="{{ url('user/'.$user->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-action btn-color-1" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                                </form> --}}
                                <form action="/user/{{ $user->id }}/edit" method="POST">
                                    @method('get')
                                    @csrf
                                    <button class="btn-action btn-color-2"><i class="fas fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif --}}

    {{ $users->links('vendor.pagination.custom') }}

@endsection