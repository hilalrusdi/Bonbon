@extends('layout.form')

        @section('form')

        <div class="container_reg" >
            <div class="tittle_reg">Edit Data {{ $tittle }}</div>
            <form action="/transaksi/{{ $transaksis->id }}" method="post">
                @method('put')
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama Supplier</span>
                        <input type="text" name="nama" id="nama" value="{{old('nama', $transaksis->nama)}}" required> 
                    </div>
                    @error('nama')
                    <div class="error-1">kesalahan memasukkan nama</div>
                    @enderror

                    <div class="input_reg">
                        <span class="detail"> Tanggal Bayar </span>
                        <input type="date" name="tgl" id="tgl" value="{{old('tgl', $transaksis->tgl)}}" required>
                    </div>
                    @error('tgl')
                    <div class="error-1">kesalahan memasukkan tanggal</div>
                    @enderror

                    <div class="input_reg">
                        <span class="detail">No_hp</span>
                        <input type="text" name="no_hp" id="no_hp" value="{{old('no_hp', $transaksis->no_hp)}}" required>
                    </div>
                    @error('no_hp')
                    <div class="error-1">kesalahan memasukkan nomor hp</div>
                    @enderror

                    <div class="input_reg">
                        <span class="detail">Keterangan </span>
                        <input type="text" name="ket" id="ket" value="{{old('ket', $transaksis->ket)}}" required>
                    </div>
                    @error('ket')
                    <div class="error-1">kesalahan memasukkan ket</div>
                    @enderror

                    <div class="input_reg">
                        <span class="detail">Total </span>
                        <input type="text" name="total" id="total" value="{{old('total', $transaksis->total)}}" required>
                    </div>
                    @error('total')
                    <div class="error-1">kesalahan memasukkan total harga</div>
                    @enderror

                    <div class="input_reg select">
                        <span class="detail">Status </span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="status" id="status" class="standar-select">
                            @if(old('status', $transaksis->status) == 'lunas')
                            <option value="lunas" selected>lunas</option>
                            
                            <option value="belum lunas">belum lunas</option>
                            @else
                            <option value="lunas">lunas</option>
                            
                            <option value="belum lunas" selected>belum lunas</option>
                            @endif
                        </select>
                    </div>
                    @error('status')
                    <div class="error-1">kesalahan memasukkan status</div>
                    @enderror


                    <div class="input_reg">
                        <span class="detail">Company </span>
                        <select name="supplier_id" id="supplier_id" class="standar-select">
                            @foreach ($suppliers as $data)
                            @if(old('supplier_id', $transaksis->supplier_id) == $data->id)
                            <option value="{{ $data->id }}" selected>{{ $data->company }}</option>
                            @else
                            <option value="{{ $data->id }}">{{ $data->company }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    @error('supplier_id')
                    <div class="error-1">kesalahan memasukkan company</div>
                    @enderror

                    <div class="input_reg">
                        <span class="detail">Tanaman </span>
                        <select name="tanaman_id" id="tanaman_id" class="standar-select">
                            @foreach ($tanamans as $data)
                            @if(old('tanaman_id', $transaksis->tanaman_id) == $data->id)
                            <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                            @else
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    @error('tanaman_id')
                    <div class="error-1">kesalahan memasukkan tanaman</div>
                    @enderror

                    {{-- @error('user_id')
                    <div class="error-1">user error</div>
                    @enderror

                    @error('slug')
                    <div class="error-1">slug error</div>
                    @enderror --}}
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Simpan">
                </div>
            </form>
        </div>

        @endsection
                        
