@extends('layouts.app')

@section('page')
<!DOCTYPE html>
<html lang="en">
<head>

    <!--linked style sheet-->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     
</head>
<body>
   <form method="POST" action="{{ route("diaries.store")}}">
          {{ csrf_field() }}

     <!--new entry container-->
    <div>
        <input type="text required" placeholder="Title.." id="input1" name="title" required autofocus>
    </div>
    <div>
        <textarea type="text" placeholder="Note..." id="input2" name="description" required ></textarea>
    </div>
    <!--end-->


    <!--new entry buttons-->
    <div class="Btn-center">
        <button type="submit" id="Btn">
              save 
        </button>  
     </div>
    </form>
    <div class="Btn-center"><a href="/home"><button id="btn5">cancel</button></a></div> 
    <!--end-->

</body>
</html>
@endsection