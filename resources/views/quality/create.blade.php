@extends('layout.form')

        @section('form')

        <div class="container_reg" >
            <div class="tittle_reg">{{ $tittle }} Check</div>
            <form action="/quality" method="post">
                @csrf
                <div class="user_reg">

                    <div class="input_reg">
                        <span class="detail">Tanaman </span>
                        <select name="tanaman_id" id="tanaman_id" class="standar-select">
                            @foreach ($tanamans as $data)
                            @if(old('tanaman_id') == $data->id)
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

                    <div class="input_reg select">
                        <span class="detail">Bobot 1</span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="bobot1" id="bobot1" class="standar-select">
                            <option value=1 selected>1</option>
                            <option value=2 selected>2</option>
                            <option value=3 selected>3</option>
                            <option value=4 selected>4</option>
                            <option value=5 selected>5</option>
                        </select>
                    </div>
                    @error('bobot1')
                    <div class="error-1">kesalahan memasukkan bobot1</div>
                    @enderror

                    <div class="input_reg select">
                        <span class="detail">Bobot 2</span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="bobot2" id="bobot2" class="standar-select">
                            <option value=1 selected>1</option>
                            <option value=2 selected>2</option>
                            <option value=3 selected>3</option>
                            <option value=4 selected>4</option>
                            <option value=5 selected>5</option>
                        </select>
                    </div>
                    @error('bobot2')
                    <div class="error-1">kesalahan memasukkan bobot2</div>
                    @enderror

                    <div class="input_reg select">
                        <span class="detail">Bobot 3</span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="bobot3" id="bobot3" class="standar-select">
                            <option value=1 selected>1</option>
                            <option value=2 selected>2</option>
                            <option value=3 selected>3</option>
                            <option value=4 selected>4</option>
                            <option value=5 selected>5</option>
                        </select>
                    </div>
                    @error('bobot3')
                    <div class="error-1">kesalahan memasukkan bobot3</div>
                    @enderror

                    <div class="input_reg select">
                        <span class="detail">Bobot 4</span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="bobot4" id="bobot4" class="standar-select">
                            <option value=1 selected>1</option>
                            <option value=2 selected>2</option>
                            <option value=3 selected>3</option>
                            <option value=4 selected>4</option>
                            <option value=5 selected>5</option>
                        </select>
                    </div>
                    @error('bobot4')
                    <div class="error-1">kesalahan memasukkan bobot4</div>
                    @enderror

                    <div class="input_reg select">
                        <span class="detail">Bobot 5</span>
                        {{-- <input type="text" name="status" id="status" value="{{old('status')}}" required> --}}
                        <select name="bobot5" id="bobot5" class="standar-select">
                            <option value=1 selected>1</option>
                            <option value=2 selected>2</option>
                            <option value=3 selected>3</option>
                            <option value=4 selected>4</option>
                            <option value=5 selected>5</option>
                        </select>
                    </div>
                    @error('bobot5')
                    <div class="error-1">kesalahan memasukkan bobot5</div>
                    @enderror

                    
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Hasil">
                </div>
            </form>
        </div>

        <!-- <script>
            const nama = document.querySelector('#nama');
            const slug = document.querySelector('#slug');

            nama.addEventListener('change', function(){
                fetch('/transaksi/tambah?nama=' + nama.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            })
        </script> -->

        @endsection
                        
