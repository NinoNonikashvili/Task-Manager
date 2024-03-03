@props(['task'])
<x-layout>
   
    <main class="flex gap-9 h-full">

        <x-admin-section />
        <section class="grow mt-24 flex flex-col px-52">
            <header >   
                <a href="/tasks/{{$task['id']}}">
                    <x-icon-text icon="icons.left-arrow" text="{{__('tasks.back')}} "/>
                </a>
            </header>
            <div class="w-115 mt-4 mx-auto flex flex-col items-center">
                <h1 class="mb-8 text-3xl font-bold leading-4 text-gray-900">{{__('tasks.edit_task_h1')}}</h1>
                <form action="/update/{{$task['id']}}" method="post" novalidate class="w-full">
                    @csrf
                    @method('patch')
                    <x-form.input type="text" name="name[en]" placeholder="" label="{{__('tasks.task_name_en')}}"  value="{{old('name.en')??$task['name.en']}}"/>
                    <x-form.input type="text" name="name[ka]" placeholder=""  label="{{__('tasks.task_name_ka')}}" value="{{old('name.ka')??$task['name.ka']}}"/>
                    
                    <x-form.textarea name="description[en]" placeholder=""  label="{{__('tasks.task_description_en')}}" value="{{old('description.en')??$task['description.en']}}" />
                    <x-form.textarea name="description[ka]" placeholder=""  label="{{__('tasks.task_description_ka')}}" value="{{old('description.ka')??$task['description.ka']}}" />
                    
                    <x-form.input type="text" name="due_date" placeholder="DD/MM/YY" label="{{__('tasks.due_date')}}" value="{{old('due_date')??$task['due_date']}}"/>
                 
                    <div class="mb-6 w-full">
                        <button type="submit" class="w-full px-6 py-4 rounded-xl bg-blue-500 text-base font-bold leading-4 text-white focus:outline-none uppercase" type="submit">
                        {{__('tasks.edit_changes')}}
                        </button>
                    </div>
                    
                   
                </form>
            </div>
            
        </section>
        <x-lan-switcher  />
    </main>
</x-layout>