<div wire:ignore.self class="modal fade create_feed_message" tabindex="-1" aria-hidden="true"
     aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create new Feed</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="createFeedMessage()">
                <div class="modal-body ">
                    <div class="form-group mb-2">
                        <label for="title" class="form-label">Title
                            <input type="text" id="title" wire:model="title" class="form-control">
                        </label>
                        @error('title')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="body" class="form-label">Message
                            <textarea class="form-control" id="body" wire:model="body" rows="5"></textarea>
                        </label>
                        @error('body')
                        <span class="text-red">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="category" class="form-label">Category
                            <input type="text" wire:model="category" class="form-control">
                        </label>
                        @error('category')
                        <span class="text-red">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success justify-content-end" type="submit">send</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
