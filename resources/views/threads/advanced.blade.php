@extends('layout.layout')
@section('content')

<form action="{{route('threads.search')}}" method="GET">
    <div class="relative m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text" name="search"
            class="h-14 w-full my-2 pl-10 pr-20 rounded-lg z-0 border-2 border-gray-100 focus:shadow focus:outline-none"
            placeholder="Search Forum posts" />
        <select name="course" id="course" class="border-2 border-gray-100 w-full my-2">
            <option value="BSCS">Bachelors of Science in Computer Science</option>
            <option value="BSIT">Bachelors of Science in Information Technology</option>
            <option value="BSCRIM">Bachelors of Science in Criminology</option>
            <option value="BAEL">Bachelors of Arts in English Language</option>
            <option value="BAPS">Bachelors of Arts in Political Science</option>
            <option value="BAF">Bachelors of Arts in Filipino</option>
            <option value="BSBA">Bachelors of Science in Business Administration</option>
            <option value="BEED">Bachelor in Elementary Education</option>
            <option value="BSCE">Bachelors of Science in Civil Engineering</option>
            <option value="BSEE">Bachelors of Science in Electrical Engineering</option>
            <option value="BSME">Bachelors of Science in Mechanical Engineering</option>
            <option value="BSELE">Bachelors of Science in Electronics Engineering</option>
            <option value="BSCME">Bachelors of Science in Computer Engineering</option>
        </select>
        <div>
            <button type="submit"
                class="h-10 w-20 text-white justify-center rounded-lg bg-spcmain hover:bg-white hover:border-2 hover:text-black">
                Search
            </button>
        </div>
    </div>
</form>
<h1 class="text-center font-bold text-3xl mb-2"> Latest Posts</h1>
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @foreach ($threads as $thread)
    @include('shared.thread-card')
    @endforeach

</div>
<div class="mx-4">{{$threads->links()}}</div>
@endsection