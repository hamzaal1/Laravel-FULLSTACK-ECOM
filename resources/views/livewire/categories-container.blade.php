<div class="px-8 py-4 bg-primary flex items-center cursor-pointer relative group">
    <span id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white">
        <i class="fa-solid fa-bars"></i>
        <span class="capitalize ml-2 text-white">All Categories</span>
    </span>
    <!-- dropdown -->
    <div
        id="dropdown"
        class="z-30 absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed  transition duration-300 ">
        @foreach ($categories as $category)
            <x-category-item :categories="$category" />
        @endforeach
    </div>
</div>