<div class="mb-3">
    <label for="{{ $id }}"
        class="form-label {{ $attributes->has('required') ? 'required' : '' }}">{{ $label }}</label>
    <input type="{{ $type }}" {{ $attributes->merge(['class' => 'form-control']) }} id="{{ $id }}"
        placeholder="{{ $placeholder }}" {{ $attributes }}>
</div>
