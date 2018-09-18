@extends('layouts.app')

@section('content')

    <!--linked style sheet-->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="opacity: 0.8;">
                <div class="panel-heading">My Diary</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    View or create new diary.


                    <!--home linkes-->
                    <div>
                        <ul>
                               <li>
                                  <a href="{{ route('diaries.create') }}">
                                            Create new entry
                                   </a>
                               </li>
                               <li>
                                 <a href="{{ route('diaries.store') }}">
                                            List of Entries
                                 </a>
                            </li>
                            </ul>
                    </div>
                    <!--end-->
                    
                </div>
            </div>
        </div>
    </div>
</div>

    <!--home Recent entries container-->
  <div class="container">
      <div class="col-md-8 col-md-offset-2">
           <div class="row">
        <div class="panel panel-default" style="opacity: 0.8;">
            <div class="panel-heading">Recent Entries</div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        {{ DB::table('diaries')->orderBy('created_at', 'desc')->take(1)->get() }}
                    <a href=""><button id="Btn7">view entry</button></a>
                    </li>
                    <li class="list-group-item">
                         {{ DB::table('diaries')->orderBy('created_at', 'desc')->take(1)->get() }}
                    <a href=""><button id="Btn7">view entry</button></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
  <!--end-->


@endsection
