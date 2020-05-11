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
                STANDARD
                <a href="{{url('/welcome')}}">
                        Back
                </a>     
            </div>
        </div>
        <div class="col-md-12">
            <form action="{{url(/standard)}}" method="post">
                <input type="text" name="search" paleceholder="isi sidini">
                <input type="submit" value=">>">
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
      
@endsection