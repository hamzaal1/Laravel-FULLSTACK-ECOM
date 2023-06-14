<nav class="w-full bg-gray-100 font-extralight py-1 ps-4 hidden md:block">Free Shipping over 100$</nav>
<header class="py-4 shadow-sm ">
    <div class="container md:px-32 flex items-center justify-between">
        <a href="index.html">
            {{-- <img src="../assets/images/logo.svg" alt="Logo" class="w-32"> --}}
            Logo
        </a>

        <div class="w-full max-w-xl relative flex">
            <span class="absolute left-4 top-3 text-lg text-gray-400">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" name="search" id="search"
                class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
                placeholder="search">
            <button
                class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
        </div>

        <div class="flex items-center space-x-4">
            <livewire:wishlist-cart.wishlist-counter />
            @livewire('cart-counter')
            @if (Auth::check())
                <div class="flex items-center cursor-pointer relative group ">
                    <span class="text-center">
                        <i class="fa-regular fa-user text-2xl"></i>
                        <div class="text-xs leading-3">{{ Auth::user()->name }}</div>
                    </span>
                    <!-- dropdown -->
                    <div
                        class="rounded-sm z-30 absolute w-auto -left-10 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                        <a href="/profile" class="flex items-center px-10 py-3 hover:bg-gray-100 transition">
                            <i class="fa-regular fa-user"></i>
                            <span class="ml-6 text-gray-600 text-base">profile</span>
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="bg-transparent flex items-center px-10 py-3 hover:bg-gray-100 transition">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span class="ml-6 text-gray-600 text-base">logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href={{ route('login') }} class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                        <div class="text-xs leading-3">Account</div>
                    </div>
                </a>
            @endif
        </div>
    </div>
</header>
<!-- ./header -->

<!-- navbar -->
<nav class="bg-gray-800">
    <div class="container mx-auto flex">
        <livewire:categories-container />

        <div class="flex items-center justify-between flex-grow pl-12">
            <div class="flex items-center space-x-6 capitalize">
                <a href="../index.html" class="text-gray-200 hover:text-white transition">Home</a>
                <a href="pages/shop.html" class="text-gray-200 hover:text-white transition">Shop</a>
                <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
            </div>
            {{-- <a href="#" class="text-gray-200 hover:text-white transition">Login/Register</a> --}}
        </div>
    </div>

    {{-- {{ Cart Drawer }} --}}
    <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500"><svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>Right drawer</h5>
       <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center" >
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Close menu</span>
       </button>
       <p class="mb-6 text-sm text-gray-500">Supercharge your hiring by taking advantage of our <a href="#" class="text-blue-600 underline font-medium hover:no-underline">limited-time sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1 design job board.</p>
       <div class="grid grid-cols-2 gap-4">
          <a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Learn more</a>
          <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">Get access <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
       </div>
    </div>


</nav>
<!-- ./navbar -->
