<a
    class="venobox"
    @if($gall)
    data-gall="{{ $gall }}"
    @endif
    href="{{ $big ? $big : $small }}"
>
    <img src="{{ $small }}" {{ $attributes->merge(['class' => 'rounded']) }} />
</a>
