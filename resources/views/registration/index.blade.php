@extends('layout.user')

        @section('user')
        <div class="container_reg">
            <div class="tittle_reg">Tambah Karyawan</div>
            <form action="/registration" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="name" id="name" required value="{{old('nama')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail"> NIK </span>
                        <input type="text" name="nik" id="nik" required value="{{old('nik')}}">
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Lahir </span>
                        <input type="date" name="born" id="born" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">No. Handphone </span>
                        <input type="text" name="no_hp" id="no_hp" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Tanggal Mulai Kerja </span>
                        <input type="date" name="tgl_kerja" id="tgl_kerja" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Password </span>
                        <input type="password" name="password" id="password" required>
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
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        @endsection