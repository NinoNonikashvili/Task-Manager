@props(['name', 'placeholder', 'label', 'value'])

<div class="relative w-full h-40 mb-8 px-6 pt-12 pb-5 rounded-xl bg-gray-103  focus-within:ring-1 focus-within:ring-blue-104 @error(trim(str_replace('[', '.', $name), ']')) ring-1 ring-red-error @enderror">
    
         <textarea
         id="{{$name.'_id'}}"
         name="{{$name}}" 
         placeholder="{{$placeholder}}"
         class="peer w-full h-full overflow-hidden text-base font-normal leading-4 text-gray-default  bg-gray-103  focus:outline-none placeholder-transparent focus:placeholder-gray-104  resize-none" 
          >{{isset($value)? $value : ''}}</textarea>
        <label 
            for="{{$name.'_id'}}" 
            class="absolute left-6 top-4  text-xs font-normal leading-4 text-gray-default transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-8 peer-focus:top-4 peer-focus:text-gray-default peer-focus:text-xs ">
            {{$label}}
        </label>
        @error(trim(str_replace('[', '.', $name), ']'))
            <div class="text-xs font-normal text-red-error mt-3">{{ $message }}</div>
        @enderror
</div>


