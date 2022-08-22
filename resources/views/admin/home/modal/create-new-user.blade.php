<div class="modal fade createUser" wire:ignore.self tabindex="-1" id="modal-lg" style="display: none;"
     aria-hidden="true"
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
                        <label for=""><b class="text-red">*</b>Nama User</label>
                        <input type="text" class="form-control" placeholder="Nama user" wire:model="name_user">
                        <span class="text-danger"> @error('name_user')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for=""><b class="text-red">*</b>Email</label>
                        <input type="email" class="form-control" placeholder="Email" wire:model="email">
                        <span class="text-danger"> @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="roleUser"><b class="text-red">*</b>Role</label>
                        <select wire:model="role" id="roleUser" class="form-control">
                            <option>Choose Role..</option>
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
                        <label for=""><b class="text-red">*</b>Password</label>
                        <input type="text" class="form-control" placeholder="Password" wire:model="password">
                        <span class="text-danger"> @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" wire:model="logo" name="logo" class="custom-file-input" id="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                        </div>
                        @error('logo')
                        <span class="text-red">
                            {{ $message  }}
                        </span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <img src="{{$logo}}" alt=" logo-{{$name_user}}">
                            </div>
                            <div class="col">
                                @if($logo)
                                    <p class="fs-2 text-center my-0"><b>Preview Gambar</b></p>
                                    <img src="{{$logo->temporaryUrl()}}" alt="" class="img-fluid">
                                @endif
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
