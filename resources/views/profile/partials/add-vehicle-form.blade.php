<div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
        
    <div class="flex items-center gap-3">
        <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-vehicle"> 
            <div class="py-2.5 text-center dark:text-white"> Aggiungi Veicolo </div>
        </div>
    </div>
    
</div>

<!-- create vehicles -->
<div class="hidden lg:p-20 uk- open" id="create-vehicle" uk-modal="">
   
   <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

       <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
           <h2 class="text-sm font-medium text-black"> Aggiungi Veicolo </h2>

           <!-- close button -->
           <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
           </button>

       </div>
       <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="space-y-5 mt-3 p-2">
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
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Brand </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="brand" name="brand" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="brand" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('brand')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Modello </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="model" name="model" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="model" />
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('model')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <hr>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div class="md:flex items-center gap-10">
                    <label class="md:w-32 text-right"> Anno </label>
                    <div class="flex-1 max-md:mt-4">
                        <x-text-input id="year" name="year" type="text" class="lg:w-1/2 w-full" required autofocus autocomplete="year" />                    
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                
                <textarea class="w-full !text-black placeholder:!text-black !bg-white !border-transparent focus:!border-transparent focus:!ring-transparent !font-normal !text-xl   dark:!text-white dark:placeholder:!text-white dark:!bg-slate-800" name="" id=""  rows="6" placeholder="What do you have in mind?"></textarea>
            </div>

            <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">
                <button type="button" class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100 dark:bg-sky-950 dark:border-sky-900">  
                    <ion-icon name="image" class="text-base"></ion-icon>  
                    Image 
                </button>
                <button type="button" class="flex items-center gap-1.5 bg-teal-50 text-teal-600 rounded-full py-1 px-2 border-2 border-teal-100 dark:bg-teal-950 dark:border-teal-900">  
                    <ion-icon name="videocam" class="text-base"></ion-icon>  
                    Video 
                </button>
                <button type="button" class="flex items-center gap-1.5 bg-orange-50 text-orange-600 rounded-full py-1 px-2 border-2 border-orange-100 dark:bg-yellow-950 dark:border-yellow-900">  
                    <ion-icon name="happy" class="text-base"></ion-icon>  
                    Feeling
                </button>
                <button type="button" class="flex items-center gap-1.5 bg-red-50 text-red-600 rounded-full py-1 px-2 border-2 border-rose-100 dark:bg-rose-950 dark:border-rose-900">  
                    <ion-icon name="location" class="text-base"></ion-icon>  
                    Check in 
                </button>
                <button type="button" class="grid place-items-center w-8 h-8 text-xl rounded-full bg-secondery">  
                    <ion-icon name="ellipsis-horizontal"></ion-icon>
                </button>
            </div>

            <div class="p-5 flex justify-between items-center">
                <div class="flex items-center gap-2"> 
                    <button type="button" class="button bg-blue-500 text-white py-2 px-12 text-[14px]"> Create</button>
                </div>
            </div>
        </form>
   
   </div>

</div>