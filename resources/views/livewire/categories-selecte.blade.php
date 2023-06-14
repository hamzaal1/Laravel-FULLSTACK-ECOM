<select class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" name="categories_id" id="">
    <option value="" selected disabled> Select Offer Type ..</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        <x-category-item-select :categories="$category" />
    @endforeach
</select>
