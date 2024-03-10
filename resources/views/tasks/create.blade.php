@props(['avatar'])
<x-layout>
   
    <main class="flex gap-9 h-full">

    <x-admin-section :avatar="$avatar" />
        <section class="grow mt-24 flex flex-col px-52">
 
            <div class="w-115 mt-4 mx-auto flex flex-col items-center">
                <h1 class="mb-8 text-3xl font-bold leading-4 text-gray-900">{{__('tasks.create_task')}}</h1>
                <form action="{{route('task.store')}}" method="post" novalidate class="w-full">
                    @csrf
                    <x-form.input type="text" name="name[en]" placeholder="" label="{{__('tasks.task_name_en')}}"  value="{{old('name.en')}}"/>
                    <x-form.input type="text" name="name[ka]" placeholder=""  label="{{__('tasks.task_name_ka')}}" value="{{old('name.ka')}}"/>
                    
                    <x-form.textarea name="description[en]" placeholder=""  label="{{__('tasks.task_description_en')}}" value="{{old('description.en')}}" />
                    <x-form.textarea name="description[ka]" placeholder=""  label="{{__('tasks.task_description_ka')}}" value="{{old('description.ka')}}" />
                    
                    <x-form.input-date name="due_date" placeholder="DD/MM/YY" label="{{__('tasks.due_date')}}" value="{{old('due_date')}}"/>
                 
                    <div class="mb-6 w-full">
                      
                        <x-btn-filled text="{{__('tasks.create_task')}}" type="submit" py="py-27"/>
                    </div>
                    
                   
                </form>
            </div>
            
        </section>
        <x-lan-switcher  />
    </main>
</x-layout>