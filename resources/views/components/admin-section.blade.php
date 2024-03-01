<section class="flex flex-col items-center p-6 bg-gray-200 rounded-4 h-full w-[10.5rem] rounded-xl">
    <img src="{{asset('images/avatar.png')}}" alt="" class="mb-28 rounded-full w-16">
    <ul class="flex flex-col gap-7">
        <li>
            <a href="{{route('dashboard')}}">
                <x-icon-text icon='icons.tasks' text='dashboard.my_tasks' />  
            </a>  
        </li>
        <li>
            <a href="{{route('dashboard', ['due_tasks' => true] )}}">
                <x-icon-text icon='icons.due' text='dashboard.due_tasks' />
            </a>
        </li>
        <li>
            <a href="{{route('profile')}}">
                <x-icon-text icon='icons.profile' text='dashboard.profile' />
            </a>
        </li>
    </ul>
    <div class="mt-auto">
        <x-icon-text icon='icons.logout' text='dashboard.logout' />
    </div>
    

</section>