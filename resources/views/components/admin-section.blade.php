<section class="flex flex-col items-center p-6 bg-gray-200 rounded-4 h-full max-w-166 rounded-xl">
    <img src="{{asset('images/avatar.png')}}" alt="" class="mb-28 rounded-full w-16">
    <ul class="flex flex-col gap-7">
        <li>
            <x-icon-text icon='icons.tasks' text='My Tasks' />    
        </li>
        <li>
            <x-icon-text icon='icons.due' text='Due Tasks' />

        </li>
        <li>
            <x-icon-text icon='icons.profile' text='Profile' />

        </li>
    </ul>
    <div class="mt-auto">
        <x-icon-text icon='icons.logout' text='Log Out' />
    </div>
    

</section>