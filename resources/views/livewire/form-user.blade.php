<div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Login</div>
        </div>
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <x-form.input name="name" label="Nama lengkap" />
                    <x-form.input name="email" label="Email" />
                    <x-form.input name="password" label="Password" />
                    <x-form.input name="password_confirmation" label="Konfirmasi Password" />
                    {{-- Radio Status Aktif --}}
                    <div class="mb-3">
                        <label class="form-label d-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="aktif1" value="1" wire:model="active"
                                name="active">
                            <label class="form-check-label" for="aktif1">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="aktif0" value="0" wire:model="active"
                                name="aktif">
                            <label class="form-check-label" for="aktif0">Tidak Aktif</label>
                        </div>
                        @error('active')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Radio Role --}}
                    <div class="mb-3">
                        <label class="form-label d-block">Peran</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="roleAdmin" value="admin" wire:model="role"
                                name="role">
                            <label class="form-check-label" for="roleAdmin">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="roleSuperAdmin" value="super_admin"
                                wire:model="role" name="role">
                            <label class="form-check-label" for="roleSuperAdmin">Super Admin</label>
                        </div>
                        @error('role')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                    <button class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>