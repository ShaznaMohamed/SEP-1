@extends('layouts.master')
@section('maincontent')

    <main>
    	<div class="centre">
            <div id="content">
                <section id="stats">
                  <h1 style="text-transform: paragraph;"> Error 404 </h1>
                  <h1 style="text-transform: paragraph;"> The page you are looking for is not available </h1>
                  <a href="{{ URL::previous() }}" class="button"><span data-hover="Go Back">Go Back</span></a>
                </section>
            </div>
        </div>
    </main>

@endsection
