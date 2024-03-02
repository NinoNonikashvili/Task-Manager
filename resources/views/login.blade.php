<x-layout>

    <main class="grid grid-cols-2 rounded-xl overflow-hidden h-full">
        <img src="{{ asset('images/cover.png') }}" class="col-span-1 h-full object-cover overflow-hidden">
        <section class="col-span-1 grid items-center ">
            <div class="w-96 mx-auto">
                <div class="flex justify-between items-center w-full mb-14">
                    <div class="flex flex-col gap-4 ">
                        <h1 class="text-3xl font-bold  leading-4 text-gray-900">{{__('login.welcome')}}</h1>
                        <span class=" text-base font-normal leading-4 text-gray-105"> {{__('login.enter_details')}}</span>
                    </div>
                    
                    
                    <x-icons.smile />
                </div>
                <form action="{{route('login.auth')}}" method="post" novalidate>
                    @csrf
                 
                    <x-form.input type="email" name="email" placeholder="{{__('login.write_email')}}"  label="{{__('login.email')}}"/>
                    <x-form.password-input name="password" placeholder="{{__('login.write_password')}}" label="{{__('login.password')}}"/>
                    
                    <div class="mb-6 w-full">
                        <!-- <button class="w-full px-6 py-4 rounded-xl bg-blue-500 text-base font-bold leading-4 text-white focus:outline-none">
                        
                        </button> -->
                        <x-btn-filled text="{{__('login.login')}}" type="submit"/>
                    </div>
                </form>
            </div>         

            <x-lan-switcher justify="justify-center"/>
        </section>
    </main>
    



</x-layout>

