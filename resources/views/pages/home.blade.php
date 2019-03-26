@extends('layouts.main')

@push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
@endpush

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
@endpush

@section('content')
  <div class="hero">
    <div class="hero-content">
      <h1 class="hero-title">Virtual Alaska</h1>
      <p>Coming Soon, Let's fly somewhere!</p>

      <a href="/about">Learn More</a>
      <a href="/register">Sign Up</a>
    </div>
  </div>

<!-- features -->
	<section class="site-section">
	<div class="site-section-inside">
		<div class="section-header">
			<h2>Key Features</h2>
		</div>

		<div class="feature-box">
			<img src="{{ asset('img/vASA-plane.png')}}" alt="Aircraft and Routes">
			<h5>Aircraft and Routes</h5>
			<p>So easy a toddler can use it!</p>
		</div>

		<div class="feature-box">
			<img src="{{ asset('img/vASA-gears.png')}}" alt="Latest Technology">
			<h5>Latest Technology</h5>
			<p>Virtual Alaska Air is built on the latest technology, including SmartCARS and VAOS. This provides us a long term platform that can grow to meet all of our needs.</p>
		</div>

		<div class="feature-box">
			<img src="{{ asset('img/vASA-globe.png')}}" alt="Flexibility of Flying">
			<h5>Flexibility of Flying</h5>
			<p>Whether you want longer transcon flights, or just short hops around the Western U.S. and Alaska we have you covered. </p>
		</div>
	</div>
	</section>
@endsection
