@props(['title'=>'Click','color'=>'blue'])

<!-- @php
    $colorClass = match($color){
        'red'=>'bg-red-500 hover:bg-red-500',
        'yellow'=>'bg-yellow-500 hover:bg-yellow-500',
        'blue'=>'bg-blue-500 hover:bg-blue-500',
        'green'=>'bg-green-500 hover:bg-green-500'
    }
@endphp -->

<button class="button-{{ $color }} text-white font-bold py-2 px-4 rounded" {{ $attributes }}>
  {{ $icon }} {{ $title }}
</button>
