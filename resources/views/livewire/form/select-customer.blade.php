<div class="mb-0">
  <label for="exampleDataList" class="form-label">Customer</label>
  <select wire:ignore class="form-control select_custoemer">
      <option value="">-- Select Customers ---</option>
      @foreach ($customers as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
      @endforeach
  </select>
  @script
      <script>
          $(document).ready(function() {
              $('.select_custoemer').select2({
                theme: "bootstrap-5"
              });
              $('.select_custoemer').on('select2:select', (e) => {
                  $wire.$set("customer_id", e.params.data.id)
              })
              Livewire.hook('morph.updating', ({
                  el,
                  component,
                  toEl,
                  skip,
                  childrenOnly
              }) => {
                  attr = toEl.getAttribute('class')
                  if (String(attr).includes('select_custoemer')) {
                      $(el).select2({
                          theme: "bootstrap-5"
                      })
                  }
              })
          })
      </script>
  @endscript
</div>
