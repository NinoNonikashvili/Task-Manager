@props(['name', 'placeholder', 'label'])

<div class="relative w-full h-40 mb-2 px-6 rounded-xl bg-gray-103  focus-within:ring-1 focus-within:ring-blue-104 @error($name) ring-1 ring-red-error @enderror">
    
         <textarea
         id="{{$name.'_id'}}"
         name="{{$name}}" 
         placeholder="text"
         class="peer w-full h-full pt-12 overflow-hidden text-base font-normal leading-4 text-gray-default  bg-gray-103  focus:outline-none  resize-none" 
          > </textarea>
    <label 
        for="{{$name.'_id'}}" 
        class="absolute left-6 top-4  text-xs font-normal leading-4 text-gray-default transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-8 peer-focus:top-4 peer-focus:text-gray-default peer-focus:text-xs ">{{$label}}</label>
</div>


@error($name)
    <div class="text-xs font-normal text-red-error mb-6">{{ $message }}</div>
@enderror