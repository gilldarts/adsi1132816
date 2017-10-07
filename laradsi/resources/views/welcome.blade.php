@extends('layout-app/welcome')


@section('title', 'LARADSI - Articulos 2017')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($arts as $art)
                <div class="row well">
                    <div class="col-md-4">
                        @if ($art->image)
                            <img src="{{ asset($art->image) }}" width="100%">
                        @else
                            <img src="{{ asset('imgs/no-image.png') }}" width="100%">
                        @endif
                        
                    </div>
                        <h4 class="lead">{{ $art->name }}</h4>
                        <small class="badge">{{ $art->category->name }}</small>
                        <em class="label label-primary">{{ $art->created_at }}</em>
                        <hr>
                        

                        <p>{{ $art->content }}</p>
                    <div class="col-md-8">
                        
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection