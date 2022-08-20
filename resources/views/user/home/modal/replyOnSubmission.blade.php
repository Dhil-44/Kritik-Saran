<div class="modal modal-blur fade" id="modal-reply-sub" tabindex="-1" style="display: none;" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h5 class="modal-title">Scrollable modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body p-0 m-0">
                <section style="background-color: #ad655f;">
                    <div class="container">
                        <div class="row d-flex justify--content-center">
                            <div class="col-md-12 col-lg-10 col-xl-10 mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-start align-items-center">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                                <p class="text-muted small mb-0">
                                                    Shared publicly - Jan 2020
                                                </p>
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-4 pb-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                                        </p>
                                    </div>
                                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                        <div class="d-flex flex-start w-100">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="{{ auth('web')->user()->logo }}" alt="avatar" width="40"
                                                height="40" />
                                            <div class="form-outline w-100">
                                                <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                                                <label class="form-label" for="textAreaExample">Message</label>
                                            </div>
                                        </div>
                                        <div class="float-end mt-2 pt-1">
                                            <button type="button" class="btn btn-green btn">Post
                                                comment</button>
                                            <button type="button" class="btn btn-outline-dark btn">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-9 mt-1 offset-md-1">
                                <div class="card text-dark">
                                    <div class="card-body p-4">
                                        <h4 class="mb-0">Recent comments</h4>
                                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

                                        <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 07, 2021
                                                        <span class="badge bg-primary">Pending</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy
                                                    text
                                                    ever
                                                    since the 1500s, when an unknown printer took a galley of type
                                                    and
                                                    scrambled it.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-0" />

                                    <div class="card-body p-4">
                                        <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Lara Stewart</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 15, 2021
                                                        <span class="badge bg-success">Approved</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="text-success"><i
                                                            class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-danger"><i
                                                            class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">
                                                    Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text.
                                                    It
                                                    has roots in a piece of classical Latin literature from 45 BC,
                                                    making it
                                                    over 2000 years old. Richard McClintock, a Latin professor at
                                                    Hampden-Sydney College in Virginia, looked up one of the more
                                                    obscure
                                                    Latin words, consectetur, from a Lorem Ipsum passage, and going
                                                    through
                                                    the cites.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-0" style="height: 1px;" />

                                    <div class="card-body p-4">
                                        <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Alexa Bennett</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 24, 2021
                                                        <span class="badge bg-danger">Rejected</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">
                                                    There are many variations of passages of Lorem Ipsum available,
                                                    but
                                                    the
                                                    majority have suffered alteration in some form, by injected
                                                    humour,
                                                    or
                                                    randomised words which don't look even slightly believable. If
                                                    you
                                                    are
                                                    going to use a passage of Lorem Ipsum, you need to be sure.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-0" />

                                    <div class="card-body p-4">
                                        <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold mb-1">Betty Walker</h6>
                                                <div class="d-flex align-items-center mb-3">
                                                    <p class="mb-0">
                                                        March 30, 2021
                                                        <span class="badge bg-primary">Pending</span>
                                                    </p>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-pencil-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-redo-alt ms-2"></i></a>
                                                    <a href="#!" class="link-muted"><i
                                                            class="fas fa-heart ms-2"></i></a>
                                                </div>
                                                <p class="mb-0">
                                                    It uses a dictionary of over 200 Latin words, combined with a
                                                    handful of
                                                    model sentence structures, to generate Lorem Ipsum which looks
                                                    reasonable. The generated Lorem Ipsum is therefore always free
                                                    from
                                                    repetition, injected humour, or non-characteristic words etc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
