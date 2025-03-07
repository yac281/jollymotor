<x-app-layout :user="$user">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="max-w-[1065px] mx-auto max-lg:-m-2.5">
            
                <!-- cover  -->
                <div class="bg-white lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">
    
                    <!-- cover -->
                    <div class="relative overflow-hidden w-full lg:h-72 h-48">    
                        <!-- overly -->    
                    </div>
    
                    <!-- user info -->
                    <div class="p-3">
    
                        <div class="flex flex-col justify-center md:items-center lg:-mt-48 -mt-28">
    
                            <div class="relative lg:h-48 lg:w-48 w-28 h-28 mb-4 z-10">
                                <div class="overflow-hidden rounded-full md:border-[6px] border-gray-100 shrink-0 dark:border-slate-900 shadow">
                                    <img src="{{ asset('storage/images/' . $user->image) }}" alt="" class="object-cover w-full h-full rounded-full lg:h-48 lg:w-48 w-28 h-28 bg-gradient-to-t from-black/60">                           
                                </div>
                            </div>
    
                            <h3 class="md:text-3xl text-base font-bold text-black dark:text-white"> {{ $user->name }} </h3>
    
                            <p class="mt-2 text-gray-500 dark:text-white/80"> {{ $user->description }} </p>
        
                        </div>
     
                    </div>
    
                    <!-- navigations -->
                    <div class="flex items-center justify-between mt-3 border-t border-gray-100 px-2 max-lg:flex-col dark:border-slate-700" 
                         uk-sticky="offset:50; cls-active: bg-white/80 shadow rounded-b-2xl z-50 backdrop-blur-xl dark:!bg-slate-700/80; animation:uk-animation-slide-top ; media: 992">
    
                        <nav class="flex gap-0.5 rounded-xl -mb-px text-gray-600 font-medium text-[15px]  dark:text-white max-md:w-full max-md:overflow-x-auto">
                            <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden" 
                                uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                                
                                <li class="w-auto pr-2.5"> <a href="#" class="inline-block py-3 leading-8 px-3.5">Feed</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#" class="inline-block py-3 leading-8 px-3.5">Custom <span class="text-xs pl-2 font-normal lg:inline-block hidden">2,680</span></a> </li>
                                <li class="w-auto pr-2.5"> <a href="#" class="inline-block py-3 leading-8 px-3.5">Crew</a> </li> 
                            </ul>
                        </nav>
                    </div>
    
                </div>
    
                <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">


                    <div id="setting_tab"  class="uk-switcher flex-1 xl:space-y-6 space-y-3">

                        <div>
                            <!-- add story -->
                            <div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
        
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-status"> 
                                        <div class="py-2.5 text-center dark:text-white"> Aggiungi Post </div>
                                    </div>
                                    <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100" uk-toggle="target: #create-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 8h.01" />
                                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                            <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                            <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                        </svg>
                                    </div>
                                    <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-sky-100/60 hover:bg-sky-100" uk-toggle="target: #create-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                            <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                        </svg>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                        
                        <div>
                            @include('profile.partials.add-vehicle-form')
                        </div>

                        <div>
                            <!-- add story -->
                            <div class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">
        
                                <div class="flex items-center gap-3">
                                    <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-status"> 
                                        <div class="py-2.5 text-center dark:text-white"> Aggiungi Crew </div>
                                    </div>
                                    <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100" uk-toggle="target: #create-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 8h.01" />
                                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                            <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                            <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                        </svg>
                                    </div>
                                    <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-sky-100/60 hover:bg-sky-100" uk-toggle="target: #create-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                            <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                        </svg>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
        
                    <!-- sidebar -->
                     
                    <div class="lg:w-[400px]"> 
          
                        <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                             uk-sticky="media: 1024; end: #js-oversized; offset: 80">
    
                            <div class="box p-5 px-6">
            
                                <div class="flex items-ce justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-lg"> Dettagli   </h3>
                                    <a href="{{ route('profile.edit') }}" class="text-sm text-blue-500">Modifica</a>
                                </div>
    
                                <ul class="text-gray-700 space-y-4 mt-4 text-sm dark:text-white/80">
    
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg> 
                                        <div>  Live In <span class="font-semibold text-black dark:text-white"> Cairo , Eygept  </span> </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                        </svg>
                                        <div>  Studied at <span class="font-semibold text-black dark:text-white"> University of Turkey  </span> </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                        </svg>
                                        
                                        <div>  Works at <span class="font-semibold text-black dark:text-white">  Envanto Martket </span> </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <div> In <span class="font-semibold text-black dark:text-white"> Relationship  </span></div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg>
                                        <div>  Flowwed By <span class="font-semibold text-black dark:text-white"> 3,240 People </span> </div>
                                    </li>
                            
                                </ul>
    
                                <!-- Hobbies -->
                                <div class="flex flex-wrap gap-1 text-sm mt-4 font-semibold capitalize">
                                    <div class="inline-flex items-center gap-2 py-0.5 px-2.5 border shadow rounded-full border-gray-100">
                                        Shoping
                                    </div>
                                    <div class="inline-flex items-center gap-2 py-0.5 px-2.5 border shadow rounded-full border-gray-100">
                                        code
                                    </div>
                                    <div class="inline-flex items-center gap-2 py-0.5 px-2.5 border shadow rounded-full border-gray-100">
                                        art
                                    </div>
                                    <div class="inline-flex items-center gap-2 py-0.5 px-2.5 border shadow rounded-full border-gray-100">
                                        design
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-1 text-center text-sm mt-4 mb-2 rounded-lg overflow-hidden">
    
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="assets/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
                                    <div class="relative w-full aspect-[4/3]">
                                        <img src="assets/images/avatars/avatar-6.jpg" alt="" class="object-cover w-full h-full inset-0">
                                    </div> 
    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
    
                </div>
    
            </div>
    </main>
   
    <!-- create status -->
    <div class="hidden lg:p-20 uk- open" id="create-status" uk-modal="">
   
        <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium text-black"> Create Status </h2>

                <!-- close button -->
                <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
     
            </div>
                    
            <div class="space-y-5 mt-3 p-2">
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
                <div>
                    <button class="inline-flex items-center py-1 px-2.5 gap-1 font-medium text-sm rounded-full bg-slate-50 border-2 border-slate-100 group aria-expanded:bg-slate-100 aria-expanded: dark:text-white dark:bg-slate-700 dark:border-slate-600" type="button"> 
                        Everyone
                        <ion-icon name="chevron-down-outline" class="text-base duration-500 group-aria-expanded:rotate-180"></ion-icon> 
                    </button>

                    <div  class="p-2 bg-white rounded-lg shadow-lg text-black font-medium border border-slate-100 w-60 dark:bg-slate-700"
                          uk-drop="offset:10;pos: bottom-left; reveal-left;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left ; mode:click">
                               
                        <form>
                            <label>
                                <input type="radio" name="radio-status" id="monthly1" class="peer appearance-none hidden" checked />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm">  Everyone </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="radio-status" id="monthly1" class="peer appearance-none hidden" />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Friends </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="radio-status" id="monthly" class="peer appearance-none hidden" />
                                <div class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Only me </div> 
                                    <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                        </form>

                    </div>
                </div>
                <div class="flex items-center gap-2"> 
                    <button type="button" class="button bg-blue-500 text-white py-2 px-12 text-[14px]"> Create</button>
                </div>
            </div>
        
        </div>

    </div>

</x-app-layout>
