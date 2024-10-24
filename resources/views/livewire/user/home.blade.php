<div>
    <div class="container mt-3">
        <h1>User - {{ Auth::user()->name }}</h1>
        <button class="btn btn-danger" wire:click="logoutUser">Logout</button>
    </div>
</div>
