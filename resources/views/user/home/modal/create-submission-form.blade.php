<div wire:ignore.self class="modal fade create_submission" id="modal-large" tabindex="-1" aria-hidden="true"
    aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submission Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="createSubmission()">
                <div class="modal-body">
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Assign to</label>
                        <div class="col">
                            <select class="form-select" wire:model="id_user_target">
                                <option>Choose</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('id_user_target')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Category</label>
                        <div class="col">
                            <select class="form-select" wire:model="id_cat">
                                <option>--Choose category--</option>
                                @foreach ($categories as $ct)
                                    <option value="{{ $ct->id }}"> {{ $ct->name_cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('id_cat')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Message</label>
                        <div class="col">
                            <textarea wire:model="message" id="" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    {{-- file --}}
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Attachments</label>
                        <div class="col">
                            <input type="file" wire:model="fill_name" class="form-control sm:form-control">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            tinyMCE.init({
                selector: '#tinymce-mytextarea',
                height: 300,
                menubar: false,
                statusbar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
            });
        })
        // @formatter:on
    </script>
@endpush
