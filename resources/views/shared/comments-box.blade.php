<div class="">
    <div>
        <h3 class="text-xl font-bold mb-4">Comments</h3>
    </div>
    <form action="{{ route('threads.comments.store', $thread->id) }}" method="POST">
        @csrf
        <div class="mb-2">
            <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="3"
                placeholder="Comment here..."></textarea>
        </div>
        <div class="mb-2">
            <button type="submit" class="bg-spcmain text-white rounded py-2 px-4 hover:bg-black">
                Post comment
            </button>
        </div>
    </form>
    <div class="flex flex-col mb-2">
        @foreach ($thread->comments as $comment)
        @php
        $college = '';
        $collegelogo = '';

        switch ($comment->user->course) {
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
        $collegelogo = 'coed.png';
        break;
        default:
        break;
        }
        @endphp
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img class="hidden w-10 h-10 mr-6 md:block" src="{{ asset($collegelogo)}}" alt="College Logo" />
                <div>
                    <h3 class="text-base">
                        {{$college}}
                    </h3>
                    <div class="text-base font-bold">{{ $comment->user->course }} {{ $comment->user->yearlevel }}
                        @if ($thread->user_id === $comment->user_id)
                        <b> - Poster</b>
                        @endif
                    </div>
                    <p>{{ $comment->content }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>