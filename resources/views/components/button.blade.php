<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium']) }}>
    {{ $slot }}
</button>
