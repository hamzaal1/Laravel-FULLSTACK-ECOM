<form wire:submit.prevent="addToCart( '{{Str::random(10) }}' )" method="POST" class="flex items-center justify-between">
    @csrf
    {{-- <input type="hidden" wire:model="qnt.37de21dww"> --}}
    <span class="text-2xl md:text-3xl font-bold text-gray-900">$599</span>
    <button class="bg-primary text-white px-4 py-2 rounded-sm">
        <i class="fa-solid fa-cart-plus text-2xl"></i>
       <span class="ms-1">Add to cart</span>
    </button>
</form>
