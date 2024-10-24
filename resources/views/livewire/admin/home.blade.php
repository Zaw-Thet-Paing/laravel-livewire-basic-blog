<div>
    <div class="container mt-5">
        <h1>Admin Dashboard - {{ Auth::user()->name }}</h1>
        <button class="btn btn-danger" wire:click="logoutUser">Logout</button>
    </div>
</div>
