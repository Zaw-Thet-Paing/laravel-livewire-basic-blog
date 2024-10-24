<div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Login Form</h1>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="loginUser">
                            <div class="mb-3">
                                <label>Email : </label>
                                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Password : </label>
                                <div class="input-group" x-data="{ status: true }">
                                    <input :type="status ? 'password' : 'text'" wire:model="password" class="form-control @error('password') is-invalid @enderror">
                                    <span class="input-group-text" style="cursor: pointer" x-on:click="status = !status">
                                        <i :class="status ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye'"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success w-100">
                                    Login
                                    <div class="spinner-border spinner-border-sm" wire:loading wire:target="loginUser"></div>
                                </button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('register') }}" wire:navigate>Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
