@script

<script>
  $wire.on('saved',(value)=>{
    console.log(value)
    if( value?.[0]?.success ) {
      Swal.fire({
        icon : "success",
        title : "Berhasil",
        text : value?.[0]?.message,
      })
    }else{
      Swal.fire({
        icon : "error",
        title : "Gagal",
        text : value?.[0]?.message,
      })
    }
  })
</script>

@endscript
<div>

  <div class="page-title pt-3 mb-1">
        <h4>Tambah Jurnal</h4>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <form wire:submit.prevent="save" class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header pb-0">Isi Detail Jurnal</h5>
                        <div class="row px-4">
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                  <x-form.input name="issn" label="ISSN" />
                                  <x-form.input name="abbreviation" placeholder="Singkatan jounral Contoh:JPM" label="Singkatan" />
                                  <x-form.input name="name" label="Nama Jurnal" />
                                  <x-form.input name="apc_charge" label="Apc Charge" />
                                  <x-form.input name="processing_time" label="Lama Proses" />
                                  <x-form.input name="publisher" label="Nama Publisher" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body px-0">
                                  <x-form.input name="index" label="INDEX" />
                                  <x-form.input name="journal_link" label="Journal Link" />
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kategori Jurnal</label>
                                        <select wire:model="category" class="form-select" id="inputGroupSelect01">
                                            <option selected value="">Choose...</option>
                                            <option value="internal">Jurnal Internal</option>
                                            <option value="external">Jurnal Eksternal</option>
                                            <option value="scopus">Jurnal Scopus</option>
                                        </select>
                                    </div>
                                    <x-form.input name="accreditation" label="Akreditasi" />
                                    <x-form.input name="focus" label="Focus" />
                                    <x-form.input name="scope" label="Scope" />
                                    <div class="mt-2 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
