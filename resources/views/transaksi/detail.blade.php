@extends('layout.main')

@section('container')

<h1 class="tittle_table">Detail Data</h1>
<div class="card_table container1">
    
    <div class="card-1 m-1">
        <div class="content-1 font-1">
            <div class="tittle-1 font-2">Data Transaksi</div>
            <table>
                <tbody>
                    <tr>
                        <td>Nama Supplier </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->supplier->name }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Bayar </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->tgl }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Status Pemesanan</td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->status }}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->ket }}</td>
                    </tr>
                    <tr>
                        <td>Total Pembayaran</td>
                        <td><pre>   </pre></td>
                        <td>: Rp.{{ $transaksis->total }}</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>

    <div class="card-1 m-1">
        <div class="content-1 font-1">
            <div class="tittle-1 font-2">Data Supplier</div>
            <table>
                <tbody>
                    <tr>
                        <td>Nama Perusahaan </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->supplier->company }}</td>
                    </tr>
                    <tr>
                        <td>Nama Penanggungjawab </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->supplier->name }}</td>
                    </tr>
                    
                    <tr>
                        <td>Nomor Handphone </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->supplier->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Gabung </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->supplier->tgl_join }}</td>
                    </tr>
                    
                    
                </tbody>
                
            </table>
        </div>
    </div>

    
    
</div>


<div class="card_table container1 pad-2">
    <div class="card-1 m-1">
        <div class="content-1 font-1">
            <div class="pad-1">
                <div class="tittle-1 font-2">Data Tanaman</div>
                <table>
                    <tbody>
                        <tr>
                            <td>Nama Tanaman </td>
                            <td><pre>   </pre></td>
                            <td>: {{ $transaksis->tanaman->nama }}</td>
                        </tr>
                        <tr>
                            <td>Nama Spesies </td>
                            <td><pre>   </pre></td>
                            <td>: {{ $transaksis->tanaman->spesies }}</td>
                        </tr>
                        <tr>
                            <td>Asal Tanaman </td>
                            <td><pre>   </pre></td>
                            <td>: {{ $transaksis->tanaman->asal }}</td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
            <div class="tittle-1 font-2">Data Karyawan</div>
            <table>
                <tbody>
                    <tr>
                        <td>Nama Karyawan </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->user->name }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->user->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi </td>
                        <td><pre>   </pre></td>
                        <td>: {{ $transaksis->created_at }}</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>

    


    
    
</div>

    

@endsection