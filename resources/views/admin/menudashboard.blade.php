@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Menu Dashboard</span>
        </div>
      </div>
    </header>
    <main >
    </br>
      <div id="testimonials">
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Breakfast Menu</h2>
                        <a href="menueditb" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Lunch Menu</h2>
                        <a href="menueditl" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Dinner Menu</h2>
                        <a href="menueditd" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Non-Alcohol Drinks Menu</h2>
                        <a href="menueditn" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Coffee Menu</h2>
                        <a href="menueditc" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Alcohol Drinks Menu</h2>
                        <a href="menuedita" class="button"><span data-hover="Edit">Edit</span></a>
                    </div>
                </div>
            </figure>


        </div>
    </main>
@endsection
