<x-layout>
    <p class="font-semibold pt-14 pb-5 text-stone">View the list of developers below</p>
    <ul class="flex flex-col gap-5 pb-5">

    @foreach( $developers as $developer)
        <li>
        <x-card href="{{ route('developer.show', $developer->id)  }}" :highlight=" $developer['skill'] <= 100 ">
        <div class="grid gap-3">
        <h3> {{ $developer->name }} </h3>
        <p class="text-sm font-light">{{ $developer->stack->name }}</p>
        </div>
        </x-card>
    </li>
    @endforeach
    </ul>

    {{ $developers->links() }}
</x-layout>
