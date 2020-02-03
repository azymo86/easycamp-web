@extends('layout-1.master')

@php
    // REST APIs
    // $sumber = 'https://private-ba966-aminnur.apiary-mock.com/coba';
    // $konten = file_get_contents($sumber);
    // $data   = json_decode($konten, true);
    // dd($data['data'][1]['nama'])
@endphp

@section('title', 'Contact Us')

@section('head')
  {{-- Custom CSS --}}
  <style media="screen">
    .card {
      cursor:pointer;
      border-radius: 10%;
    }
    .card:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>Feel free to </small>
      contact us
    </h1>

    @include('layout-1/breadcrumb')

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.025941861728!2d107.64716039596209!3d-6.947413274136932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81567859373%3A0x989764bf567e9250!2sJl.%20Cijawura%20Cirang%20II%2F2%20No.6%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sen!2sid!4v1580706243259!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
          St. Cijawura Cirang II/2 No.6 <br>
          Bandung, Jawa Barat (40286) <br>
          Indonesia
        </p>
        <p>
          <i class="fa fa-phone-square" aria-hidden="true"></i>
          (123) 456-7890
        </p>
        <p>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <a href="mailto:name@example.com">name@example.com</a>
        </p>
        <p>
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          Monday - Friday: 9:00 AM to 8:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <h3>Send us a Message</h3>
    <!-- Card Icons Section -->
    <div class="row">
      {{-- <div class="col-sm-2"></div> --}}
      <div class="col-lg-2 col-4" onclick="window.location='mailto:name@example.com'">
        <div class="card h-100">
          <div class="card-body">
            <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/281/281769.png" alt="">
            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-4" onclick="window.open('https://api.whatsapp.com/send?phone=628123456789&text=Halo,%20mau%20sewa%20peralatan%20gan.')">
        <div class="card h-100">
          <div class="card-body">
            <img class="card-img-top" src="https://lh4.googleusercontent.com/proxy/QodyiymuCVyl85KcaRS86bc4v-viP3yJKPdiIRMZqpuGPusruEY69FXV4a-ubT2uivPXagmyIdiN_ZJ0UiTq5vp2fZOqnBj9VqsemsNEb4uNanzd091TD6wYzMV13w" alt="">
            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-4" onclick="window.open('https://www.instagram.com/')">
        <div class="card h-100">
          <div class="card-body">
            <img class="card-img-top" src="https://pngimg.com/uploads/instagram/instagram_PNG11.png" alt="">
            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Form -->
    <div class="row">
      <div class="col-lg-8 mb-4">
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

@section('script')
  <script type="text/javascript">

  </script>
@endsection
