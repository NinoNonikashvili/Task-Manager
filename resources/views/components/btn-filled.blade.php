@props([ 'text', 'icon', 'type', 'py'])

<button class="w-full px-6 {{$py}} text-base font-bold leading-4 text-white bg-blue-400 rounded-xl flex {{isset($icon) ? 'gap-2 items-center' : 'justify-center'}}   uppercase"
        type="{{$type ??'button'}}">
    @if(isset($icon))
        <x-dynamic-component :component="$icon" />
    @endif
    {{$text}}
</button>


