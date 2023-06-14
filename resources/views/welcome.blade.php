@php
    $offers = [
        [
            'title' => 'Best Collection For
    Dashboard Decoration',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam
    accusantium perspiciatis, sapiente magni eos dolorum ex quos dolores odio',
            'image' => 'banner-bg.jpg',
            'slug' => '2qwwgs',
        ],
    ];
    
@endphp

<x-guest-layout>
    <x-slot:title>
        Dashboard page
        </x-slot>
        <x-main-offers color="red" :offers='$offers' />
        <x-our-service />

        <x-product-list>
            <x-slot:title>
                TOP NEW ARRIVAL
                </x-slot>

                <x-slot:products>
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    </x-slot>
        </x-product-list>

        <div id="default-carousel" class="container relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <x-promotion :promotion="$offers" />
                <x-promotion :promotion="$offers" />
                <x-promotion :promotion="$offers" />
                <x-promotion :promotion="$offers" />
            </div>
        </div>

        <x-product-list>
            <x-slot:title>
                most relevant
                </x-slot>

                <x-slot:products>
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    <x-product :product="$offers" />
                    </x-slot>
        </x-product-list>

</x-guest-layout>
