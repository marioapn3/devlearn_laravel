<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-72 z-10 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:hidden md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0 pt-6 md:pt-12"
            href="/">
            DevLearn | {{ auth()->user()->roles[0]['name'] }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                            href="/author">
                            DevLearn
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>
            </div>
            <a class="hidden md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                href="/">
                Devlearn
            </a>
            <!-- Divider -->
            <hr class="hidden md:block mb-3 mt-6 md:min-w-full">
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                menu
            </h6>
            {{-- <hr class="my-4 md:min-w-full" /> --}}
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                @foreach ($menu as $route => $content)
                    <li class="items-center">

                        <a href="{{ $route }}"
                            class="w-11/12 text-xs uppercase py-3 font-bold block  duration-100
                            @if (request()->getPathInfo() == $route )
                            {{  'bg-primary text-white px-2 rounded-xl ml-1' }}
                            @else
                            {{ 'text-blueGray-700 hover:text-blueGray-500 hover:ml-2' }}
                            @endif
                        ">
                            <i class="{{ $content[1] }} mr-2 text-sm opacity-75"></i>
                            {{ $content[0] }}
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</nav>
