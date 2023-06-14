@props(['categories'])

@if ($categories->children->count()!==0)
    <button id="doubleDropdownButton.{{ $categories->title }}"
        data-dropdown-toggle="doubleDropdown.{{ $categories->title }}" data-dropdown-placement="right-start" type="button"
        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
        {{ $categories->title }}
        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <div id="doubleDropdown.{{ $categories->title }}"
        class="apply-flowbite-changes z-10 hidden bg-white divide-y divide-gray-100 w-44">
        <ul class="py-2 text-sm text-gray-700"
            aria-labelledby="doubleDropdownButton.{{ $categories->title }}">
            @foreach ($categories->children as $child)
                <x-category-item :categories="$child" />
            @endforeach
        </ul>
    </div>
@else
    <button
        type="button"
        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">
        {{ $categories->title }}
    </button>
@endif 
