@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <h1>Listagem dos Posts</h1>

        @foreach ($posts as $post)
            <p>{{ $post->title }}</p>
        @endforeach
    </div>
</div>
@endsection

