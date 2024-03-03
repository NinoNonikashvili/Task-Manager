@props(['type', 'name', 'placeholder', 'label', 'value'])






<div class="relative w-full h-19 mb-6 px-6 rounded-xl bg-gray-103  focus-within:ring-1 focus-within:ring-blue-104 @error($name) ring-1 ring-red-error @enderror">
    
         <input 
         id="{{$name.'_id'}}"
         name="{{$name}}" 
         type="{{$type}}"
         placeholder="{{$placeholder}}"
         value ="{{isset($value)? $value: ''}}"
         class="peer w-full h-full pt-4 overflow-hidden text-base font-normal leading-4 text-gray-104  bg-gray-103  focus:outline-none placeholder-transparent focus:placeholder-gray-104" 
         disabled
          />
    <label 
        for="{{$name.'_id'}}" 
        class="absolute left-6 top-4  text-xs font-normal leading-4 text-gray-104 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-104 peer-placeholder-shown:top-7 peer-focus:top-4 peer-focus:text-gray-104 peer-focus:text-xs ">{{$label}}</label>
        @error($name)
            <div class="text-xs font-normal text-red-error mt-2">{{ $message }}</div>
        @enderror
</div>