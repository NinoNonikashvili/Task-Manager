<x-layout>
    
    <main class="flex gap-9 h-full">

        <x-admin-section />
        <section class="grow mt-24">
            <header class="flex justify-between items-end">
                <h1 class="ml-10 text-3xl font-bold leading-4  text-gray-900">{{__('dashboard.your_tasks')}}</h1>
                <div class="flex gap-4 align-center">
                <button class="px-6 py-4 text-base font-bold leading-4  text-blue-500 bg-white border border-blue-500 rounded-xl">
                    {{__('dashboard.delete_old_tasks')}}
                </button>
                <button class="px-6 py-4 text-base font-bold leading-4  text-white bg-blue-500 rounded-xl flex gap-2 items-center">
                    <x-icons.add-task />
                    {{__('dashboard.add_task')}}
                </button>
                </div>
            </header>
        </section>
    </main>
</x-layout>