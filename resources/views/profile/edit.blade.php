<x-app-layout :user="$user">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

        <div class="max-w-3xl mx-auto">


            <div class="box relative rounded-lg shadow-md">

                <div class="flex md:gap-8 gap-4 items-center md:p-8 p-6 md:pb-4">


                    <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0"> 
                        <label for="file" class="cursor-pointer">
                            <img id="img" src="{{ asset('storage/images/' . $user->image) }}" class="object-cover w-full h-full rounded-full" alt=""/>
                            <input type="file" id="file" class="hidden" />
                        </label>

                    </div>

                    <div class="flex-1">
                        <h3 class="md:text-xl text-base font-semibold text-black dark:text-white"> {{$user->name}} </h3>
                        <p class="text-sm text-blue-600 mt-1 font-normal">{{ __('@') }}{{$user->name}}</p>
                    </div>
                </div>

                <!-- nav tabs -->
                <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                    <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">

                        <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden" 
                            uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                            
                            <li class="w-auto pr-2.5"> <a href="#"> Profilo </a> </li>
                            <li class="w-auto pr-2.5"> <a href="#"> Password</a> </li>
                            <li class="w-auto pr-2.5"> <a href="#"> Cancella Account</a> </li> 
                        </ul>
                    
                    </nav>
                            
                    <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl ml-1"></ion-icon> </a>
                    <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="next">  <ion-icon name="chevron-forward" class="text-2xl mr-1"></ion-icon> </a>
            
                </div> 


                <div id="setting_tab" class="uk-switcher md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm"> 
                    

                    <!-- tab user basic info -->
                    <div>                    
                        @include('profile.partials.update-profile-information-form')
                    </div>

                    <!-- tab password -->   
                    <div>
                        @include('profile.partials.update-password-form')
                    </div>

                    <!-- tab delete -->
                    <div>
                        @include('profile.partials.delete-user-form')
                    </div> 

                </div>
            </div>
        </div>

    </main>
</x-app-layout>
