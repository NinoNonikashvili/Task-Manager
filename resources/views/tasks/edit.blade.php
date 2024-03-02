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
                    <x-form.input type="text" name="title_en" placeholder="" label="{{__('tasks.task_name_en')}}"  value="{{old('title_en')??$task['title_en']}}"/>
                    <x-form.input type="text" name="title_ka" placeholder=""  label="{{__('tasks.task_name_ka')}}" value="{{old('title_ka')??$task['title_ka']}}"/>
                    
                    <x-form.textarea name="description_en" placeholder=""  label="{{__('tasks.task_description_en')}}" value="{{old('description_en')??$task['description_en']}}" />
                    <x-form.textarea name="description_ka" placeholder=""  label="{{__('tasks.task_description_ka')}}" value="{{old('description_ka')??$task['description_ka']}}" />
                    
                    <x-form.input type="text" name="due_date" placeholder="DD/MM/YY" label="{{__('tasks.due_date')}}" value="{{old('due_date')??$task['due_date']}}"/>
                 
                    <div class="mb-6 w-full">
                        <button type="submit" class="w-full px-6 py-4 rounded-xl bg-blue-500 text-base font-bold leading-4 text-white focus:outline-none uppercase" type="submit">
                        {{__('tasks.edit_changes')}}
                        </button>
                    </div>
                    
                   
                </form>
            </div>
            <x-lan-switcher  />
        </section>
    </main>
</x-layout>