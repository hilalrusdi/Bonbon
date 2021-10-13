@extends('layout.reg')

        @section('reg')

        <div class="container_reg" >
            <div class="tittle_reg">Tambah Data {{ $tittle }}</div>
            <form action="/tanaman/tambah" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="nama" id="nama" value="{{old('nama')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Spesies </span>
                        <input type="text" name="spesies" id="spesies" value="{{old('spesies')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Asal</span>
                        <input type="text" name="asal" id="asal" value="{{old('asal')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat')}}" required>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        @endsection
                        
