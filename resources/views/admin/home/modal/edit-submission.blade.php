<div class="modal fade editSubmission" wire:ignore.self tabindex="-1" id="modal-lg" style="display: none;"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateSubmission">
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" disabled wire:model="id_cat">
                        <span class="text-danger"> @error('id_cat')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Pengirim </label>
                        <input type="text" class="form-control" disabled wire:model="id_user_pengirim">
                        <span class="text-danger"> @error('id_user_pengirim')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Pengirim </label>
                        <input type="text" class="form-control" disabled placeholder="Penerima"
                            wire:model="id_user_target">
                        <span class="text-danger"> @error('id_user_target')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea wire:model="message" class="form-control" rows="4">
                        </textarea>
                        <span class="text-danger"> @error('message')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
