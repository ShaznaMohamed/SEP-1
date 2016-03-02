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
                        <a href="admintestimonials" class="button"><span data-hover="Testimonial Management">Testimonial Management</span></a>
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

        </div>
    </main>
@endsection
