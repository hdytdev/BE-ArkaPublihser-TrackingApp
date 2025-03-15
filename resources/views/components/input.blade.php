@props([
    'name',
    'type',
    'placeholder' => null,
    'label' => null

])
<div class="mb-3">
    <label @class(['form-label', 'text-danger' => $errors->has($name)]) for="{{$name}}" class="form-label">{{ $label }}</label>
    <input name="{{$name}}" @class(['form-control', 'is-invalid' => $errors->has($name)]) wire:model="{{$name}}" type="{{$type}}"
        class="form-control" id="{{$name}}" placeholder="{{$placeholder}}" />
    @error($name)
        <p class="invalid-feedback">
            {{ $message }}
        </p>
    @enderror
</div>