<div class="modal fade editUser" wire:ignore.self tabindex="-1" id="edit-modal-user" style="display: none;"
     aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
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

                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" wire:model="upd_logo" name="logo" class="custom-file-input"
                                       id="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                        </div>
                        @error('upd_logo')
                        <span class="text-red">
                            {{ $message  }}
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <img src="{{$logo}}" alt=" logo-{{$upd_name_user}}">
                            </div>
                            <div class="col">
                                @if($upd_logo)
                                    <p class="fs-2 text-center my-0"><b>Preview Gambar</b></p>
                                    <img src="{{$upd_logo->temporaryUrl()}}" alt="{{$upd_logo->extension()}}" class="img-fluid">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn">Save</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
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
