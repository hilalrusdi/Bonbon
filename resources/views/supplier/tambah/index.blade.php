<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="{{ asset('css/what.css') }}" rel="stylesheet" type="text/css" >
    <title>{{$tittle}} | Bonbon</title>
</head>
    <body>

        <div class="container_reg" >
            <div class="tittle_reg">Tambah Data</div>
            <form action="/supplier/reg" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Company </span>
                        <input type="text" name="company" id="company" value="{{old('company')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail"> name </span>
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
                        
            
    </body>
</html>
