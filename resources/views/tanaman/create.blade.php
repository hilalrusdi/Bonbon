@extends('layout.form')

        @section('form')

        <div class="container_reg" >
            <div class="tittle_reg">Tambah Data {{ $tittle }}</div>
            <form action="/tanaman" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="nama" id="nama" value="{{old('nama')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Spesies </span>
                        <input type="text" name="spesies" id="spesies" value="{{old('spesies')}}" required>
                        @error('spesies')
                        <div class="error-1">Nama Spesies sudah ada</div>
                        @enderror
                    </div>
                    

                    <div class="input_reg">
                        <span class="detail">Asal</span>
                        <input type="text" name="asal" id="asal" value="{{old('asal')}}" required>
                    </div>
                </div>

                <div class="tittle_reg">Bobot Positif Tanaman</div>
                @if(session()->has('error_cek'))
                <div class="error-1">Bobot Positif harus berjumlah 100</div>
                @endif
                <div class="user_reg">
                    
                    <div class="input_reg">
                        
                        <span class="detail">Bobot 1 (Kesehatan Akar)</span>
                        <input type="number" name="limit1" id="limit1" value="{{old('limit1')}}" required>
                        
                    </div>
                    <div class="input_reg">
                        <span class="detail">Bobot 2 (Kesehatan Daun)</span>
                        <input type="number" name="limit2" id="limit2" value="{{old('limit2')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Bobot 3 (Kesehatan Batang)</span>
                        <input type="number" name="limit3" id="limit3" value="{{old('limit3')}}" required>
                    </div>
                    
                </div>

                <div class="tittle_reg">Bobot Negatif Tanaman</div>
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Bobot 4 (Hama Hewan)</span>
                        <input type="number" name="limit4" id="limit4" value="{{old('limit4')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Bobot 5 (Hama Fungi)</span>
                        <input type="number" name="limit5" id="limit5" value="{{old('limit5')}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Lolos</span>
                        <input type="number" name="lolos" id="lolos" value="{{old('lolos')}}" required>
                    </div>
                </div>
                   
                
                    
                
                <div class="button">
                    <input type="submit" name="submit" value="Tambah">
                </div>
            </form>
        
        </div>
        
        @endsection
                        
