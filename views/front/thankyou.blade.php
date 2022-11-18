@extends('front/layout')

@section('title', 'Thank you')

@section('content')

<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5">
    <div class="row">
        <h2 class="h5 text-center text-uppercase mb-4" style="color:cadetblue">
          Your order is on it's way.
        </h2>
        <div style="max-width: 500px;margin: 0 auto;">
          <a class="btn btn-dark btn-sm px-2" style="
            width: 195px;
            background-color: cadetblue;
            box-shadow: 2px 4px 3px #818181;
            border-radius: 5px;
            border: 0px;
            padding: 9px 0 7px 0;
            margin-right:15px;
          " href="/invoice" target="_blank">
          DOWNLOAD INVOICE
          </a>
          <a class="btn btn-dark btn-sm px-2" style="
            width: 195px;
            background-color: rgb(60, 121, 123);
            box-shadow: 2px 4px 3px #818181;
            border-radius: 5px;
            border: 0px;
            padding: 9px 0 7px 0;
          " href="/email-invoice">
          EMAIL INVOICE
          </a>
        </div>
    </div>
  </section>

  <!-- SERVICES-->
  @component('front/services') @endcomponent
</div>

@endsection