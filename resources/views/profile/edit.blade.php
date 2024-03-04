@props(['user', 'avatar'])
<x-layout>
   
    <main class="flex gap-20 h-full">

    <x-admin-section :avatar="$avatar" />

        <section class="w-570 mt-14 ml-auto">

                <h1 class="mb-8 w-115 text-center uppercase text-3xl font-bold leading-4 text-gray-900">{{__('profile.profile')}}</h1>
                <form action="{{route('proile.update')}}" method="post" enctype="multipart/form-data" novalidate class="w-full">
                    @csrf
                    @method('patch')
                    <div class="w-115" >
                        <x-form.input-disabled type="email" name="email" placeholder="" label="{{__('tasks.email')}}"  value="{{$user['email']}}" />
                        <h3 class="mb-6 mt-16 flex justify-center uppercase text-base font-normal leading-4 text-gray-default">{{__('profile.change_password')}}</h3>
                        <x-form.password-input type="password" name="current_pass" placeholder=""  label="{{__('profile.current_password')}}" value="{{old('current_pass')}}"/>
                        <x-form.password-input type="password" name="new_password" placeholder=""  label="{{__('profile.new_password')}}" value="{{old('new_password')}}"/>
                        <x-form.password-input type="password" name="duplicate_password" placeholder=""  label="{{__('profile.retype_new_password')}}" value="{{old('duplicate_password')}}"/>
                    </div>
                    <div class="w-115">
                        <h3 class="mb-6 mt-16 flex justify-center uppercase text-base font-normal leading-4 text-gray-default">{{__('profile.change_photos')}}</h3>
                    </div>
                    <div class="w-full mb-12">
                        <x-form.input-image name="avatar" text="{{__('profile.upload_profile')}}" />
                        <x-form.input-image name="cover" text="{{__('profile.upload_cover')}}" />
                    </div>
                    
                    
                    
                    
                 
                    <div class="mb-6 w-115">
                        <button type="submit" class="w-full px-6 py-4 rounded-xl bg-blue-500 text-base font-bold leading-4 text-white focus:outline-none uppercase" type="submit">
                        {{__('profile.change')}}
                        </button>
                    </div>
                    
                   
                </form>
            
        </section>
        <div class="w-fit h-full flex ">
            <x-lan-switcher  />
        </div>
        
        
    </main>
</x-layout>