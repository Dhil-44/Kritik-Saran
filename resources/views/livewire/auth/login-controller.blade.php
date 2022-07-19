<form wire:submit.prevent="loginUser" class="card card-md" autocomplete="off">
    <img src="{{ asset('dist/img/image/logo-kalbis.jpg') }}" class="mx-auto mt-4" alt="logo kalbis"
        style="width:150px; height:150px">
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
            <input type="text" wire:model="email" class="form-control" placeholder="Username">
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
            <input type="password" wire:model="password" class="form-control" placeholder="Password">
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
