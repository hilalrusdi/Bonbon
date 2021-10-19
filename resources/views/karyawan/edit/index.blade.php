@extends('layout.reg')

        @section('reg')
        <div class="container_reg">
            <div class="tittle_reg">Tambah Karyawan</div>
            <form action="/registration" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="name" id="name" required value="{{old('name', $users->name)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail"> NIK </span>
                        <input type="text" name="nik" id="nik" required value="{{old('nik', $users->NIK)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Lahir </span>
                        <input type="date" name="born" id="born" required value="{{old('born', $users->born)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">No. Handphone </span>
                        <input type="text" name="no_hp" id="no_hp" required value="{{old('no_hp', $users->no_hp)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" required value="{{old('alamat', $users->alamat)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Mulai Kerja </span>
                        <input type="date" name="tgl_kerja" id="tgl_kerja" required value="{{old('tgl_kerja', $users->tgl_kerja)}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Password </span>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                        <div class="error-1">karakter password minimal 5 huruf</div>
                        @enderror
                    </div>
                    
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        @endsection