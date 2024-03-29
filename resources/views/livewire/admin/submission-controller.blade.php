<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Submission</h3>

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
                        <tr>
                            <th>#</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Category</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Sent at</th>
                            <th>File</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($submissions as $submission)
                            <tr>
                                <td>{{ __($loop->iteration) }}</td>
                                <td>{{ __($submission->getUser->name) }}</td>
                                <td>{{ __($submission->getUserTarget->name) }}</td>
                                <td>
                                    <span class="tag tag-warning">{{ __($submission->getCategory->name_cat) }}</span>
                                </td>
                                <td>
                                    <span class="d-inline-block text-truncate " data-bs-toggle="tooltip"
                                          data-bs-placement="top" title=" {{ __($submission->message) }}"
                                          style="max-width: 100px;">
                                            {{ __($submission->message) }}
                                    </span>
                                </td>
                                <td class="">
                                    <span
                                        class="float-right badge {{ $submission->status == 'public' ? 'bg-blue': 'bg-danger' }}">
                                        {{ __($submission->status) }}
                                    </span>
                                </td>

                                <td>{{ __($submission->created_at) }}</td>
                                <td>
                                    <a href="{{$submission->filename ?? ''}}">lihat</a>
                                </td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" wire:click="editSubmission({{ $submission }})"
                                                class="btn btn-info">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        <button class="btn btn-danger" type="button"
                                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                wire:click="deleteSubmission({{$submission->id}})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @empty
                            <tbody>
                            <h3 class="text-danger text-center">No Data Found!</h3>
                            </tbody>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.home.modal.edit-submission')
</div>

@push('scripts')
    <script>
        window.addEventListener('showUpdateModal', () => {
            $('.editSubmission').modal('show');
        })
        window.addEventListener('closeUpdateModal', () => {
            $('.editSubmission').modal('hide');
        })
    </script>
@endpush
