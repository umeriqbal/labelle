@extends('layouts.master')

@section('title')
    Labelle Beauty Lounge
@endsection

@section('content')
    <section class="main__middle__container">
  <div class="row title__block">
    <div class="container text-center">
      <h2 class="page__title">Contact Us</h2>
      <span class="sep"></span>
      <p class="smaller">Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.</p>
    </div>
  </div>
  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3>Send us a message</h3>
          <hr>
          <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We would love to hear from you! Please fill out the form below so we may assist you.</p>
          <br />
          <p id="feedback"></p>
          <form role="form" id="contact-form" name="contact-form" method="post" action="" class="contact-form">
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Your Name: *</label>
              <input required type="text" class="form-control" id="name" name="name" placeholder="Your Name: *">
            </div>
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Email: *</label>
              <input required type="email" class="form-control" id="email" name="email" placeholder="Email: *">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail1">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject:">
            </div>
            <div class="form-group">
              <textarea required class="form-control" id="message" name="message" rows="5" placeholder="Message: *"></textarea>
            </div>
            <input id="submit-button" type="submit" class="btn btn-lg btn-info" value="Submit">
          </form>
        </div>
        <div class="col-md-4">
          <h3>Get in touch with us</h3>
          <hr>
          <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
          <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
          <p class="black-text"><span class="orange">Address:</span> 1-3 Bank Court, Hemel Hempstead, HP1 1BZ</p>
          <p class="black-text"><span class="orange">Telephone:</span> 0208 000 5555</p>
          <p class="black-text"><span class="orange">Email:</span> info@labellebeauty.co.uk</p>
           </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1235.0434989166345!2d-0.47335303743379636!3d51.749732711954344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876415f1789c009%3A0x5d641d4f003e87a7!2sHemel+Hempstead%2C+Hertfordshire+HP1+1BZ!5e0!3m2!1sen!2suk!4v1438112877195" width="1140" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
</section>
@endsection