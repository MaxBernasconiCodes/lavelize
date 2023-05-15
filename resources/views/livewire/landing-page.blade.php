    <div
    class="relative min-w-80 min-h-screen  bg-center flex flex-col justify-start items-center pt-24 pb-28 bg-dots
    bg-gradient-to-b from-indigo-900  via-slate-900 from via-60%  to-black selection:bg-indigo-500 selection:text-white" style="min-width:20rem;">

    @if (Route::has('login'))
        <div class="absolute w-full top-0 right-0 flex justify-end ">
            <div class="relative px-6 py-4 flex justify-between w-48  shadow-lg  rounded-bl-lg  drop-shadow-dark-md">
                @auth
                    <a href="{{ route('home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>

                    <form class="inline" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <input type="submit"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500"
                            value="Logout">
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    @endif
    <main class="w-full  max-w-7xl p-6 mx-auto grid grid-cols-3 gap-4 justify-start drop-shadow-light-sm">
        <div class="  p-4 pt-3 text-slate-100  ring-2 rounded-lg ring-white ">
            <livewire:cv-photo>
        </div>
        <div class="col-span-2 p-4 pt-3 text-slate-100  border-2 rounded-lg outline-white ">
            <h3 class="font-weight-bolder text-xl">Bio's title</h3>
            <p>Bio and presentation here</p>
        </div>
        <div class="p-4 pt-3 text-slate-100  border-2 rounded-lg outline-white ">
            <ul>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
                <li>a skill goes here</li>
            </ul>
        </div >
        <div class="p-4 pt-3 col-span-2 row-span-2 text-slate-100  border-2 rounded-lg outline-white">
            <livewire:project-overview>
            <livewire:project-overview>
            <livewire:project-overview>
            <livewire:project-overview>
        </div>
        <div class="p-4 pt-3 text-slate-100  border-2 rounded-lg outline-white ">
            <ul>
                <li>a fact of me goes here</li>
                <li>a fact of me goes here</li>
                <li>a fact of me goes here</li>
                <li>a fact of me goes here</li>
                <li>a fact of me goes here</li>
            </ul>
        </div >
        <div class="p-4 pt-3 col-span-3 text-slate-100  border-2 rounded-lg outline-white ">
            technologies i use go here
        </div>
    </main>

</div>

