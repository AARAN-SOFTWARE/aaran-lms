<div x-show="sidebarOpen" x-transition.opacity.duration.600ms @click="sidebarOpen = false"
     class="fixed inset-0 bg-black bg-opacity-30 z-20 "></div>
<nav x-cloak
     class="fixed inset-0 transform duration-500 z-30 w-80 bg-gray-900 text-white h-auto print:hidden"
     :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': sidebarOpen === false}">
    <div class="flex justify-between px-5 py-6">
        <a href="{{route('dashboard')}}" class="flex gap-3">

            <x-aaran-ui::logo.cxlogo :icon="'dark'" class="h-10 w-auto block"/>

            <span class="font-bold text-2xl sm:text-3xl tracking-widest">Codexsun</span>
        </a>
        {{-- {{config('app.name')}} --}}
        <button
            class="focus:outline-none focus:bg-gray-700 hover:bg-gray-800  rounded-md group"
            @click="sidebarOpen = false"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-7 w-7 text-gray-500 group-hover:text-white"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
    </div>

    <div class=" bg-gray-900 text-white h-full overflow-y-scroll">
        <ul class="flex flex-col py-6 space-y-1"
            x-data="{selected:null}">


            <x-aaran-ui::menu.app.sub.prologue/>

            <x-aaran-ui::menu.app.sub.installation/>

            <x-aaran-ui::menu.app.sub.architecture/>

            <x-aaran-ui::menu.app.sub.basics/>


            @if(\Aaran\Assets\Features\Customise::hasBlog())
                <x-aaran-ui::menu.app.sub.blog/>
            @endif

            <x-aaran-ui::menu.app.sub.logout/>

        </ul>
    </div>
</nav>
