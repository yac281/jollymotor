<section>
    <form method="post" action="{{route('profile.vehicle.update', $vehicle->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <x-text-input id="user_id" name="user_id" type="hidden" value="{{$user->id}}" required autocomplete="user_id" />                    
        <x-text-input id="vehicle_id" name="vehicle_id" type="hidden" value="{{$vehicle->id}}" required autocomplete="vehicle_id" />                    

        <div class="space-y-6">
                <ul class="relative space-y-3 uk-accordion" uk-accordion="active: 0; multiple: true" "="">
                    <li class="uk-open">
                        <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                            Informazioni Generali
                            <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content">
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Tipo Veicolo </label>
                                <div class="flex-1 max-md:mt-4">
                                    <select id="type" name="type" class="bg-white shadow focus:!border-transparent focus:!ring-transparent max-sm:hidden md:w-40 dark:bg-dark2">
                                        <option value="1">Auto</option> 
                                        <option value="2">Moto</option>
                                    </select>                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('type')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Brand </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="brand" name="brand" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="brand" :value="old('brand', $vehicle->brand)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('brand')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Modello </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="model" name="model" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="model" :value="old('model', $vehicle->model)" />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('model')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Anno </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="year" name="year" type="number" step=0.01 class="lg:w-1/2 w-full" required autofocus autocomplete="year" :value="old('year', $vehicle->year)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('year')" />
                            </div>               
                        </div>
                    </li>
                    <li>
                        <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                            Customizzazioni
                            <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content">
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Modifiche al motore </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="engine_mods" name="engine_mods" type="text" class="w-full" required autofocus autocomplete="engine_mods" :value="old('engine_mods', $vehicle->engine_mods)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('engine_mods')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Modifiche estetiche </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="body_mods" name="body_mods" type="text" class="w-full" required autofocus autocomplete="body_mods" :value="old('body_mods', $vehicle->body_mods)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('body_mods')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Modifiche alle sospensioni </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="suspension_mods" name="suspension_mods" type="text" class="w-full" required autofocus autocomplete="suspension_mods" :value="old('suspension_mods', $vehicle->suspension_mods)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('suspension_mods')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Tipo di cerchi e gomme </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="wheels" name="wheels" type="text" class="w-full" required autofocus autocomplete="wheels" :value="old('wheels', $vehicle->wheels)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('wheels')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Tipo di scarico </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="exhaust" name="exhaust" type="text" class="w-full" required autofocus autocomplete="exhaust" :value="old('exhaust', $vehicle->exhaust)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('exhaust')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Modifiche agli interni </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="interior_mods" name="interior_mods" type="text" class="w-full" required autofocus autocomplete="interior_mods" :value="old('interior_mods', $vehicle->interior_mods)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('interior_mods')" />
                            </div>                        
                        </div>
                    </li>
                    <li>
                        <a class="flex items-center justify-between p-3 text-base bg-white shadow rounded-md text-black dark:text-white dark:bg-gray-800 group uk-accordion-title" href="#">
                            Prestazioni
                            <svg class="duration-200 group-aria-expanded:rotate-180 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <div class="p-2 dark:text-white/80 uk-accordion-content">
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Cavalli </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="horsepower" name="horsepower" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="horsepower" :value="old('horsepower', $vehicle->horsepower)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('horsepower')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Coppia (Nm) </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="torque" name="torque" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="torque" :value="old('torque', $vehicle->torque)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('torque')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Peso (Kg) </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="weight" name="weight" type="number" step=0.01 class="lg:w-1/2 w-full" required autofocus autocomplete="weight" :value="old('weight', $vehicle->weight)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Velocità massima (Km/h) </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="top_speed" name="top_speed" type="number" step=1 class="lg:w-1/2 w-full" required autofocus autocomplete="top_speed" :value="old('top_speed', $vehicle->top_speed)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('top_speed')" />
                            </div>
                            <br>
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32 text-right"> Accelerazione (s) </label>
                                <div class="flex-1 max-md:mt-4">
                                    <x-text-input id="acceleration" name="acceleration" type="number" step=0.01 class="lg:w-1/2 w-full" required autofocus autocomplete="acceleration" :value="old('acceleration', $vehicle->acceleration)" />                    
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('acceleration')" />
                            </div>                        
                        </div>
                    </li>
                </ul> 
        </div>

        <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
            <x-primary-button class="button lg:px-10 bg-primary text-white max-md:flex-1">{{ __('Save') }} <span class="ripple-overlay"></span></x-primary-button>
        </div>
    </form>
</section>