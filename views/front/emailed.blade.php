@extends('front/layout')

@section('title', 'Emailed')

@section('content')

<div class="container">
    <!-- HERO SECTION-->
    <section class="py-5">
        <div class="row">
            <h2 class="h5 text-center text-uppercase mb-4">We emailed your invoice. Please check it in your inbox!</h2>
        </div>
    </section>

    <!-- SERVICES-->
    @component('front/services') @endcomponent
</div>

@endsection