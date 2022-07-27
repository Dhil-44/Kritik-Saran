<div class="modal fade editUser" wire:ignore.self tabindex="-1" id="edit-modal-user" style="display: none;"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateUser()">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" placeholder="Nama user" wire:model="upd_name_user">
                        <span class="text-danger"> @error('upd_name_user')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" wire:model="upd_email">
                        <span class="text-danger"> @error('upd_email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="roleUser">Role</label>
                        <select wire:model="upd_role" id="roleUser" class="form-control">
                            <option value="">Role</option>
                            {{-- <option value="{{ $role }}" class="selected">{{ $role }}</option> --}}
                            @foreach ($roles as $rl)
                                <option value="{{ $rl }}"
                                    class="@if ($rl == $upd_role) selected @else @endif">
                                    {{ $rl }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger">
                            @error('upd_role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    {{-- <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="Password" wire:model="password">
                        <span class="text-danger"> @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
                    <div class="form-group modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn">Save</button>

                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@push('scripts')
    <script>
        window.addEventListener('closeEditModal', () => {
            $('.editUser').modal('hide');
        })
        window.addEventListener('openEditOpen', (e) => {
            $('.editUser').modal('show');
        })
        window.addEventListener('openModal', () => {
            $('.createUser').modal('show');
            $('.createUser').find('span').html('');
        })
        window.addEventListener('closeAddUserModal', (e) => {
            $('.createUser').modal('hide');
        })
    </script>
@endpush
