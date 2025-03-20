<div class="row">
  <div class="col-lg-12 col-md-12 order-1">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header pb-0">{{ $this->id ? 'Update' : 'Isi' }} Detail Customer</h5>
          <form wire:submit.prevent="save" class="row px-4">
            <div class="col-md-6">
              <div class="card-body px-0">
                <x-form.input name="name" label="Nama Lengkap" placeholder="Nama Lengkap" />
                <x-form.input name="phone_number" label="Nomor Telepon" placeholder="Nama Lengkap" />
                <x-form.input name="email" label="Alamat Email" placeholder="Nama Lengkap" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="card-body px-0">
                <x-form.input name="regional_origin" label="Asal Daerah" placeholder="Asal Daerah" />
                <div class="mb-3">
                  <livewire:form.select-instansi wire:model="institution_id" />
                  @error('institution_id')
                  <span class="invalid-feedback d-block">{{ $message }}</span>
                  @enderror
                </div>
                <x-form.input name="position" label="Jabatan" placeholder="Asal Daerah" />
                <div class="mt-2 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button wire:click="$wire.redirect('/login')" type="reset"
                    class="btn btn-outline-secondary">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@script
<script>
  $wire.on("customer_saved", (e) => {
    if (e) {
      Swal.fire({
        title: "Success",
        icon: "success",
        text: "Data berhasil di simpan"
      })
    } else {
      Swal.fire({
        title: "Gagal",
        icon: "error",
        text: "Data gagal di simpan"
      })
    }
  })
</script>
@endscript