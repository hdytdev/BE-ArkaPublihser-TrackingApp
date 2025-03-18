<div x-data="{ useManual: @entangle('useManualInput') }">
    <label for="instansi" class="form-label">Instansi</label>
    <div class="input-group">
        <template x-if="useManual">
            <input wire:model="manual_instansi" type="text" class="form-control">
        </template>
        <template x-if="!useManual">
            <select wire:model="institution_id" class="form-control" name="" id="">
                <option value="" selected>--Pilih Instansi--</option>
                @foreach ($instansi as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </template>
        <button x-show="useManual" class="btn btn-sm btn-primary" type="button" wire:click="simpan">
            <span>Tambah</span>
            <span wire:loading wire:target="simpan">Loading...</span>
        </button>
        <button x-show="!useManual" class="btn btn-sm btn-primary" type="button" x-on:click="useManual = !useManual">
            <span class="tf-icons bx bx-plus"></span>
        </button>

    </div>

</div>
