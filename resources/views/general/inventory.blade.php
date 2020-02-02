@extends('layout-1.master')

@section('title', 'Inventory')

@section('head')
  {{-- Custom CSS --}}
  <style media="screen">

  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-sm-6">
        <h1 class="my-4">Inventory List</h1>
      </div>
      <div class="col-sm-6" style="padding-top:30px;text-align:right;;">
        <select class="custom-select" name="filtername">
          <option value="">All</option>
          <option value="">Tenda</option>
        </select>
        <select class="custom-select" name="filtername">
          <option value="">All</option>
          <option value="">Tenda</option>
        </select>
        <button class="btn btn-success" name="filter">Filter</button>
      </div>
    </div>

    <!-- Portfolio Section -->
    <div name="items">
      <div class="row">
        @for ($i=1; $i <= 20; $i++)
          <div class="col-lg-2 col-sm-3 portfolio-item">
            <div class="card">
              <h6 class="card-header">Tenda Dome 4P</h6>
              <img class="card-img-top" src="upload/consina-magnum-4.jpeg" alt="">
              <div class="card-footer">
                <h6 class="align-self-center float-center">{{$i}}/20 item</h6>
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
