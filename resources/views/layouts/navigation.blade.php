<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                         alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link>Главная</x-nav-link>
                        <x-nav-link>Каталог</x-nav-link>
                        <x-nav-link>О магазине</x-nav-link>
                        <x-nav-link>Гарантии</x-nav-link>
                    </div>
                </div>
            </div>

            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->


                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700"
                               role="menuitem" tabindex="-1" id="user-menu-item-0">Профиль</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                               role="menuitem" tabindex="-1" id="user-menu-item-2">Выход</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <a href="{{ route('login') }}"
                       class="active:bg-gray-900 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Вход</a>
                    <a href="{{ route('register') }}"
                       class="active:bg-gray-900 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Регистрация</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
