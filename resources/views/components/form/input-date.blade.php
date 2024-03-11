@props([ 'name', 'placeholder', 'label', 'value'])

<div class="mb-8">
<div 
    class=" relative w-full h-19  px-6 rounded-xl bg-gray-103 focus-within:ring-1 focus-within:ring-blue-104 @error(trim(str_replace('[', '.', $name), ']')) ring-1 ring-red-error @enderror"
    x-data="{ text: '{{$value}}' }"
    x-on:click="text = text === '' ? 'DD/MM/YY' : text">

    <input  
        type="date" 
        name="{{$name}}" 
        class="custom-datepicker h-full pt-4 opacity-0 z-10 absolute top-0 left-6 right-6 overflow-hidden"
        x-model="text" />

    <div 
        class="flex items-center z-10 w-full h-full pt-4 overflow-hidden text-base font-normal leading-4 text-gray-default bg-gray-103 focus:outline-none "
        x-text="formatDate(text)"></div>

    <label 
        class="absolute left-6  font-normal leading-4 transition-all "
        x-bind:class="{ 'text-gray-default top-4 text-xs': text !== '', 'top-7 text-gray-106 text-base': text === '' }">{{$label}}</label>

    <div class="absolute top-7 right-8 z-0">
        <x-icons.calendar />   
    </div>
</div>

        @error(trim(str_replace('[', '.', $name), ']'))
            <div class="text-xs font-normal text-red-error mt-2">{{ $message }}</div>
        @enderror
        </div>
<script>
    function formatDate(dateString) {
        if (!dateString) return '';
        
        const date = new Date(dateString);
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear().toString().slice(2);

        if(month === 'NaN') {
            return dateString
        }
        return `${month}/${day}/${year}`;
    }

    

    Alpine.data('formatDate', formatDate);
</script>
      






