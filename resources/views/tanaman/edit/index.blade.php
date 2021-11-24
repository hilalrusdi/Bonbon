@extends('layout.reg')

        @section('reg')

        <div class="container_reg" >
            <div class="tittle_reg">edit Data {{ $tittle }}</div>
            {{-- <form action="{{route('tanaman.edit',$tanamen->id)}}" method="POST"> --}}
            <form action="{{ url('tanaman/'.$tanamen->id. '/edit') }}" method="POST">
                {{-- @method('put') --}}
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Nama </span>
                        <input type="text" name="nama" id="nama" value="{{old('nama', $tanamen->nama)}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> Spesies </span>
                        <input type="text" name="spesies" id="spesies" value="{{old('spesies', $tanamen->spesies)}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Asal</span>
                        <input type="text" name="asal" id="asal" value="{{old('asal', $tanamen->asal)}}" required>
                    </div>
                    <div class="input_reg">
                        <span class="detail">Alamat </span>
                        <input type="text" name="alamat" id="alamat" value="{{old('alamat', $tanamen->alamat)}}" required>
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Edit">
                </div>
            </form>
        
        </div>
        @endsection
                        
