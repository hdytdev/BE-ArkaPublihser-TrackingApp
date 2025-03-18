<div class="mb-3">
  <label @class([
    'form-label',
    'text-danger' => $errors->has($name)
  ]) for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input
      wire:model="{{$name}}"
      type="{{ $type }}"
      name="{{ $name }}"
      id="{{ $name }}"
      class="form-control @error($name) is-invalid @enderror"
      placeholder="{{ $placeholder }}"
      value="{{ old($name) }}"
  />
  @error($name)
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
