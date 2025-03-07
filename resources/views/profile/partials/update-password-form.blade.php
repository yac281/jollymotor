<section>
    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')
        <div class="space-y-6 max-w-lg mx-auto">

            <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                <label class="md:w-40 text-right"> Current Password </label>
                <div class="flex-1 max-md:mt-4">
                    <x-text-input id="update_password_current_password" name="current_password" type="password" class="w-full" autocomplete="current-password" />
                </div>
            </div>


            <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                <label class="md:w-40 text-right"> New password </label>
                <div class="flex-1 max-md:mt-4">
                    <x-text-input id="update_password_password" name="password" type="password" class="w-full" autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                <label class="md:w-40 text-right"> Repeat password </label>
                <div class="flex-1 max-md:mt-4">
                    <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full" autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex items-center justify-center gap-4 mt-16">
                <x-primary-button class="button lg:px-10 bg-primary text-white max-md:flex-1">{{ __('Save') }}</x-primary-button>
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>