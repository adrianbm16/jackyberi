
@props(['name', 'price', 'image', 'description'])

<div class="shop-item" data-name="{{ $name }}" data-price="{{ $price }} €" data-description="{{ $description }}">
    {{-- <img src="{{ asset($image) }}" alt="{{ $name }}"> --}}
    <img src="{{ asset('images/hero.jpg') }}" alt="{{ $name }}">
    <div class="item-text">
        <h4>{{ $name }}</h4>
        <p>{{ $price }} €</p>
    </div>
</div>