@props([ 'title', 'text'])

<div class="flex flex-col gap-4  ">
    <h3 class="text-base font-normal leading-4  text-gray-600 ">{{$title}}</h3>
    <p class="text-lg font-normal leading-5  text-gray-900">{{$text}}</p>
</div>