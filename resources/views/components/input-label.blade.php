@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#00000080]/50 ']) }}>
    {{ $value ?? $slot }}
</label>
