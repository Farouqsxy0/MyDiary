@extends('layouts.app')

@section('page')
<!DOCTYPE html>
<html lang="en">
<head>

    <!--linked stlyes-->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <section>
        <div class="content">
            
            <!--edit page button-->
            <h1>{{$diary->title}}</h1>
            <div id="down">
                <textarea name="" id="input3" placeholder ="{{$diary->description}}" onclick="scroll"></textarea>
            </div>
            <!--end-->

            <!--edit page buttons-->
            <a href="/diaries/{{$diary->id}}/edit" id="link-pad"><button id="show">edit entry</button></a>
            <a href=""><button id="delete"
            onclick="var result = confirm('Delete entry');
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form').submit();
                }"> delete entry</button>

            <form action="{{ route('diaries.destroy', [$diary->id]) }}" id="delete-form" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete">
            </form>
            </a>
            <!--end-->

        </div>
    </section>


    <!--linked java scripts-->
    <script type="text/javascript" src="js/font-awesome.js"></script>
</body>
</html>
@endsection