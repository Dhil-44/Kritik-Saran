<div class="col-md-12 col-lg-12 ">
    <div class="card-tabs ">
        <ul class="nav nav-tabs" role="tablist">
            @foreach($categories as $ctr)
                <li class="nav-item" role="presentation">
                    <a href="#tab-top-1" class="nav-link hover-shadow-lg"
                       wire:click.prevent="groupByThisCategory({{$ctr->id}})" data-bs-toggle="tab" aria-selected="true"
                       role="tab">{{$ctr->name_cat}}</a>
                </li>
            @endforeach
            <li class="nav-item col-auto ms-auto" role="presentation">
                <button class="btn btn-success d-none d-sm-inline-block" wire:click="openModalCreateModal()"
                        style="background: #2e7d32;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5"></path>
                        <path d="M3 6l9 6l9 -6"></path>
                        <path d="M15 18h6"></path>
                        <path d="M18 15l3 3l-3 3"></path>
                    </svg>
                    Send Message
                </button>
            </li>

        </ul>
        <div class="tab-content">
            <div id="tab-top-1" class="card tab-pane show active" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">tst</div>
                    @if($allMsgByCats === null)
                        <h3 class="text-warning"><b>Yeay! No data sent yet</b></h3>
                    @else
                        @foreach ($allMsgByCats as $msg)
                            <div class="card mb-3 mt-2 shadow-md">
                                <div class="card-header">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            <span class="avatar me-2 avatar-rounded"
                                                  style="background-image: url({{$msg->getUser->logo}})"></span>
                                            </div>
                                            <div class="col">
                                                <div class="card-title">{{$msg->getUser->name}}</div>
                                                <div class="card-subtitle">{{$msg->updated_at}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ribbon  {{$msg->getCategory->name_cat}}">
                                        {{$msg->getCategory->name_cat}}
                                    </div>

                                </div>
                                <div class=" p-2">
                                    <p align="justify">{{__($msg->message)}}</p>
                                </div>
                                <div class="">
                                    <a href=""></a>

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('user.home.modal.create-submission-form')
</div>
@push('scripts')
    <script>
        window.addEventListener('hide_modal_create_sub', function (e) {
            $('.create_submission').modal('hide');
        })
        window.addEventListener('openModalCreateModal', () => {
            $('.create_submission').find('.text-danger.clear').html('')
            $('.create_submission').modal('show')
        })
        window.addEventListener('closeModal', (e) => {
            $('.create_submission').modal('hide');
        })
    </script>
@endpush
