@props(["highlight" => false])

<div  class="flex items-center justify-between px-5 py-5 bg-white rounded-lg font-semibold">
    {{ $slot }}
    <a {{ $attributes }} class="text-gray-600 bg-gray-200 text-sm p-2 rounded-sm font-bold hover:bg-red-400 hover:text-white transition delay-100 duration-300">View details</a>
</div>