<section class="relative h-72 bg-spcmain flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('{{asset('spclogo.jpg')}}')"></div>

    <div class="z-10">
        <h1 class="text-9xl font-bold uppercase text-white opacity-70">
            SPC<span class="text-black outline-white ">FORUM</span>
        </h1>
        @auth
        @include('shared.search-bar')
        <a class="text-base text-white underline" href="{{route('threads.search')}}">Advanced Search</a>
        @endauth
        @guest

        <p class="text-2xl text-gray-200 font-bold my-2">Share your thoughts</p>
        <div>
            <a href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-lg hover:border-4 ease-in duration-100">Sign
                Up to start posting</a>
        </div>
        @endguest

    </div>
</section>