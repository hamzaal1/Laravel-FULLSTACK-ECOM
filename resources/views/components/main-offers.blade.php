{{-- @props(['title'=>'info', 'message']) --}}
{{-- <div class="relative h-full">
    @foreach ($offers as $offer)
        <img class="bg-slate-700 w-full h-full object-cover" src={{ URL('/images/banner-bg.jpg') }} alt="">
        <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <h2 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                best collection for <br> home decoration
            </h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                accusantium perspiciatis, sapiente
                magni eos dolorum ex quos dolores odio</p>
            <div class="mt-12">
                <a href="#"
                    class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary">Shop
                    Now</a>
            </div>
        </div>
    @endforeach
</div> --}}

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ URL('/images/banner-bg.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <h2 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                    best collection for <br> home decoration
                </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                    accusantium perspiciatis, sapiente
                    magni eos dolorum ex quos dolores odio</p>
                <div class="mt-12">
                    <a href="#"
                        class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                        rounded-md hover:bg-transparent hover:text-primary">Shop
                        Now</a>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ URL('/images/banner-bg.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <h2 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                    best collection for <br> home decoration
                </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                    accusantium perspiciatis, sapiente
                    magni eos dolorum ex quos dolores odio</p>
                <div class="mt-12">
                    <a href="#"
                        class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                        rounded-md hover:bg-transparent hover:text-primary">Shop
                        Now</a>
                </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ URL('/images/banner-bg.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <h2 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                    best collection for <br> home decoration
                </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                    accusantium perspiciatis, sapiente
                    magni eos dolorum ex quos dolores odio</p>
                <div class="mt-12">
                    <a href="#"
                        class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                        rounded-md hover:bg-transparent hover:text-primary">Shop
                        Now</a>
                </div>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src={{ URL('/images/banner-bg.jpg') }} class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                <h2 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                    best collection for <br> home decoration
                </h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                    accusantium perspiciatis, sapiente
                    magni eos dolorum ex quos dolores odio</p>
                <div class="mt-12">
                    <a href="#"
                        class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                        rounded-md hover:bg-transparent hover:text-primary">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
