<div class="absolute top-3 right-3 text-center text-gray-700 hover:text-primary transition">
    <button 
        wire:click="addToWishlist('{{ Str::random(10) }}')"
        class="bg-transparent text-2xl"
    >
        <i class="fa-regular fa-heart"></i>
    </button>
</div>