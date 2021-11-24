@extends('layout.form')

        @section('form')

        <div class="container_reg" >
            <div class="tittle_reg">Tambah Data {{ $tittle }}</div>
            <form action="/supplier" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Company </span>
                        <input type="text" name="company" id="company" value="{{old('company')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Nama penanggung jawab </span>
                        <input type="text" name="name" id="name" value="{{old('name')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">No. Handphone </span>
                        <input type="text" name="no_hp" id="no_hp" value="{{old('no_hp')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Bergabung </span>
                        <input type="date" name="tgl_join" id="tgl_join" value="{{old('tgl_join')}}" required>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        @endsection
                        
