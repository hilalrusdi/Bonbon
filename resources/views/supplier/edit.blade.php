@extends('layout.form')

        @section('form')

        <div class="container_reg" >
            <div class="tittle_reg">Mengubah Data {{ $tittle }}</div>
            <form action="/supplier/{{ $suppliers->id }}" method="post">
                @method('put')
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Company </span>
                        <input type="text" name="company" id="company" value="{{old('company', $suppliers->company )}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Nama penanggung jawab </span>
                        <input type="text" name="name" id="name" value="{{old('name', $suppliers->name)}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">No. Handphone </span>
                        <input type="text" name="no_hp" id="no_hp" value="{{old('no_hp', $suppliers->no_hp)}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat', $suppliers->alamat)}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Bergabung </span>
                        <input type="date" name="tgl_join" id="tgl_join" value="{{old('tgl_join', $suppliers->tgl_join)}}" required>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Simpan">
                </div>
            </form>
        
        </div>
        @endsection
                        
