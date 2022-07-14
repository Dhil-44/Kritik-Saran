<form wire:submit.prevent="loginUser" class="card card-md" autocomplete="off">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">Login to your account</h2>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input wire:model="email" type="email" class="form-control" placeholder="Enter email">
            @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-2">
            <label class="form-label">
                Password
            </label>
            <div class="input-group input-group-flat">
                <input type="password" wire:model="password" class="form-control" placeholder="Password"
                    autocomplete="off">
                <span class="input-group-text">
                    <a href="#" class="link-secondary" title="" data-bs-toggle="tooltip"
                        data-bs-original-title="Show password">
                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path
                                d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                            </path>
                        </svg>
                    </a>
                </span>

            </div>
            @error('password')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-success w-100">Login</button>
        </div>
    </div>
</form>
