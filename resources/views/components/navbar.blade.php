<nav x-data="{open : false}" class="px-2 py-2.5 text-white bg-gray-800 h-auto fixed w-full z-20 top-0 left-0 border-gray-200 sm:px-4">
    <div class="container flex flex-wrap items-center justify-between">
        <a href="/">
        <span class="self-center text-xl font-semibold whitespace-nowrap">
            {{ $data['title'] }}
        </span>
        </a>
        <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </button>
        <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
        <x-menu-list />
        </div>
    </div>
    <div  class="hidden w-full md:block md:w-auto" id="navbar-main">
        <x-menu-list />
    </div>
</div>

</nav>
