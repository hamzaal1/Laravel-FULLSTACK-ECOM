
@foreach ($products as $product )
    <p>test one work {{ $product->title }}</p>
@endforeach

@foreach ($images as $image )
    {{ $image->product->title }}
@endforeach