
    <x-app-layout>
        @slot('title')
            User Page
        @endslot
        @slot('style')
            <style>
                body {
                    background-color: brown;
                }
            </style>
        @endslot

        <h1>ALL USER</h1>
        @foreach($users as $user)
        <ul>
            <li><a class="text-white" href="{{ route('user.show', $user) }}">{{ $user->name }}</a></li>
        </ul>
        @endforeach

    </x-app-layout>
