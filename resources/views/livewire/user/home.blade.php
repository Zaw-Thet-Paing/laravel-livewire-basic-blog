<div>
    <div class="container mt-3">
        <h1>User - {{ Auth::user()->name }}</h1>
        @if (Auth::user()->role === 'admin')
            <a href="{{ route('admin.home') }}" wire:navigate>Admin Page</a>
        @endif
        <button class="btn btn-danger" wire:click="logoutUser">Logout</button>
    </div>
</div>
