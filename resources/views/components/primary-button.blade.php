<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full h-9 items-center px-4 py-2 bg-merah-tua border border-transparent font-poppins font-medium text-md text-slate-100 tracking-widest hover:bg-merah-muda hover:text-white active:bg-[#9C1E20] focus:outline-none active:scale-95 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
