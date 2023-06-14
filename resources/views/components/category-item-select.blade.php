@props(['categories'])

@foreach ($categories->children as $child)
    <option value="{{ $child->id }}"> &nbsp; {{ $child->title }}</option>
    <x-category-item-select :categories="$child"/>
@endforeach
