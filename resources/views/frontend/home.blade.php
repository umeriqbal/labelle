@extends('layouts.master')

@section('title')
    Labelle Beauty Lounge
@endsection

@section('content')
    <section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item"> <img data-src="{{ URL::asset('images/slider/slider.jpg') }}" alt="First slide" src="{{ URL::asset('images/slider/slider.jpg') }}">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="">A relaxing environment</h1>
            <p> Environment conducive to giving a relaxing and a professional service. </p>
            
          </div>
        </div>
      </div>
      <div class="item"> <img data-src="{{ URL::asset('images/slider/slider1.jpg') }}" alt="Second slide" src="{{ URL::asset('images/slider/slider1.jpg') }}">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="">Full-service Salon in Hemel Hempstead</h1>
            <p>La Belle Beauty Lounge is a full-service beauty salon dedicated to providing high customer satisfaction by rendering excellent service and quality products.</p>
            <p><!--<a class="btn btn-default btn-lg" href="/about-us" role="button">get started</a>--><a class="btn btn-default btn-lg" href="/about-us" role="button">read more</a></p>
          </div>
        </div>
      </div>
      <div class="item active"> <img data-src="{{ URL::asset('images/slider/slider2.jpg') }}" alt="Third slide" src="{{ URL::asset('images/slider/slider2.jpg') }}">
        <div class="container">
          <div class="carousel-caption">
            <h1>50% off on all beauty treatments</h1>
            <p>La Belle Beauty salon is dedicated to helping you feel rejuvenated and beautiful from head to toe.</p>
            <p><!--<a class="btn btn-default btn-lg" href="/prices" role="button">get started</a>--><a class="btn btn-default btn-lg" href="/prices" role="button">read more</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
<!--end of slider section-->
<section class="main__middle__container homepage">
  <div class="row text-center no-margin nothing">
    <div class="container headings">
      <h1 class="page_title">Shopping at Marlowes? Come and visit us.</h1>
      <div class="seper"></div>
      <p>We are a young, enthusiastic team of beauty therapists with a combined experience of over 10 years. La Balle Beauty Lounge is an upscale, full-service beauty salon offering a wide range of services incorporating all your beauty needs under one roof. </p>
      <p></p>
      <br />
    </div>
  </div>
  <div class="row three__blocks text-center no_padding no-margin">
    <div class="container"> <img src="{{ URL::asset('images/icons/service.png') }}" alt="services" class="absolute__icon">
      <h2 class="page__title">our SERVICES</h2>
      <div class="seper"></div>
      <p class="small-paragraph">Bringing out the beauty within.</p>
      <div class="col-md-4">
        <h3><a href="/waxing">Waxing treatments </a></h3>
        <img src="{{ URL::asset('images/content__images/img1.jpg') }}" alt="image" class="img-responsive img-rounded">
        <p>We have spent years on perfecting the technique to ensure threading and waxing is as pain free and accurate as possible. </p>
        <p><a class="btn btn-info btn-md" href="/waxing" role="button">Learn more</a> 
      </div>
      <div class="col-md-4 middle">
        <h3><a href="/facials">Facials</a></h3>
        <img src="{{ URL::asset('images/content__images/img2.jpg') }}" alt="image" class="img-responsive img-rounded">
        <p><a href="">Elemis </a> professional therapies are world renowned for their efficacy, results and powerful massage sequences.</p>
        <p><a class="btn btn-info btn-md" href="/facials" role="button">Learn more</a> 
      </div>
      <div class="col-md-4">
        <h3><a href="/manicure-and-pedicure">Manicure &amp; Pedicure </a></h3>
        <img src="{{ URL::asset('images/content__images/img3.jpg') }}" alt="image" class="img-responsive img-rounded">
        <p>Nothing says you are well groomed like good clean finger and toe nails. It is the simplest way to make an impression. </p>
        <p><a class="btn btn-info btn-md" href="/manicure-and-pedicure" role="button">Learn more</a> 
      </div>
    </div>
  </div>
  
  <div class="row grey-info-block text-center">
    <div class="container"> <img src="{{ URL::asset('images/icons/whatwedo.png') }} " alt="what_we_do" class="absolute__icon">
      <h2 class="page__title">Relax &amp; enjoy</h2>
      <div class="seper"></div>
      <p class="small-paragraph">What better way to treat yourself?</p>
      <div class="col-md-6">
        <h3>Swedish massage</h3>
        <img src="{{ URL::asset('images/content__images/image-massage.jpg') }}" alt="pic" class="img-rounded img-responsive" id="picture">
        <p>Swedish massages are some of the most popular massage treatments here in our Hemel salon. They act to relax and restore your mind and body balance.</p>
        <p><a class="btn btn-info btn-md" href="/massage-services" role="button">Learn more</a></p>
      </div>
      <div class="col-md-6">
        <h3>HD Brows</h3>
        <img src="{{ URL::asset('images/content__images/pic2.jpg') }}" alt="pic" class="img-rounded img-responsive">
        <p>The celebrity eyebrow look is now within your reach. Getting HD brows involves a seven step shaping treatment. At the end of it you will have beautifully defined, groomed brows, fit for a Nollywood Princess or Hollywood star.</p>
        <p><a class="btn btn-info btn-md" href="/eye-treatments" role="button">Learn more</a></p>
      </div>
    </div>
  </div>
</section>
@endsection