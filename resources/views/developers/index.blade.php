<x-layout>
    <h2>We're currently in the developers page</h2>
    <p>View the list of developers below</p>
    <ul>

    @foreach( $developers as $developer)
        <li>
        <p> {{ $developer["name"] }} </p>
        <a href="/developer/{{ $developer["id"] }}">
            View details
        </a>
    </li>
    @endforeach
    </ul>
</x-layout>
