<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table User</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" wire:model="search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr class="py-0">
                                <th>#</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Logo</th>
                                <th class="text-center">
                                    {{-- <a class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#createuser">
                                        <i class="fas fa-add"></i>Create new
                                    </a> --}}
                                    <button type="button" class="btn btn-success btn-sm" wire:click="openModal()">
                                        <i class="fas fa-add"></i>
                                        Create new
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="tag tag-primary">{{ $user->role }}</span></td>
                                    <td>{{ __($user->logo) > 0 ? 'Ada logo' : 'NO LOGO' }}</td>
                                    <td class="text-center py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <button data-toggle="modal" wire:click="editUser({{ $user }})"
                                                class="btn btn-warning"><i class="fas fa-pen"></i></button>
                                            <button type="button" wire:click="deleteUser({{ $user->id }})"
                                                class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                            @empty

                                <h3 class="text-danger text-center">Data Not Found!</h3>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        {{-- tidak bisa --}}
        @include('admin.home.modal.create-new-user')
        @include('admin.home.modal.edit-user')
    </div>

</div>
