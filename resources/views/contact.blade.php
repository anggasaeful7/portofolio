
    <x-app-layout>
        @slot('title')
            Contact Page
        @endslot

        <form action="/contact" method="post">
            @csrf


            <button type="submit">Send</button>
        </form>
    </x-app-layout>
