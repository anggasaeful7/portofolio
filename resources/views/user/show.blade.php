
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
        <h1>
            {{ $user->name }}
            <small class="text-light">{{ $user->username }}</small>
        </h1>

    </x-app-layout>
