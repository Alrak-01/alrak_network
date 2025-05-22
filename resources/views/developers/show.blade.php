<x-layout>
    <h3 class="font-semibold pt-14 text-lg">Developer - {{ $developer->id }}</h3> 
    <p><span class="font-semibold pt-14 text-lg">Skill level:</span> {{ $developer->skill }}</p>
    <p><span class="font-semibold pt-14 text-lg">Bio: </span>{{ $developer->bio }}</p>
</x-layout>
