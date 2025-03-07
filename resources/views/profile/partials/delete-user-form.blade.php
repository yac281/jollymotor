<section class="space-y-6">

    <div class="md:flex items-start gap-16">
        <x-danger-button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                uk-toggle="target: #delete-profile"
            >{{ __('Delete Account') }}</x-danger-button>
    </div>

    <div class="hidden lg:p-20 uk- open" id="delete-profile" uk-modal="">
    
        <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium text-black"> Cancella Account </h2>

                <!-- close button -->
                <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
                    
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Ci dispiace non vedere più le tue custom qui') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Una volta cancellato il tuo account, qualsiasi contenuto relativo verrà cancellato. Conferma con la password la tua cancellazione.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                        />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-2 mt-3">
                        <x-danger-button class="ms-3">
                            {{ __('Cancella Account') }}
                        </x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
