<x-layout>
    <h3 class="font-semibold pt-14 text-lg">Developer Id - {{ $developer->id }}</h3> 
    <p><span class="font-semibold pt-14 text-lg">Skill level:</span> {{ $developer->skill }}</p>
    <p><span class="font-semibold pt-14 text-lg">Bio: </span>{{ $developer->bio }}</p>
    
    <div>
        <h1 class="text-center font-semibold text-xl py-5">Stack information</h1>
        <p><span class="font-semibold">Name: </span>{{ $developer->stack->name }}</p>
        <p><span class="font-semibold">Category: </span>{{ $developer->stack->category }}</p>
        <p><span class="font-semibold">Description: </span>{{ $developer->stack->description }}</p>
    </div>

    <form action="{{ route('developer.destroy', $developer->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="text-sm px-3 py-2 rounded-md mt-5 bg-red-600 hover:bg-red-600/60 text-white transition-colors delay-100 duration-300 ease-in-out">Delete</button>
    </form>
</x-layout>
