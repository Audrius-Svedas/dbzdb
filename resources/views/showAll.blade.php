@extends('layout')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Dragon Ball Z Database</h1>
    </div>
    <div class="row">
       @foreach ($characters as $character)
         <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
             @if ($character->featured_photo !== NULL)
               <a href="{{ route('show', $character->id)}}"><img src="{{$character->featured_photo->url}}" alt="..."></a>
             @endif

             <div class="caption">
               <h3 class="vidurys">{{ $character->name }}</h3>
             </div>
           </div>
         </div>
       @endforeach
     </div>
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
      <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
</div> <!-- /container -->
@endsection
