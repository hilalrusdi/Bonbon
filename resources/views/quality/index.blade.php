@extends('layout.main')

@section('container')


    {{-- @if ($transaksis->count()) --}}
    

    <div class="card_table pad-2">
        <h1 class="tittle_table h1">Tabel Quality</h1>
        <div class="card_table container1">
    
            <div class="card-2 m-1">
                <div class="content-1 font-0">
                    <div class="tittle-1 font-2">Indikator Bobot 1 [Akar]</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Indikator 1 </td>
                                <td><pre>   </pre></td>
                                <td>: Busuk</td>
                            </tr>
                            <tr>
                                <td>Indikator 2 </td>
                                <td><pre>   </pre></td>
                                <td>: Sedikit Busuk</td>
                            </tr>
                            <tr>
                                <td>Indikator 3 </td>
                                <td><pre>   </pre></td>
                                <td>: Standard</td>
                            </tr>
                            <tr>
                                <td>Indikator 4</td>
                                <td><pre>   </pre></td>
                                <td>: Segar</td>
                            </tr>
                            <tr>
                                <td>Indikator 5</td>
                                <td><pre>   </pre></td>
                                <td>: Segar dan Rimbun</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>


            <div class="card-2 m-1">
                <div class="content-1 font-0">
                    <div class="tittle-1 font-2">Indikator Bobot 2 [Daun]</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Indikator 1 </td>
                                <td><pre>   </pre></td>
                                <td>: Banyak Defects</td>
                            </tr>
                            <tr>
                                <td>Indikator 2 </td>
                                <td><pre>   </pre></td>
                                <td>: Sediit Defects</td>
                            </tr>
                            <tr>
                                <td>Indikator 3 </td>
                                <td><pre>   </pre></td>
                                <td>: Standard</td>
                            </tr>
                            <tr>
                                <td>Indikator 4</td>
                                <td><pre>   </pre></td>
                                <td>: Segar</td>
                            </tr>
                            <tr>
                                <td>Indikator 5</td>
                                <td><pre>   </pre></td>
                                <td>: Sangat Segar</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>

            <div class="card-2 m-1">
                <div class="content-1 font-0">
                    <div class="tittle-1 font-2">Indikator Bobot 3 [Batang]</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Indikator 1 </td>
                                <td><pre>   </pre></td>
                                <td>: Busuk</td>
                            </tr>
                            <tr>
                                <td>Indikator 2 </td>
                                <td><pre>   </pre></td>
                                <td>: Sedikit Busuk</td>
                            </tr>
                            <tr>
                                <td>Indikator 3 </td>
                                <td><pre>   </pre></td>
                                <td>: Standard</td>
                            </tr>
                            <tr>
                                <td>Indikator 4</td>
                                <td><pre>   </pre></td>
                                <td>: Segar</td>
                            </tr>
                            <tr>
                                <td>Indikator 5</td>
                                <td><pre>   </pre></td>
                                <td>: Sangat Segar</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>

        </div>

        <div class="card_table container1">

            <div class="card-3 mid">
                <div class="content-1 font-0">
                    <div class="tittle-1 font-2">Indikator Bobot 4 [Hama Hewan]</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Indikator 1 </td>
                                <td><pre>   </pre></td>
                                <td>: Bersih</td>
                            </tr>
                            <tr>
                                <td>Indikator 2 </td>
                                <td><pre>   </pre></td>
                                <td>: Sedikit Hama</td>
                            </tr>
                            <tr>
                                <td>Indikator 3 </td>
                                <td><pre>   </pre></td>
                                <td>: Lumayan banyak</td>
                            </tr>
                            <tr>
                                <td>Indikator 4</td>
                                <td><pre>   </pre></td>
                                <td>: Banyak</td>
                            </tr>
                            <tr>
                                <td>Indikator 5</td>
                                <td><pre>   </pre></td>
                                <td>: Sangat Banyak</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>

            <div class="card-3 mid">
                <div class="content-1 font-0">
                    <div class="tittle-1 font-2">Indikator Bobot 5 [Hama Fungi]</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Indikator 1 </td>
                                <td><pre>   </pre></td>
                                <td>: Bersih</td>
                            </tr>
                            <tr>
                                <td>Indikator 2 </td>
                                <td><pre>   </pre></td>
                                <td>: Sedikit Hama</td>
                            </tr>
                            <tr>
                                <td>Indikator 3 </td>
                                <td><pre>   </pre></td>
                                <td>: Lumayan banyak</td>
                            </tr>
                            <tr>
                                <td>Indikator 4</td>
                                <td><pre>   </pre></td>
                                <td>: Banyak</td>
                            </tr>
                            <tr>
                                <td>Indikator 5</td>
                                <td><pre>   </pre></td>
                                <td>: Sangat Banyak</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>

        </div>

        <div class="tambah_akun">
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
        @if(session()->has('delete'))
            @include('partial.alert')
        @endif
        @if(session()->has('unsuccess'))
            @include('partial.alert')
        @endif
        
            <div class="flexbox">
                <form action="/quality/create" class="">
                    @csrf
                    <button type="submit" class="btn-tambah flex">
                        <span>Tambah Data</span>
                    </button>
                </form>
                {{-- @include('partial.search') --}}
            </div>

        </div>
        <table class="tabel_karyawan">
            <thead class="thead_karyawan">
                <tr class="tr_karyawan">
                    <th>ID</th>
                    <th>Nama Tanaman</th>
                    <th>Akar</th>
                    <th>Daun</th>
                    <th>Batang</th>
                    <th>Hama Hewan</th>
                    <th>Hama Fungi</th>
                    <th>Total</th>
                    <th>Lolos</th>
                    <th>Dibuat tanggal</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody class="tbody_karyawan">
                @foreach ($qualities as $data)
                        <tr class="tr_karyawan">
                            
                            <td>{{ $data->id }} </td>
                            <td>{{ $data->tanaman->nama }}</td>
                            <td>{{ $data->bobot1 }}</td>
                            <td>{{ $data->bobot2 }}</td>
                            <td>{{ $data->bobot3 }}</td>
                            <td>{{ $data->bobot4 }}</td>
                            <td>{{ $data->bobot5 }}</td>
                            <td>{{ $data->total }}</td>
                            <td>
                                @if ($data->total >69)
                                    Lolos
                                @else
                                    Tidak Lolos
                                @endif
                            </td>
                            <td>{{ $data->created_at }}</td>
                            
                            
                            <td>
                                <form action="{{ url('quality/'.$data->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-action btn-color-1" onclick="return confirm('Ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                {{-- <form action="/transaksi/{{ $data->id }}/edit" method="POST">
                                    @method('put')
                                    @csrf
                                    <button class="btn-action"><i class="fas fa-edit"></i></button>
                                </form> --}}
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @else
    <h1 class="tittle_table">Page not Found</h1>
    @endif --}}

    {{ $qualities->links('vendor.pagination.custom') }}

@endsection