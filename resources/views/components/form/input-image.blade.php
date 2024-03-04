@props(['name', 'text', ])

<div class="mb-8">
    <div class="flex gap-5 items-center w-full mb-8" x-data="{ imageSrc: '{{asset('images/'.$name.'.png')}}' }">
            
        <img x-bind:src="imageSrc" alt="Uploaded Photo" class="w-124" >        
        <div class="relative w-436 h-19 px-6 rounded-xl bg-gray-103  focus-within:ring-1 focus-within:ring-blue-104 @error($name) ring-1 ring-red-error @enderror">
        
            <input 
            name="{{$name}}" 
            type="file"
            class="absolute w-full top-0 left-0 h-full cursor-pointer opacity-0" 
            x-on:change="imageSrc = URL.createObjectURL($event.target.files[0])"
            
            />
            <button class="w-full h-full flex items-center justify-center gap-2 ">
                <x-icons.upload />
                <span class="text-base font-bold leading-4 text-blue-104 uppercase">{{$text}}</span>
            </button>

        </div>
        <button class="px-12 py-5 text-base font-bold leading-4 text-gray-106 uppercase">Delete</button>
        
    </div>
    @error($name)
        <div class="text-xs font-normal text-red-error mt-1">{{ $message }}</div>
    @enderror
    </div>