
@props(['icon', 'text'])
<div class="flex gap-2 items-center">

    <x-dynamic-component :component="$icon" class="mt-4" />
    <x-icons.{{$icon}} class="" />
    <span>{{$text}}</span>
</div>