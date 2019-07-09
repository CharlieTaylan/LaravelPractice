@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        <h1> Portfolio </h1>
           @if (count($portfolios) > 0)
                @foreach ($portfolios as $portfolio)
                    <div>
                        <div class="well">
                            <h1> {{$portfolio->thumbnails}} </h1>
                        </div>
                        <h3><b>  {{$portfolio->title}} </b></h3>
                        <h4> {{$portfolio->description}} </h4>
                    </div>
                @endforeach
            @else
                <p> No portfolio found </p>
           @endif
        </div>
    </div>
@endsection
