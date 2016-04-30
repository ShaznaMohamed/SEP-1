@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Administrator Dashboard</span>
        </div>
      </div>
    </header>
    <main >
    </br>
      <div id="testimonials">
        <!-- Gets administrator pages as boxes and populates the page accordingly-->
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>User Management</h2>
                        <a href="adminusers" class="button"><span data-hover="User Management">User Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Testimonial Management</h2>
                        <a href="adminreviews" class="button"><span data-hover="Testimonial Management">Testimonial Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Email Management</h2>
                        <a href="admincontactus" class="button"><span data-hover="Email Management">Email Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>FAQ Management</h2>
                        <a href="adminfaq" class="button"><span data-hover="FAQ Management">FAQ Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Administrator Management</h2>
                        <a href="adminlist" class="button"><span data-hover="Administrator Management">Administrator Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Application Backup</h2>
                        <a href="adminbackup" class="button"><span data-hover="Application Backup">Application Backup</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Event Management</h2>
                        <a href="eventmanage" class="button"><span data-hover="Event Management">Event Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Dining Management</h2>
                        <a href="diningmanage" class="button"><span data-hover="Dining Management">Dining Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Menu Management</h2>
                        <a href="menudashboard" class="button"><span data-hover="Menu Management">Menu Management</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Gallery Management</h2>
                        <a href="upload" class="button"><span data-hover="Manage Pictures">Manage Pictures</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Specials</h2>
                        <a href="specadd" class="button"><span data-hover="Manage Specials">Manage Specials</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Manage Reservations</h2>
                        <a href="managereservation" class="button"><span data-hover="Manage Reservations">Manage Reservations</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Room Dashboard</h2>
                        <a href="roomdashboard" class="button"><span data-hover="Manage Reservations">Manage Reservations</span></a>
                    </div>
                </div>
            </figure>
            <figure class="cover">
              <div class="testimonial">
                    <div class="details">
                        <h2>Wedding Dashboard</h2>
                        <a href="weddingdashboard" class="button"><span data-hover="Manage Reservations">Manage Reservations</span></a>
                    </div>
                </div>
            </figure>
        </div>
    </main>
@endsection
