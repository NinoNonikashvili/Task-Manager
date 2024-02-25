<x-layout>

    <main class="grid grid-cols-2 rounded-xl overflow-hidden">
        <img src="{{ Vite::asset('resources/images/cover.png') }}" class="col-span-1">
        <section class="col-span-1 grid items-center ">
            <div class="w-96 mx-auto">
                <div class="flex justify-between items-center w-full mb-14">
                    <div class="flex flex-col gap-4 ">
                        <h1 class="text-3xl font-bold  leading-4 text-gray-900">Welcome back!</h1>
                        <span class=" text-base font-normal leading-4 text-gray-600"> Please enter your details</span>
                    </div>
                    
                    
                    <svg width="62" height="50" viewBox="0 0 62 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.78186 19.0776C0.78186 16.7449 4.17477 16.7449 4.17477 19.0776C4.17477 33.7095 16.262 45.5846 30.8939 45.5846C45.7379 45.5846 57.8251 33.7095 57.8251 18.8655C57.8251 16.5329 61.218 16.5329 61.218 18.8655C61.218 35.618 47.6464 49.1896 30.8939 49.1896C14.3535 49.1896 0.78186 35.618 0.78186 19.0776Z" fill="#2F363D"/>
                        <path d="M12.445 8.47473C12.445 10.5953 9.05212 10.5953 9.05212 8.26267C9.05212 4.02154 12.6571 0.41658 17.1103 0.41658C21.3514 0.41658 24.9564 4.02154 24.9564 8.47473C24.9564 10.5953 21.5635 10.5953 21.5635 8.47473C21.5635 5.93005 19.4429 3.80949 17.1103 3.80949C14.5656 3.80949 12.445 5.93005 12.445 8.47473Z" fill="#2F363D"/>
                        <path d="M52.9478 8.26267C52.9478 10.5953 49.5549 10.5953 49.5549 8.47473C49.5549 5.93005 47.4344 3.80949 44.8897 3.80949C42.345 3.80949 40.4365 5.93005 40.4365 8.47473C40.4365 10.5953 37.0436 10.5953 37.0436 8.47473C37.0436 4.02154 40.4365 0.41658 44.8897 0.41658C49.3429 0.41658 52.9478 4.02154 52.9478 8.26267Z" fill="#2F363D"/>
                    </svg>
                </div>
                <form action="/" method="post">
                    @csrf
                    <div class="mb-6 w-full">
                        <input class="w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500 " type="email" name="email" placeholder="Email" >
                    </div>
                    <div class="mb-6 w-full relative">
                        <input class="w-full px-6 py-4 rounded-xl bg-gray-100 focus:outline-none focus:ring-1 focus:ring-blue-500" type="password" name="password" placeholder="Password" >
                        <svg class="absolute top-4 right-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#2F363D" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#2F363D" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
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

