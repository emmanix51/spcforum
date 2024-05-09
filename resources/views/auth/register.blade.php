@extends('layout.layout')

@section('content')

<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
            <p class="mb-4">Create an account for Spc Forum</p>
        </header>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />
                @error('name')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-6">
                <label for="course" class="inline-block text-lg mb-2">
                    Course:
                </label>
                <select class="border-2 border-gray-400" name="course" id="course">
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
                @error('course')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="yearlevel" class="inline-block text-lg mb-2">
                    Year:
                </label>
                <select class="border-2 border-gray-400" name="yearlevel" id="year">
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                </select>
                @error('yearlevel')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                @error('password')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                @error('password_confirmation')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" name="submit" class="bg-spcmain text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="login.html" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection