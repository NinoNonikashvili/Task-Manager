@props([ 'name', 'placeholder', 'label'])


<div
    x-data="{
        show : false
    }"
    class="relative w-full h-19 mb-8 px-6 rounded-xl bg-gray-103  focus-within:ring-1 focus-within:ring-blue-104 @error(trim(str_replace('[', '.', $name), ']')) ring-1 ring-red-error @enderror">
    
         <input 
         id="{{$name.'_id'}}"
         name="{{$name}}" 
         x-bind:type="show ? 'text' : 'password'"
         placeholder="{{$placeholder}}"
         
         class="peer w-full h-full pt-4 overflow-hidden text-base font-normal leading-4 text-gray-default  bg-gray-103  focus:outline-none  placeholder-transparent focus:placeholder-gray-104" 
          />
    <label 
        for="{{$name.'_id'}}" 
        class="absolute left-6 top-4  text-xs font-normal leading-4 text-gray-default transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-106 peer-placeholder-shown:top-7 peer-focus:top-4 peer-focus:text-gray-default peer-focus:text-xs ">{{$label}}</label>

        
        <div @click="show= !show"  class="absolute top-7 right-8">
            <div x-bind:class="show? 'show' : 'hidden'">
                <x-icons.eye />
            </div>
            <div x-bind:class="!show? 'block' : 'hidden'">
                <x-icons.eye-slash />
            </div>
            
            
        </div>
        @error(trim(str_replace('[', '.', $name), ']'))
            <div class="text-xs font-normal text-red-error mt-1">{{ $message }}</div>
        @enderror
</div>


