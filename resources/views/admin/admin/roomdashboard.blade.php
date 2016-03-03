@extends('layouts.adminmaster')
@section('maincontent')
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Room Dashboard</span></h1>
            </div>
        </div>
    </header>
    <main >
        </br>
        <div id="testimonials">
            <figure class="cover">
                <div class="testimonial">
                    <div class="details">
                        <h2>Rooms & Suites Features</h2>
                        <a href="adminroom" class="button"><span data-hover="Manage Facilities">Manage Facilities</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
                <div class="testimonial">
                    <div class="details">
                        <h2>Room Reservation</h2>
                        <a href="roomconfirm" class="button"><span data-hover="Manage Reservation">Manage Reservation</span></a>
                    </div>
                </div>
            </figure>

        </div>
    </main>
@endsection
