
@props(['task'])
<x-layout>
   
    <main class="flex gap-9 h-full">

    <x-admin-section :avatar="$avatar" />
        <section class="grow mt-24 flex flex-col pl-20">
            <header class="flex justify-between items-end">
                <h1 class="text-3xl font-bold leading-4  text-gray-900">{{$task->name}}</h1>
                <a href="/edit/{{$task->id}}">
                    <x-btn-outline text="{{__('tasks.edit_task')}}" icon="icons.edit " />
                </a>
            </header>
            <div class="grow mt-10 h-2/3">
                <div class="mt-10 max-w-88">
                    <x-task-data title="{{__('tasks.description')}}" :text="$task->description"  />
                </div>
                
                <div class="flex gap-4 mt-10">
                    <x-task-data title="{{__('tasks.created_at')}}" :text="$task->created_at->format('d/m/y')" />
                    <x-task-data title="{{__('tasks.due_date')}}" :text="\Illuminate\Support\Carbon::parse($task->due_date)->format('d/m/y')" />
                </div>
            </div>
            <x-lan-switcher  />
        </section>
    </main>
</x-layout>