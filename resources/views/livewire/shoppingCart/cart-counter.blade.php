<button data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example"
    class="text-center text-gray-700 hover:text-primary transition relative">
    <div class="text-2xl">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
    <div class="text-xs leading-3">Cart</div>
    <div
        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
        {{ $cart_count }}
    </div>
</button>
