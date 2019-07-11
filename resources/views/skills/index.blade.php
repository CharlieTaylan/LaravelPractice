@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        <h1> skills </h1>
           @if (count($skills) > 0)
                @foreach ($skills as $skill)
                    <div>
                        <div class="well">
                            <h1> {{$skill->skill_icon}} </h1>
                        </div>
                        <h3><b>  {{$skill->confidencelvl}} </b></h3>
                    </div>
                @endforeach
            @else
                <p> No portfolio found </p>
           @endif
        </div>
    </div>
@endsection
