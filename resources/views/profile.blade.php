
    <x-app-layout>
        @slot('title')
        {{ $username ?? 'Profile Page' }}
        @endslot

        <h1>{{ $username ?? 'Profile' }}</h1>
    </x-app-layout>
