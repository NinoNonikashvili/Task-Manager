@props(['message'])

<div x-data="{ showItem: true }" x-init="setTimeout(() => { showItem = false; }, 5000)">

    <div x-show="showItem" class="w-336 h-106 py-10 px-7 flex gap-2 items-center border border-b-green-101 border-x-0 border-t-0 shadow-md  bg-white fixed right-10 bottom-32  ">
        <x-icons.success-smile class="success-smile" />
        <p class="text-base leading-5 text-black font-normal">{{$message}}</p>
    </div>
</div>