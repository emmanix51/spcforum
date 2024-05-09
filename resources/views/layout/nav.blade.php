<nav class="flex justify-between items-center mb-2 px-2">
    <a class="flex flex-row items-center gap-x-2" href="{{ url('/') }}">
        <img class="w-16" src="{{ asset('spclogo.jpg') }}" alt="" class="logo" />
        <h3 class="font-bold text-spcmain text-2xl">{{ config('app.name') }}</h3>
    </a>

    <ul class="flex space-x-6 text-lg items-center">
        @auth
        @php
        $college = '';
        $collegelogo = '';

        switch (Auth::user()->course) {
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
        <li class="">
            <a href="{{ route('threads.create') }}" class="hover:text-spcmain flex flex-row items-center">
                create
            </a>
        </li>
        <li class="">
            <a href="{{ route('users.show') }}" class="hover:text-spcmain flex flex-row items-center">
                <img class="w-12 mr-2" src="{{ asset($collegelogo) }}" alt="{{ $college }} Logo" class="logo" />
                <p>{{ Auth::user()->name }} Profile</p>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="hover:text-spcmain"><i class="fa-solid fa-user-plus"></i>
                    Logout</button>
            </form>
        </li>
        @endauth
        @guest
        <li>
            <a href="{{ route('register') }}" class="hover:text-spcmain"><i class="fa-solid fa-user-plus"></i>
                Register</a>
        </li>
        <li>
            <a href="{{ route('login') }}" class="hover:text-spcmain"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a>
        </li>
        @endguest
    </ul>
</nav>