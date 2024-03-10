@props(['tasks'])
<x-layout>
   
    <main class="flex gap-9 h-full">

        <x-admin-section :avatar="$avatar" />
        <section class="grow mt-24 flex flex-col">
            <header class="flex justify-between items-end">
                <h1 class="ml-10 text-3xl font-bold leading-4  text-gray-900 uppercase ">{{__('dashboard.your_tasks')}}</h1>
                <div class="flex gap-4 align-center">
                    <form action="{{route('task.destroy_all')}}" method="post" novalidate>
                        @csrf
                        <x-btn-outline text="{{__('dashboard.delete_old_tasks')}}"  type='submit' height="h-full" py="py-4"/>
                    </form>
                    <a href="{{route('task.create')}}">
                        <x-btn-filled text="{{__('dashboard.add_task')}}" icon="icons.add-task " py="py-4" />
                    </a>
                </div>
            </header>
            <div class="grow px-4 mt-4 h-2/3 flex flex-col justify-between">
                <!-- table start -->

                
                @if(count($tasks)) 
                <table class="min-w-full h-fit divide-y divide-gray-200">
                    <thead >
                        <tr>
                            <th scope="col" class="pl-6 py-8 max-w-[18rem] overflow-hidden whitespace-nowrap text-left text-lg font-medium text-black">{{__('dashboard.task_name')}}</th>
                            <th scope="col" class="pl-6 py-8 max-w-[21rem] overflow-hidden whitespace-nowrap text-left text-lg font-medium text-black">{{__('dashboard.description')}}</th>
                            <th scope="col" class="pl-6 py-8 max-w-[8rem] overflow-hidden whitespace-nowrap">
                                <div class="flex gap-2">
                                    <span class="text-left text-lg font-medium text-black">{{__('dashboard.created_at')}}</span>
                                    <x-date-filter column="created_at" />
                                </div>
                                
                            </th>
                            <th scope="col" class="pl-6 py-8 max-w-[8rem] overflow-hidden whitespace-nowrap">
                                <div class="flex gap-1">
                                    <span class="text-left text-lg font-medium text-black">{{__('dashboard.due_date')}}</span>
                                    <x-date-filter column="due_date" />
                                </div>   
                                
                            </th>
                            <th scope="col" class="pl-6 py-8 max-w-[15rem] overflow-hidden whitespace-nowrap text-left text-lg font-medium text-black">{{__('dashboard.actions')}}</th>
                        </tr>
                    </thead>
                   
                    <tbody class="bg-white">
                        @foreach($tasks as $task)
                        <x-table-data-row :task="$task"/>

                        @endforeach
                    </tbody>
                    

                   
                </table>
                {{$tasks->links()}}
                @endif
                <!-- table end -->
            </div>
            <x-lan-switcher  />
            @if(session('success'))
                <x-success-popup :message="session('success')"/>
            @endif
        </section>
            
    </main>
</x-layout>