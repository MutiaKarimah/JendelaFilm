@extends('layout.default')
@section('title', 'JendelaFilm')

@section('styles')
@endsection

@section('page-css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"> JendelaFilm 
        </div>
        <div class="col-md-12">
            <div class="col-md-10 card-block">
                <a href="{{url('/standard')}}">
                        Standard Search
                </a> 
                <a href="{{url('/custom')}}">
                        Custom Search
                </a>      
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
      
@endsection