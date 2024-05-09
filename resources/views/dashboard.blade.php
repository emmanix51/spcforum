@extends('layout.layout')
@section('content')
@include('shared.showcase')
@include('shared.success-message')
<main>

    <h1 class="text-center font-bold text-3xl mb-2"> Latest Posts</h1>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @foreach ($threads as $thread)
        @include('shared.thread-card')
        @endforeach

    </div>
    <div class="mx-4">{{$threads->links()}}</div>

</main>
@endsection