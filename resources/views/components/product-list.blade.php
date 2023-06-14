<div class="container py-10">
    <div class="flex justify-between mb-10">
        <h3 class=" text-3xl font-semibold uppercase">{{ $title }}</h3>
        <a href="/shop" class="font-bold">Explore More
            <i class="ms-1 fa-solid fa-arrow-right-long"></i>
        </a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 md:px-10">
       {{ $products }}
    </div>
</div>