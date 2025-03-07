<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="space-y-6">

            <div class="md:flex items-center gap-10">
                <label class="md:w-32 text-right"> Avatar </label>
                <div class="flex-1 max-md:mt-4">
                    <input id="image" type="file" name="image" accept="image/*" />
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>

            <div class="md:flex items-center gap-10">
                <label class="md:w-32 text-right"> Username </label>
                <div class="flex-1 max-md:mt-4">
                    <x-text-input id="name" name="name" type="text" class="lg:w-1/2 w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            
            <div class="md:flex items-center gap-10">
                <label class="md:w-32 text-right"> Email </label>
                <div class="flex-1 max-md:mt-4">
                    <x-text-input id="email" name="email" type="email" class="w-full" :value="old('email', $user->email)" required autocomplete="username" />
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
            </div> 

            <div class="md:flex items-start gap-10">
                <label class="md:w-32 text-right"> Biografia </label>
                <div class="flex-1 max-md:mt-4">
                    <textarea name="description" class="w-full" rows="5" placeholder="Inserisci la tua bio">{{old('description', $user->description)}}</textarea>
                </div>
            </div>

        </div>

        <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
            <x-primary-button class="button lg:px-10 bg-primary text-white max-md:flex-1">{{ __('Save') }} <span class="ripple-overlay"></span></x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
