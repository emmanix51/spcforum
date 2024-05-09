@extends('layout.layout')

@section('content')
<main>
    <h1 class="text-lg font-bold text-center">{{Auth::user()->name}} Profile Page</h1>

    <div class="flex flex-row justify-evenly">
        <div class="">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                <header>
                    <h1 class="text-3xl text-center font-bold my-6 uppercase">
                        My Posts
                    </h1>
                </header>

                @if ($threads->isEmpty())
                <p>No posts found.</p>
                @else
                <table class="w-full table-auto rounded-sm">
                    <tbody>
                        @foreach ($threads as $thread)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="{{ route('threads.show', $thread->id) }}">{{ $thread->title }}</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="{{ route('threads.edit', $thread->id) }}"
                                    class="text-blue-400 px-6 py-2 rounded-xl">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form action="{{ route('threads.destroy', $thread->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">
                                        <i class="fa-solid fa-trash-can"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $threads->links() }}
                @endif
            </div>
        </div>
        <div class="">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                <header>
                    <h1 class="text-3xl text-center font-bold my-6 uppercase">
                        My Comments
                    </h1>
                </header>

                @if ($comments->isEmpty())
                <p>No comments found.</p>
                @else
                <table class="w-full table-auto rounded-sm">
                    <tbody>
                        @foreach ($comments as $comment)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <h3>{{ $comment->content }}</h3>
                            </td>

                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">
                                        <i class="fa-solid fa-trash-can"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $comments->links() }}
                @endif
            </div>
        </div>
    </div>
</main>
@endsection