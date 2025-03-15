@props([
    'wire_target' => null,
    'icon' => "tf-icons bx bx-trash"
])

<button wire:confirm="Apakah anda yakin?" wire:click="{{ $wire_target }}" class="btn btn-sm btn-danger">
    <div wire:loading wire:target="{{ $wire_target }}" class="spinner-border spinner-border-sm" role="status"></div>
    <i wire:loading.class="d-none" wire:target="{{ $wire_target }}" class="{{$icon}}"></i>
</button>
