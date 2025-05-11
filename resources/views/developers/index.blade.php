<x-layout>
    <h2>We're currently in the developers page</h2>
    <p>View the list of developers below</p>
    <ul>

    @foreach( $developers as $developer)
        <li>
        <x-card href="/developer/{{ $developer['id']}}" :highlight=" $developer['skill'] <= 100 ">
        <p> {{ $developer["name"] }} </p>
        </x-card>
    </li>
    @endforeach
    </ul>
</x-layout>
