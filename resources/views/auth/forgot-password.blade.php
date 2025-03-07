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
          <h2 class="text-2xl font-semibold mb-1.5"> Recupera la tua password </h2>
          <p class="text-sm text-gray-700 font-normal">Te la ricordi? <a href="{{ route('login') }}" class="text-blue-700" wire:navigate>{{ __('Accedi qui!') }}</a></p>
        </div>
 

        <!-- form -->
        <form method="POST" action="{{ route('password.email') }}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        @csrf
  
        <!-- email -->
          <div>
                <x-input-label for="email" :value="__('Email')" />
                <div class="mt-2.5">
                    <x-text-input name="email" id="email" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" type="email" name="email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>
          </div>
          
          <!-- submit button -->
          <div>
            <x-primary-button class="button bg-primary text-white w-full">
                {{ __('Invia email') }}
            </x-primary-button>
          </div>
          
        </form>


      </div>

    </div>

    <!-- image slider -->
     @include('components.image_slider_guest')
  </div>
</x-guest-layout>


