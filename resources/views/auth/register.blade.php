<x-guest-layout>
<div class="sm:flex">
    
    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">

      <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <!-- logo image-->
        <a href="#"> <img src="assets/images/logo.png" class="w-28 absolute top-10 left-10 dark:hidden" alt=""></a>
        <a href="#"> <img src="assets/images/logo-light.png" class="w-28 absolute top-10 left-10 hidden dark:!block" alt=""></a>

        <!-- logo icon optional -->
        <div class="hidden">
          <img class="w-12" src="assets/images/logo-icon.png" alt="Socialite html template">
        </div>

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5"> Registrati subito </h2>
          <p class="text-sm text-gray-700 font-normal">Se sei già registrato, <a href="{{ route('login') }}" class="text-blue-700" wire:navigate>{{ __('Accedi qui!') }}</a></p>
        </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        @csrf

        <div class="grid grid-cols-2 gap-4 gap-y-7">

            <!-- first name -->
            <div>
                <x-input-label for="name" :value="__('Username')" />
                <div class="mt-2.5">
                    <x-text-input wire:model="name" id="name" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" type="text" name="name" required autofocus autocomplete="name" />
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- email -->
            <div class="col-span-2">
                <x-input-label for="email" :value="__('Email')" />
                <div class="mt-2.5">
                    <x-text-input wire:model="email" id="email" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" type="email" name="email" required autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <div class="mt-2.5">
                    <x-text-input wire:model="password" id="password" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Conferma Password')" />
                <div class="mt-2.5">
                    <x-text-input wire:model="password_confirmation" id="password_confirmation" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="col-span-2">

              <label class="inline-flex items-center" id="rememberme">
                <input type="checkbox" id="accept-terms" class="!rounded-md accent-red-800" />
                <span class="ml-2">Accetto termini e condizioni di <a href="#" class="text-blue-700 hover:underline"> utilizzo </a> </span>
              </label>
              
            </div>

            <!-- submit button -->
            <div class="col-span-2">
                <x-primary-button class="button bg-primary text-white w-full">
                    {{ __('Registrati') }}
                </x-primary-button>
            </div>

          </div>

          <div class="text-center flex items-center gap-6"> 
            <hr class="flex-1 border-slate-200 dark:border-slate-800"> 
            O registrati con  
            <hr class="flex-1 border-slate-200 dark:border-slate-800">
          </div> 

          <!-- social login -->
          <div class="flex gap-2" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true">
            <a href="#" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"> <ion-icon name="logo-facebook" class="text-lg"></ion-icon> facebook  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-sky-600 text-white text-sm"> <ion-icon name="logo-twitter"></ion-icon> twitter  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-black text-white text-sm"> <ion-icon name="logo-github"></ion-icon> github  </a>
          </div>
    </form>






    


      </div>

    </div>
    @include('components.image_slider_guest')

  
  </div>

</x-guest-layout>


