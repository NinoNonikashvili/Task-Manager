@props(['type', 'name', 'placeholder'])


<div class="mb-6 w-full">
    <input class="w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none  focus:ring-1 focus:ring-blue-500 @error('title_en') ring-1 ring-red-400 @enderror " 
            type="{{$type}}" 
            name="{{$name}}" 
            placeholder="{{$placeholder}}"
            value="{{old($name)}} ">
@error($name)
    <div class="text-xs font-normal text-red-500 mt-2">{{ $message }}</div>
@enderror
</div>