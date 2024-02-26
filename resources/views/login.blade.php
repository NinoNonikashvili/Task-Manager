<x-layout>

    <main class="grid grid-cols-2 rounded-xl overflow-hidden">
        <img src="{{ asset('images/cover.png') }}" class="col-span-1">
        <section class="col-span-1 grid items-center ">
            <div class="w-96 mx-auto">
                <div class="flex justify-between items-center w-full mb-14">
                    <div class="flex flex-col gap-4 ">
                        <h1 class="text-3xl font-bold  leading-4 text-gray-900">Welcome back!</h1>
                        <span class=" text-base font-normal leading-4 text-gray-600"> Please enter your details</span>
                    </div>
                    
                    
                    <x-icons.smile />
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-6 w-full">
                        <input class="w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none  focus:ring-1 focus:ring-blue-500 @error('email') ring-1 ring-red-400 @enderror " 
                                type="email" 
                                name="email" 
                                placeholder="Email"
                                value="{{old('email')}} ">
                    @error('email')
                        <div class="text-xs font-normal text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    
                    <div class="mb-6 w-full relative">
                        <input class="w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 @error('email') ring-1 ring-red-400 @enderror" 
                                type="password" 
                                name="password" 
                                placeholder="Password" >
                        <x-icons.eye class='absolute top-4 right-4'/>
                    @error('password')
                        <div class="text-xs font-normal text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    
                    <div class="mb-6 w-full">
                        <button class="w-full px-6 py-4 rounded-xl bg-blue-500 text-base font-bold leading-4 text-white focus:outline-none">
                            LOG IN
                        </button>
                    </div>
                </form>
            </div>         

            <x-lan-switcher justify="center"/>
        </section>
    </main>
    



</x-layout>

