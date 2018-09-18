@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

    <!--linked style sheets-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

    <!--diaries index container-->
    <div class="col-md-10 col-lg-10  col-md-offset-2 col-lg-offset-1">
        <div class="panel panel-default" style="opacity: 0.7;">
                <div class="panel-heading"><h3>Diaries</h3></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach ($diaries as $diary)
                                <li class="list-group-item"> 
                                    {{$diary->created_at}}<br/>
                                 <div id="index">   {{$diary->title}} </div>
                                        <a href="/diaries/{{$diary->id}}"><button id="Btn3">view entry</button></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
            </div>
    </div>
    <!--end-->

</body>
</html>
@endsection