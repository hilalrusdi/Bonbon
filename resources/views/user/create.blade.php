@extends('layout.form')

        @section('form')
        <div class="container_reg">
            <div class="tittle_reg">Tambah Karyawan</div>
            <form action="/user" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="name" id="name" required value="{{old('name')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Username </span>
                        <input type="text" name="username" id="username" required value="{{old('username')}}">
                        @error('username')
                        <div class="error-1">Username sudah digunakan di akun lain</div>
                        @enderror
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Lahir </span>
                        <input type="date" name="born" id="born" required value="{{old('born')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">No. Handphone </span>
                        <input type="text" name="no_hp" id="no_hp" required value="{{old('no_hp')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" required value="{{old('alamat')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Mulai Kerja </span>
                        <input type="date" name="tgl_kerja" id="tgl_kerja" required value="{{old('tgl_kerja')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Password </span>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                        <div class="error-1">karakter password minimal 5 huruf</div>
                        @enderror
                    </div>
                    
                    
                </div>
                <!-- <div class="jenis_kelamin">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <span class="tittle_kelamin">Jenis Kelamin</span>
                        <div class="kategori">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">laki-laki</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Perempuan</span>
                            </label>
                        </div>
                </div> -->
                <div class="button">
                    <input type="submit" name="submit" value="Simpan">
                </div>
            </form>
        
        </div>
        @endsection