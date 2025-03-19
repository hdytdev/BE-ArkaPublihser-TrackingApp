<div class="mb-0">
    <label for="exampleDataList" class="form-label">Nama Jurnal</label>
    <select wire:ignore class="form-control select_journal">
        <option value="">-- Select Journal ---</option>
        @foreach ($journals as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    @script
        <script>
            $(document).ready(function() {
                $('.select_journal').select2({
                    theme: "bootstrap-5"
                });
                $('.select_journal').on('select2:select', (e) => {
                    $wire.$set("journal_id", e.params.data.id)
                })
                Livewire.hook('morph.updating', ({
                    el,
                    component,
                    toEl,
                    skip,
                    childrenOnly
                }) => {
                    attr = toEl.getAttribute('class')
                    if (String(attr).includes('select_journal')) {
                        $(el).select2({
                            theme: "bootstrap-5"
                        })
                    }
                })
            })
        </script>
    @endscript
</div>
