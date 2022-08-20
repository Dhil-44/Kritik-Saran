<div class="modal-body p-0 m-0">
    <section style="background-color: #cec1c0;">
        <div class="container">
            <div class="row d-flex justify--content-center">
                <div class="col-md-12 col-lg-10 col-xl-10 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <img class="rounded-circle shadow-1-strong me-3" id="img-user" wire:model="logo"
                                    src="" alt="avatar" width="60" height="60" />
                                <div>
                                    <h6 class="fw-bold text-primary mb-1" id="name-user"></h6>
                                    <p class="text-muted small mb-0" id="post_at-user"></p>
                                </div>
                            </div>

                            <p class="mt-3 mb-4 pb-2" id="message-user"></p>
                            <p id="test"></p>
                        </div>
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{ auth('web')->user()->logo }}"
                                    alt="avatar" width="40" height="40" />
                                <div class="form-outline w-100">
                                    <textarea class="form-control" wire:model="comment" id="" rows="4" style="background: #fff;">
                                    </textarea>
                                    <label class="form-label" for="textAreaExample">Message</label>

                                    <span class="text-danger">
                                        @error('comment')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" wire:click="postComment()" class="btn btn-green btn">
                                    Post comment
                                </button>
                                <button type="button" class="btn btn-outline-dark btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-9 mt-1 offset-md-1">
                    <div class="card text-dark">
                        @foreach ($comments as $co)
                            <div class="card-body p-4">
                                <h4 class="mb-0">Recent comments</h4>
                                <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                                <div class="d-flex flex-start">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar"
                                        width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold mb-1">{{ $co->user->name }}</h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                                {{ $co->post_at }}
                                                <span class="badge bg-primary">Pending</span>
                                            </p>
                                            <a href="#!" class="link-muted"><i
                                                    class="fas fa-pencil-alt ms-2"></i></a>
                                            <a href="#!" class="link-muted"><i
                                                    class="fas fa-redo-alt ms-2"></i></a>
                                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                                        </div>
                                        <p class="mb-0">{{ $co->message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                        @endforeach
                    </div>
                    <div class="mt-1">
                        {{ $comments->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
    </div>
</div>
