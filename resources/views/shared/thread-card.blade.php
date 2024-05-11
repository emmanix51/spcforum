@php
$college = '';
$collegelogo = '';

switch ($thread->user->course) {
case 'BSCS':
case 'BSIT':
$college = 'College of Computer Studies';
$collegelogo = 'ccslogo.png';
break;
case 'BSCRIM':
$college = 'College of Criminology';
$collegelogo = 'coclogo.png';
break;
case 'BSCE':
case 'BSEE':
case 'BSME':
case 'BSELE':
case 'BSCME':
$college = 'College of Engineering';
$collegelogo = 'coelogo.png';
break;
case 'BAEL':
case 'BAPS':
case 'BAF':
$college = 'College of Arts and Sciences';
$collegelogo = 'caslogo.png';
break;
case 'BSBA':
$college = 'College of Business Administration';
$collegelogo = 'cbalogo.png';
break;
case 'BEED':
$college = 'College of Education';
$collegelogo = 'coedlogo.png';
break;
default:
break;
}

@endphp
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset($collegelogo)}}" alt="" />
        <div class="flex flex-col">
            <h3 class="text-2xl">
                {{$college}}
            </h3>
            <div class="text-xl font-bold mb-4">{{$thread->user->course}} - {{$thread->user->yearlevel}}</div>
            <h2 class="text-lg font-bold">{{$thread->title}}</h2>
            <p class="mb-2">{{ Str::limit($thread->content, 30, '...') }}</p>
            <small class="font-italic">posted on: {{$thread->created_at}}</small>
            <a href="{{route('threads.show',$thread->id)}}"><button
                    class="p-2 bg-spcmain rounded text-white hover:bg-white hover:border-2 hover:text-black">View
                    full post -></button></a>
        </div>
    </div>
</div>