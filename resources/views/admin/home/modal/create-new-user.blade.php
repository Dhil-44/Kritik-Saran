<div class="modal fade createUser" wire:ignore.self tabindex="-1" id="modal-lg" style="display: none;" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create new User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createNewUser()">
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
<<<<<<< HEAD
                        <select wire:model="role" id="roleUser" class="form-control">
                            <option>
                                <h6 class="text-muted">--choose role--</h6>
                            </option>
=======
                        <select wire:modal="role" id="roleUser" class="form-control">
<<<<<<< HEAD
                            <option>Choose Role..</option>
=======
                            <option>Role</option>
>>>>>>> fe494af6529a33117bc9c198f93b0c51d5558aae
>>>>>>> d610f662e6f26a02780809719e5a617571a40f90
                            @foreach ($roles as $rl)
                                <option value="{{ $rl }}">{{ __($rl) }}</option>
                            @endforeach

                        </select>
                        <span class="text-danger"> @error('role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="Password" wire:model="password">
                        <span class="text-danger"> @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
