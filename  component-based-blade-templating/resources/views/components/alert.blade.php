@props(['type'=>'success'])

<div class="m-1 p-5 px-10 alert-{{ $type }} text-gray-800 cursor-pointer">
    {{ $slot }}
</div>

