@props(['name', 'placeholder'])

<div class="mb-6 w-full">
    <textarea class=" resize-none h-40 w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none  focus:ring-1 focus:ring-blue-500 @error('description_en') ring-1 ring-red-400 @enderror " 
            name="{{$name}}" 
            placeholder="{{$placeholder}}"
            value="{{old($name)}} ">
    </textarea>
@error($name)
    <div class="text-xs font-normal text-red-500 mt-2">{{ $message }}</div>
@enderror
</div>