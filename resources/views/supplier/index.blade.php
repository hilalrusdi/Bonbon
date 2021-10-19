@extends('layout.main')

@section('container')

    @if ($suppliers->count())

    <div class="card_table">
        <h1 class="tittle_table">Tabel Supplier</h1>
        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
            @include('partial.alert')
        @endif
            <div class="flexbox">
                

                <form action="/supplier/tambah" class="">
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
                    <th>ID</th>
                    <th>Company</th>
                    <th>Person In Charge</th>
                    <th>Nomor Hp</th>
                    <th>Alamat</th>
                    <th>Tanggal Gabung</th>
                    <th>Action</th>
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
                        <td>
                            <form action="{{ url('supplier/'.$supplier->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn-action" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <form action="/supplier/{{ $supplier->id }}/edit" method="POST">
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

    {{ $suppliers->links('vendor.pagination.custom') }}


@endsection