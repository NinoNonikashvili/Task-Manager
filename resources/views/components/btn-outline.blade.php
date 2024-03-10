@props([ 'text', 'icon', 'type', 'py', 'height', 'width'])


<button class="px-6 {{$py ?? ''}} text-base font-bold leading-4 {{$width ?? ''}}  text-blue-104 bg-white border border-blue-104 rounded-xl {{$height?? ''}} flex gap-2 items-center justify-center uppercase  "

        type="{{$type ??'button'}}">
      @if(isset($icon))
        <x-dynamic-component :component="$icon" />
    @endif
    {{$text ?? $slot}}
    
</button>
