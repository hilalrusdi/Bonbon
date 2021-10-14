@extends('layout.reg')

        @section('reg')

        <div class="container_reg" >
            <div class="tittle_reg">Tambah Data {{ $tittle }}</div>
            <form action="/transaksi/tambah" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama Pembeli</span>
                        <input type="text" name="nama" id="nama" value="{{old('nama')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Tanggal Bayar </span>
                        <input type="date" name="tgl" id="tgl" value="{{old('tgl')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">No_hp</span>
                        <input type="text" name="no_hp" id="no_hp" value="{{old('no_hp')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Status </span>
                        <input type="text" name="status" id="status" value="{{old('status')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Keterangan </span>
                        <input type="text" name="ket" id="ket" value="{{old('ket')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Total </span>
                        <input type="text" name="total" id="total" value="{{old('total')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Company </span>
                        <select name="supplier_id" id="supplier_id">
                            @foreach ($supplier as $data)
                            <option value="{{ $data->id }}">{{ $data->company }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanaman </span>
                        <select name="tanaman_id" id="tanaman_id">
                            @foreach ($tanaman as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        @endsection
                        