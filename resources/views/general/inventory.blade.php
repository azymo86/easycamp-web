@extends('layout-1.master')

@php
    // REST APIs
    // $sumber = 'https://private-ba966-aminnur.apiary-mock.com/coba';
    // $konten = file_get_contents($sumber);
    // $data   = json_decode($konten, true);
    // dd($data['data'][1]['nama'])
@endphp

@section('title', 'Inventory')

@section('head')
  {{-- Custom CSS --}}
  <style media="screen">
    .filter {
      padding-top:30px;
      text-align:right;
      display: flex;
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-sm-6">
        <h1 class="my-4">Inventory List</h1>
      </div>
      <div id="filter" class="filter col-sm-6">
        <select class="custom-select" name="condition">
          <option value="0">All</option>
          <option value="1">Available</option>
        </select>
        <select class="custom-select" name="itemname">
          <option value="0">All</option>
          <option value="1">Tenda</option>
          <option value="2">Flysheet</option>
          <option value="3">Carrier</option>
          <option value="4">Mattress</option>
          <option value="5">Lamp</option>
          <option value="6">Knife</option>
        </select>
        <div>
          <button class="btn btn-success" name="filter">Filter</button>
        </div>
      </div>
    </div>

    <!-- Portfolio Section -->
    <div id="items">
      <div class="row">
        @for ($i=1; $i <= 20; $i++)
          <div class="col-lg-2 col-sm-3 portfolio-item">
            <div class="card">
              <h6 class="card-header" name="title">Tenda Dome 4P</h6>
              <img class="card-img-top" name="image" src="upload/consina-magnum-4.jpeg" alt="">
              <div class="card-footer">
                <h6 class="align-self-center float-center" name="footerinfo">{{$i}}/20 item</h6>
              </div>
            </div>
          </div>
        @endfor
      </div>

    </div>
    <!-- /.row -->

    <hr>

    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Contact Us</a>
      </div>
    </div>

  </div>
  <!-- /.container -->
@endsection

@section('script')
  <script type="text/javascript">

  </script>
@endsection
