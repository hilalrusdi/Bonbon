@extends('layout.main')

@section('container')
    <div class="card_table">
        <h1 class="tittle_table">Tabel Karyawan</h1>
        @if(session()->has('success'))
            @include('partial.alert')
        @endif
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
                <tr class="tr_karyawan">
                    <td>1</td>
                    <td>Hilal</td>
                    <td>3515008</td>
                    <td>31/08/2001</td>
                    <td>089457234</td>
                    <td>Sda</td>
                    <td>08/09/2020</td>
                </tr>
                <tr class="tr_karyawan">
                    <td>1</td>
                    <td>Hilal</td>
                    <td>3515008</td>
                    <td>31/08/2001</td>
                    <td>089457234</td>
                    <td>Sda</td>
                    <td>08/09/2020</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection