@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#DEDEDEDE] border-2 outline-none focus:ring-0 focus:border-[#DEDEDEDE] text-black focus:bg-transparant shadow-sm h-9']) !!}>
