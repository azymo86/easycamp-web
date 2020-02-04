@extends('layout-1.master')

@section('title', 'Inventory')

@section('head')
  {{-- Custom CSS --}}
  <style media="screen">
    .filter {
      padding:30px;
      text-align:right;
      display: flex;
    }
    .card-header {
      font-size: 15px;
      height: 65px;
    }
    .card-footer {
      height: 70px;
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
        <select class="custom-select">
          <option value="0">All</option>
          @for ($i=0; $i < $count; $i++)
            <option value="{{$id[$i]}}">{{$name[$i]}}</option>
          @endfor
        </select>
        <div>
          <button class="btn btn-success" onclick="filter()" name="filter">Filter</button>
        </div>
      </div>
    </div>

    @include('layout-1/breadcrumb')

    <!-- Portfolio Section -->
    <div id="items">
      <div class="row">
        @for ($i=0; $i < $count; $i++)
          <div id="item-{{$id[$i]}}" data-id="{{$id[$i]}}" class="col-lg-2 col-6 portfolio-item">
            <div class="card">
              <h6 class="card-header" name="title">{{$name[$i]}}</h6>
              <img class="card-img-top" name="image" src="{{$url_image[$i]}}" alt="">
              <div class="card-footer">
                <p class="align-self-center float-center" name="footerinfo">Rp {{$price[$i]}},- /night</p>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <img class="img-fluid rounded mb-4" src="upload/adventure-1.png" alt="" style="width: 100%;height:350px;">

    <!-- Call to Action Section -->
    @include('layout-1.contact')

  </div>
  <!-- /.container -->
@endsection

@section('script')
  <script type="text/javascript">
    function filter() {
      var selected = jQuery('#filter').find('select').val()
      console.log(selected);
    }
  </script>
@endsection
