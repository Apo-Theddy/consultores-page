 <header>
     <div class="-translate-y-full md:translate-y-0 md:mx-[10vw] lg:mx-[15vw] max-md:hidden py-6 px-2 flex items-center">
         <img src="../assets/icons/logo-consultores.png" alt="" class="max-md:hidden visible w-36 h-36">
     </div>
     <nav class="bg-blue-800 h-14 md:px-[10vw] lg:px-[15vw]">
         <input type="checkbox" name="menu" id="menu" class="peer hidden">
         <label for="menu" class="w-8 h-8 bg-menu absolute z-50 bg-center bg-cover md:hidden mt-2"></label>
         <ul
             class="peer-checked:mt-14 max-sm:h-min absolute max-md:bg-blue-500 max-md:w-full md:static uppercase flex flex-col md:flex-row justify-around md:text-white 
        -translate-y-full md:translate-y-0 peer-checked:translate-y-0 transition-all items-center text-center">
             @component('_components.nav-link')
                 @slot('title', 'Inicio')
                 @slot('href', '#')
             @endcomponent

             @component('_components.nav-link')
                 @slot('title', 'Nosotros')
                 @slot('href', '#')
             @endcomponent

             @component('_components.nav-link')
                 @slot('title', 'Catalogo')
                 @slot('href', '#')
             @endcomponent

             @component('_components.nav-link')
                 @slot('title', 'Eventos')
                 @slot('href', '#')
             @endcomponent

             @component('_components.nav-link')
                 @slot('title', 'Contactanos')
                 @slot('href', '#')
             @endcomponent
         </ul>
     </nav>
 </header>
