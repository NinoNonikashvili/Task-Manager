@props([ 'text', 'icon', 'type'])

<button class="px-6 py-4 text-base font-bold leading-4  text-white bg-blue-500 rounded-xl flex gap-2 items-center"
        type="{{$type ??'button'}}">
    <x-dynamic-component :component="$icon" />
    {{$text}}
</button>


