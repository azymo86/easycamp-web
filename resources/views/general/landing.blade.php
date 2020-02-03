@extends('layout-1.master')

@php
    // REST APIs
    // $sumber = 'https://private-ba966-aminnur.apiary-mock.com/coba';
    // $konten = file_get_contents($sumber);
    // $data   = json_decode($konten, true);
    // dd($data['data'][1]['nama'])
@endphp

@section('title', 'Home')

@section('head')
  {{-- Custom CSS --}}
  <style media="screen">
  .text-left {
    text-align:left;
  }

  .see-more {
    cursor: pointer;
    text-align: center;
    margin-bottom: 50px;
    background-color: blanchedalmond;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 8px;
    color: #212529;
  }
  </style>
@endsection

{{-- Header Page --}}
@include('layout-1.header-page')

@section('content')
  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Available for rent</h1>

    <!-- Portfolio Section -->
    <div name="items">
      <div class="row">
        @for ($i=1; $i <= 6; $i++)
          <div class="col-lg-4 col-sm-4 portfolio-item">
            <div class="card">
              <h5 class="card-header">Tenda Dome 4P</h5>
              <img class="card-img-top" src="upload/consina-magnum-4.jpeg" alt="">
              <div class="card-footer">
                <div class="row">
                  <h6 class="align-self-center col-6">{{$i}} item</h6>
                  <button type="button" class="btn btn-primary float-right col-6" onclick="window.location='#'">Get Rent</button>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>

      {{-- See More --}}
      <div class="see-more" onclick="window.location='/inventory'">
        See More
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Why rent us?</h2>
        <p>Many benefits you get if you rent with us:</p>
        <ul>
          <li>You can order in advance for <b>1 month</b></li>
          <li>If cancel, the rent can be <b>returned</b></li>
          <li>The rental process is <b>very easy</b></li>
          <li>Wherever you can order</li>
        </ul>
        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="upload/adventure.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <!-- Call to Action Section -->
    @include('layout-1.contact')

  </div>
  <!-- /.container -->
@endsection

@section('script')
  <script type="text/javascript">
    console.log('^_^');
  </script>
@endsection
