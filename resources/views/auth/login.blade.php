<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="sm:flex">
    
    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">

      <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <!-- logo image-->
        <a href="#"> <img src="assets/images/logo.png" class="w-28 absolute top-10 left-10 dark:hidden" alt=""></a>
        <a href="#"> <img src="assets/images/logo-light.png" class="w-28 absolute top-10 left-10 hidden dark:!block" alt=""></a>

        <!-- logo icon optional -->
        <div class="hidden">
          <img class="w-12" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Socialite html template">
        </div>

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5"> Accedi al tuo account </h2>
          <p class="text-sm text-gray-700 font-normal">Se non sei ancora registrato. <a href="{{ route('register') }}" class="text-blue-700" wire:navigate>{{ __('Registrati qui!') }}</a></p>
        </div>
 

        <!-- form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        @csrf
  
        <!-- email -->
          <div>
                <x-input-label for="email" :value="__('Email')" />
                <div class="mt-2.5">
                    <x-text-input name="email" id="email" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" type="email" name="email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>
          </div>
          <!-- password -->
          <div>
            <x-input-label for="password" :value="__('Password')" />
            <div class="mt-2.5">
                <x-text-input name="password" id="password" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
            </div>
          </div>

          <div class="flex items-center justify-between">

            <div class="flex items-center gap-2.5">
                <input name="remember" id="remember" type="checkbox" name="remember">
                <span for="rememberme" class="font-normal">{{ __('Ricordami') }}</span>
            </div>
            @if (Route::has('password.request'))
                <a class="text-blue-700" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Password dimenticata?') }}
                </a>
            @endif
          </div>

          
          <!-- submit button -->
          <div>
            <x-primary-button class="button bg-primary text-white w-full">
                {{ __('Accedi') }}
            </x-primary-button>
          </div>

          <div class="text-center flex items-center gap-6"> 
            <hr class="flex-1 border-slate-200 dark:border-slate-800"> 
            O accedi tramite  
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

    <!-- image slider -->
     @include('components.image_slider_guest')
  </div>
</x-guest-layout>


