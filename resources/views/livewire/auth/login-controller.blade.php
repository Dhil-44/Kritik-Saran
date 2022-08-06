<form wire:submit.prevent="loginUser" class="card card-md" autocomplete="off">
    <img src="{{ asset('dist/img/image/logo-kalbis.jpg') }}" class="mx-auto mt-4" alt="logo kalbis"
         style="width:150px; height:150px">

    @if (Session::has('fail'))
        <div class="alert alert-important alert-danger alert-dismissible mx-auto" role="alert" style="width:85%;">
            <div class="d-flex ">
                <div style="margin-right: 5px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <div>
                    <span class="text-white">
                        {{ Session::get('fail') }}
                    </span>

                </div>
            </div>
            <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif
    @if (Session::has('exception'))
        <div class="alert alert-important alert-danger alert-dismissible mx-auto" role="alert" style="width:85%;">
            <div class="d-flex ">
                <div style="margin-right: 5px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle"
                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <div>
                    <span class="text-white">
                        {{ Session::get('exception') }}
                    </span>

                </div>
            </div>
            <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
    @endif


    <div class="text py-0 mx-auto justify-content-center" style="width:85%; margin-bottom: -10px;">
        @error('email')
        <ul class="text-white card" style="background-color: #ec6033; margin-bottom: 1px;">
            <li class="">{{ $message }}</li>
        </ul>
        @enderror
        @error('password')
        <ul class="text-white card" style=" background-color: #ec6033">
            <li class="">{{ $message }}</li>
        </ul>
        @enderror
        </ul>
    </div>

    <div class="card-body">
        <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                </svg>
            </span>
            <input type="email" wire:model="email" class="form-control form-control-md" placeholder="Username">
            <span class="invalid-feedback">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                    <circle cx="12" cy="16" r="1"></circle>
                    <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                </svg>
            </span>
            <input type="password" wire:model="password" class="form-control form-control-md" placeholder="Password">
            <span class="invalid-feedback">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-success w-100">Login</button>
        </div>
    </div>
</form>
