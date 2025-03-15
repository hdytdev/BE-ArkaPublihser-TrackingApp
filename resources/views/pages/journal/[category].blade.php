<?php
use function Laravel\Folio\{name};
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Locked;
use App\Services\interface\JournalServiceInterface;
name('journal.index');
//component for list journal
new class extends Component {
    use WithPagination;
    public $category;
    public function rendering($view)
    {
        $view->title('Journal Internal');
    }
    #[Locked]
    function with(JournalServiceInterface $journalServiceInterface)
    {
        return [
            'journal' => ($this->journal = $journalServiceInterface->fetchByCategory($this->category)->paginate(5)),
        ];
    }

    public function delete($id, JournalServiceInterface $journal)
    {
        if ($journal->delete($id)) {
            $this->dispatch('journal-deleted');
            $this->dispatch('$refresh');
        }
        return;
    }
};
?>


<x-app-layout>
    @volt
       <div>

        @script
        <script>
            $wire.on('journal-deleted', () => {
                $wire.$refresh();
                Swal.fire({
                    title: "Succeess",
                    text: "Data berhasil dihapus",
                    icon: "success",
                });
            });
        </script>
    @endscript

    <div class="page-title pt-3 mb-1 d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Daftar Jurnal {{ $category }}</h4>
        <a wire:navigate href="{{ route('journal.add') }}" class="btn btn-primary px-3 all-order_btn-search w-auto">
            <span class="align-middle">Tambah Jurnal</span>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <div class="card">
                <div class="card-header">
                    @session('success')
                        <p class="alert alert-success">
                            {{ session('success') }}
                        </p>
                    @endsession
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Nama Jurnal</th>
                                <th>APC Charge</th>
                                <th>Lama Proses</th>
                                <th>Index</th>
                                <th>Focus And Scope</th>
                                <th>Akredistasi</th>
                                <th>Kategori</th>
                                <th>Link Jurnal</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($journal->count() > 0)
                                @foreach ($journal as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>Rp. {{ number_format($item->apc_charge, 2) }}</td>
                                        <td>{{ $item->long_process_time }}</td>
                                        <td>{{ $item->index }}</td>
                                        <td>{{ $item->focus_and_scope }}</td>
                                        <td>{{ $item->accreditation }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td><a target="_blank" class="btn btn-sm btn-primary"
                                                href="{{ $item->journal_link }}">Link Journal</a></td>
                                        <td>
                                            <button wire:confirm="Apakah anda yakin?"
                                                wire:click="delete({{ $item->id }})" class="btn btn-sm btn-danger">
                                                <i wire:loading.class="d-none" class="tf-icons bx bx-trash"></i>
                                                <div wire:loading class="spinner-border spinner-border-sm"
                                                    role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </button>
                                            <a wire:navigate class="btn btn-sm btn-warning"
                                                href="{{ route('journal.edit', ['id' => $item->id]) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th class="text-center" colspan="10">
                                        Tidak ada journal {{ ucwords($category) }}
                                    </th>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="all-order_card-footer">
                    <nav aria-label="Order Pagination">
                        {{ $journal->links('livewire::bootstrap') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>

       </div>
    @endvolt
</x-app-layout>
