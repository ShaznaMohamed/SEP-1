@extends('layouts.master')
@section('maincontent')

    <main>
    	<div class="centre">
            <div id="content">
                <section id="stats">
                  <h1 style="text-transform: paragraph;"> Error 403 </h1>
                  <a href="{{ URL::previous() }}" class="button"><span data-hover="Go Back">Go Back</span></a>
                </section>
            </div>
        </div>
    </main>

@endsection
