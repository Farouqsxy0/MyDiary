@extends('layouts.app')

@section('page')    

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <form method="POST" action="{{ route('diaries.update', [$diary->id]) }}">
          {{ csrf_field() }}
           
           <input type="hidden" name="_method" value="put">
            
    <div>
       <input type="text" placeholder="Title.." name="title" value="{{$diary->title}}" id="input1" required autofocus>
    </div>
    <div>
        <textarea type="text" placeholder="Note..." name="description" id="input2" required>{{$diary->description}}</textarea>
    </div>
           <div class="Btn-center2">
               <button type="submit" id="Btn2">
                        save update
               </button>   
           </div>          
     </form>
     <div class="Btn-center2"><a href="/diaries"><button id="btn6">cancel</button></a></div>
@endsection