<x-layout>
<h3 class="font-semibold text-xl py-5 text-center">Create New Developer</h3>

<form action="{{ route('developer.save') }}" method="POST" class="border border-gray-300 shadow-lg p-5 rounded-lg grid gap-5">
@csrf
    <div class="name grid gap-2">
    <label for="name" class="font-medium">Name</label>
    <input type="text" id="name" name="name" placeholder="Name" required class="bg-white px-2 py-2 outline-none text-sm rounded-md">
    </div>

     <div class="skill grid gap-2">
    <label for="skill" class="font-medium">Skill (0-100)</label>
    <input type="number" id="skill" name="skill" placeholder="Skill" required class="bg-white px-2 py-2 outline-none text-sm rounded-md">
    </div>

     <div class="bio grid gap-2">
    <label for="bio" class="font-medium">Bio</label>
    <textarea name="bio" id="bio" placeholder="Bio" required class="bg-white px-2 py-2 outline-none text-sm rounded-md"></textarea>
    </div>

     <div class="stack_id grid gap-2">
    <label for="stack_id" class="font-medium">Stack</label>
    <Select name="stack_id" id="stack_id" class="bg-white px-2 py-2 outline-none text-sm rounded-md">
    <option value="" disabled selected>Select a Stack</option>
    @foreach($stacks as $stack)
        <option value="{{ $stack->id }}">
            {{ $stack->name }}
        </option>
    @endforeach
    </select>
    </div>

    <button type="submit" name="submit" class="bg-red-600 hover:bg-red-600/80 transition-color delay-100 duration-300 ease-in-out focus:bg-green-600 text-white py-2 rounded-lg">Submit</button>
</form>
</x-layout>