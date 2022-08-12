<div>
    <div class="card-body">
        <div class="space-y-4">
            <div>
                <h2 class="mb-3">Critics</h2>
                @foreach ($critics as $critic)
                    <div class="card mb-3 mt-2 shadow-md">
                        <div class="card-header">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar me-2 avatar-rounded"
                                            style="background-image: url(http://127.0.0.1:8000/dist/img/image/logo-kal.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="card-title">{{ $critic->getUser->name }}</div>
                                        <div class="card-subtitle">{{ $critic->created_at }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" p-2">
                            <p align="justify">{{ $critic->message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
