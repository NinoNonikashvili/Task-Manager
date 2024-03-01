
@props(['icon', 'text'])
<div class="flex gap-2 items-center">

    <x-dynamic-component :component="$icon" class="mt-4" />
    <span class="max-w-[80%]">{{__($text)}}</span>
</div>