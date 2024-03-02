@props([ 'text', 'icon', 'type', 'height'])


<button class="px-6 py-4 text-base font-bold leading-4  text-blue-500 bg-white border border-blue-500 rounded-xl {{$height?? ''}} flex gap-2 items-center "
        type="{{$type ??'button'}}">
      @if(isset($icon))
        <x-dynamic-component :component="$icon" />
    @endif
    {{$text}}
</button>
