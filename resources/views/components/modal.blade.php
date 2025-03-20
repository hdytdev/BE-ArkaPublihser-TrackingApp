 @props(['target' => null, 'action'])
 <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self id="{{ $target }}"
     tabindex="-1" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <form wire:submit.prevent="{{ $action }}" class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel1">Tambah Notes</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 {{ $slot }}
             </div>
             <div class="modal-footer">
                 <button wire:click="hideModal" type="button" class="btn btn-outline-secondary"
                     data-bs-dismiss="modal">
                     Tutup
                 </button>
                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
         </form>
     </div>
 </div>
 @script
     <script>
         const modal = document.getElementById("{{ $target }}");
         var modals = {}
         modalInstance = new bootstrap.Modal(modal)
         modals['{{ $target }}'] = modalInstance;
         //for re render
         $wire.on("re_render", () => {
             // $wire.$refresh();
             // $wire.$commit();
             if (modals) {
                 modals['{{ $target }}'].hide()
                 modals['{{ $target }}'].dispose();
             }
         })
         //for editable modal
         $wire.on('show_edit_modal', function() {
             modals['{{ $target }}'].show();
         })

     </script>
 @endscript
