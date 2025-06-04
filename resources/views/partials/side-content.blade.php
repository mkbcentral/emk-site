 <!-- Sidebar -->
 <aside class="bg-gray-900 text-white w-64 flex-shrink-0 hidden md:block">
     <div class="p-4 border-b border-gray-700">
         <div class="flex items-center">
             <img src="{{ asset('logo.jpg') }}" alt="Cabinet Minier Logo" class="h-8 w-auto mr-2">
             <div>
                 <h1 class="text-xl font-bold">{{ config('app.name') }}</h1>
                 <p class="text-gray-400 text-sm">Tableau d'administration</p>
             </div>
         </div>
     </div>
     <nav class="mt-5">
         <ul>
             <li
                 class="px-4 py-3
                 {{ request()->routeIs('dashboard') ? 'bg-gray-800' : '' }}  flex items-center">
                 <i class="fas fa-tachometer-alt mr-3"></i>
                 <a href="{{ route('dashboard') }}">Tableau de bord</a>
             </li>
             <li class="px-4 py-3  {{ request()->routeIs('configuration') ? 'bg-gray-800' : '' }} flex items-center">
                 <i class="fas fa-cog mr-3"></i>
                 <a href="{{ route('configuration') }}">Configuration</a>
             </li>
             <li class="sidebar-item">
                 <div class="px-4 py-3 hover:bg-gray-800 flex items-center justify-between cursor-pointer">
                     <div class="flex items-center">
                         <i class="fas fa-cubes mr-3"></i>
                         <span>Contenu</span>
                     </div>
                     <i class="fas fa-chevron-down text-sm transition-transform sidebar-arrow"></i>
                 </div>
                 <ul class="sidebar-submenu hidden pl-10 bg-gray-950">
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('service') }}">Service</a></li>
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('about.content') }}">A propos</a></li>
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('mission.content') }}">Mission</a></li>
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('ceo.content') }}">Mandataire</a></li>
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('gallery.content') }}">Galerie</a></li>
                     <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                             href="{{ route('partner.content') }}">Partenaires</a></li>
                 </ul>
             </li>
         </ul>
     </nav>
 </aside>

 <!-- Mobile Sidebar -->
 <div id="mobileSidebar"
     class="fixed inset-0 flex z-40 md:hidden transform -translate-x-full transition-transform duration-300 ease-in-out">
     <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-900 text-white">
         <div class="absolute top-0 right-0 -mr-12 pt-2">
             <button id="closeSidebar"
                 class="flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-white">
                 <i class="fas fa-times text-white"></i>
             </button>
         </div>
         <div class="p-4 border-b border-gray-700">
             <div class="flex items-center">
                 <img src="{{ asset('logo.jpg') }}" alt="Cabinet Minier Logo" class="h-8 w-auto mr-2">
                 <div>
                     <h1 class="text-xl font-bold">Cabinet Minier</h1>
                     <p class="text-gray-400 text-sm">Tableau d'administration</p>
                 </div>
             </div>
         </div>
         <nav class="mt-5">
             <ul>
                 <li class="px-4 py-3 bg-gray-800 flex items-center">
                     <i class="fas fa-tachometer-alt mr-3"></i>
                     <span>Tableau de bord</span>
                 </li>
                 <li class="sidebar-item-mobile">
                     <div class="px-4 py-3 hover:bg-gray-800 flex items-center justify-between cursor-pointer">
                         <div class="flex items-center">
                             <i class="fas fa-gem mr-3"></i>
                             <span>Projets miniers</span>
                         </div>
                         <i class="fas fa-chevron-down text-sm transition-transform sidebar-arrow-mobile"></i>
                     </div>
                     <ul class="sidebar-submenu-mobile hidden pl-10 bg-gray-950">
                         <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-list mr-2"></i><a
                                 href="tous-les-projets.html">Tous les projets</a></li>
                         <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-plus mr-2"></i><a
                                 href="nouveau-projet.html">Nouveau projet</a></li>
                         <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-file-alt mr-2"></i><a
                                 href="rapports.html">Rapports</a></li>
                         <li class="px-4 py-2 hover:bg-gray-800"><i class="fas fa-file-alt mr-2"></i><a
                                 href="rapports.html">Rapports</a></li>
                     </ul>
                 </li>
             </ul>
         </nav>
     </div>
     <div class="flex-shrink-0 w-14"></div>
 </div>
