<div class="modal fade editUser" wire:ignore.self tabindex="-1" id="edit-modal-user" style="display: none;"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateUser()">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" placeholder="Nama user" wire:model="name_user">
                        <span class="text-danger"> @error('name_user')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" wire:model="email">
                        <span class="text-danger"> @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="roleUser">Role</label>
                        <select wire:modal="role" id="roleUser" class="form-control">
                            @foreach ($roles as $rl)
                                {{-- <option value="{{ $role }}" class="selected">{{ $role }}</option> --}}
                                @if (!$rl == $role)
                                    <option value="{{ $rl }}" class="">{{ $rl }}</option>
                                @endif
                            @endforeach

                        </select>
                        <span class="text-danger">
                            @error('role')
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
    </script>
@endpush