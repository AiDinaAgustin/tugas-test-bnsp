@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Activities</h1>
        <div class="row">
            @foreach($activities as $activity)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($activity->image)
                            <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ $activity->description }}</p>
                            <p class="card-text"><small class="text-muted">{{ $activity->date->format('F j, Y') }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection