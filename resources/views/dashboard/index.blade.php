@extends('layout.main')

@section('container')
    <div class="card_table pad-2">
      <h1 class="tittle_table h1">Dashboard</h1>
        @can('admin')
        <h2 class="text-center">Login as Admin</h2>
        @endcan
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<div class="cards">
  <div class="card">
    <img src="https://pixabay.com/get/gd07cd4149b23b095707d5fba61d20da60a95710051f517ba93cfdbd681ae96aecda433e99279d06b3a29801602184477f0e8cb7fbebd221b9fd236ca976bb064_1920.jpg" alt="">
    <h2 class="card-title"><a href="/quality">Quality Check</a></h2>
    
  </div>
  <div class="card">
    <img src="https://pixabay.com/get/g63bc1df7d379b42030bb45ccea7019783e44eb3f909feb7360c5dc163e1b7fbe3875cf4b2bf66c5ef2e17b22b9450fe74504c8b691e728a67bb89365ad5122c9_1920.jpg" alt="">
    <h2 class="card-title"><a href="/transaksi">Transaksi</a></h2>
    
  </div>
  <div class="card">
    <img src="https://pixabay.com/get/g05a0b8e165c645e2d132e0ff91840e6594fe88e280880152c7c11320d3cb0ec75db2a30b3907658b4527c21261c46de4f8f81d49aec2edea0949ca04cd97f043_1920.jpg" alt="">
    <h2 class="card-title"><a href="/tanaman">Tanaman</a></h2>
    
  </div>

  @can('admin')
  <div class="card">
    <img src="https://pixabay.com/get/gf61e00f39cfb8acb68451852ee62c3e52d2a32e488a3f7d4b3ee292d474bf7c27e5f1911ca218679af616dec4dac4391641f0c088dd3ac80718aabc23fb38545_1280.png" alt="">
    <h2 class="card-title"><a href="/user">Karyawan</a></h2>
    
  </div>

  <div class="card">
    <img src="https://pixabay.com/get/gcdf90efc09bb7f2a4cabcdc419a8bf8de26c53b4f9e9dfe43d7cc7c54d6c6c7aa3ce81939d236bf05fe9961ecf42a9c191e9026982a5790c9f185ccd35e15477_1280.png" alt="">
    <h2 class="card-title"><a href="/supplier">Supplier</a></h2>
    
  </div>
  @endcan

</div>
</div>



@endsection
