<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="mb-0">Daftar Users</h5>
                <div class="d-flex order-controller">
                    <div>
                        <a href="{{ route('admin.user.new') }}" type="submit" style="color:white;"
                            class="btn btn-link btn-primary h-fit text-nowrap">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($users as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->role }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                @if ($item->active)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href={{ route('admin.user.edit',[ 'id'=>$item->id
                                    ]) }} class="btn-sm btn-warning btn"><i class="material-icons">Edit</i></a>
                                <button wire:konfirmasi='Apakah anda yakin?' wire:click="delete('{{ $item->id }}')"
                                    class="btn-sm  text-white btn-danger red btn"><i
                                        class="material-icons">Delete</i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Tidak ada data</td>
                        </tr>
                        @endforelse


                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>