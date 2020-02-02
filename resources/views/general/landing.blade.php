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
      <div class="see-more" onclick="window.location='#'">
        See More
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

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
    console.log('^_^');
  </script>
@endsection
