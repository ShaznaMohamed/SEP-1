@extends('layouts.adminmaster')
@section('maincontent')
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Wedding Hall Dashboard</span></h1>
            </div>
        </div>
    </header>
    <main >
        </br>
        <div id="testimonials">
            <figure class="cover">
                <div class="testimonial">
                    <div class="details">
                        <h2>Wedding Hall Features</h2>
                        <a href="adminweddingpage" class="button"><span data-hover="Manage Charges">Manage Charges</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
                <div class="testimonial">
                    <div class="details">
                        <h2>Wedding Hall Reservation</h2>
                        <a href="managereservation" class="button"><span data-hover="Manage Reservation">Manage Reservation</span></a>
                    </div>
                </div>
            </figure>

        </div>
    </main>
@endsection
