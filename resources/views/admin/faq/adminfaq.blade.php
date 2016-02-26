@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>FAQ</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">                
                <a href="faqadd" class="button" id="faqpop"><span data-hover="Add new FAQ">Add new FAQ</span></a>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                    </tr>
                    @foreach($faq as $faqs)
                    <tr>
                        <td>{{ $faqs->faqid }}</td>
                        <td><strong>{{ $faqs->question }}</strong></td>
                        <td>{{ $faqs->answer }}</td>
                        <td>
                          <a href="#" class="tablebutton"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$faq->links()}}
            </div>
        </div>
    </main>
@endsection
