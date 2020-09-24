@extends('layouts.tampil')

@section('isi')


   <link rel="stylesheet" href="{{asset('awal/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('awal/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('awal/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('awal/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('awal/css/aos.cs')}}s">

    <link rel="stylesheet" href="{{asset('awal/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('awal/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('awal/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('awal/fonts/fontawesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('awal/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('awal/css/style.css')}}">

<style>
    .container{
        margin-top:-10%;
        margin-left:3%;
    }
</style>

<div class="section"  data-aos="fade-up">
          <div class="container">
            <div class="row">

              <div class="ftco-46">
                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                  <div class="ftco-46-image" style="background-image: url(awal/images/img_1.jpg);"></div>
                  <div class="ftco-46-text ftco-46-arrow-left">
                    <h4 class="ftco-46-subheading">Vegies</h4>
                    <h3 class="ftco-46-heading">Beef Empanadas</h3>
                    <p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="" data-toggle="modal" data-target="#modalvidio" class="btn-link">Lihat video <span class="ion-android-arrow-forward"></span></a></p>
                  </div>
                  <div class="ftco-46-image" style="background-image: url(awal/images/img_2.jpg);"></div> 
                </div>

                
              </div>

            </div>
          </div>
</div> <!-- .section -->

    <div class="modal fade" id="modalvidio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Starbhak Resto</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <video width="450" controls >
                    <source src="{{asset('gambar/tips1.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
        </div>
      </div>
    </div>
  </div>
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff7a5c"/></svg></div>

<script src="{{asset('awal/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('awal/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('awal/js/popper.min.js')}}"></script>
<script src="{{asset('awal/js/bootstrap.min.js')}}"></script>
<script src="{{asset('awal/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('awal/js/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('awal/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('awal/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('awal/js/jquery.stellar.min.js')}}"></script>

<script src="{{asset('awal/js/jquery.easing.1.3.js')}}"></script>    

<script src="{{asset('awal/js/aos.js')}}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

<script src="{{asset('awal/js/main.js')}}"></script>
@endsection