<div>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.home') }}" wire:navigate>Admin Dashboard</a>
            <div class="d-flex">
                {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> --}}
                <a href="{{ route('user.home') }}" class="btn btn-outline-primary me-2" wire:navigate>User Dashboard</a>
                <button class="btn btn-outline-danger" wire:click="logoutUser">Logout</button>
            </div>
        </div>
    </nav>
    <div class="container mt-3">

        <div class="row">
            <div class="col-md-3 px-5">
                <div class="nav nav-underline flex-column" x-data="{ currentRoute: '{{ Route::currentRouteName() }}' }">
                    <a href="{{ route('admin.posts') }}" wire:navigate :class="currentRoute == 'admin.posts' ? 'nav-link active' : 'nav-link'">Posts</a>
                    <a href="{{ route('admin.categories') }}" wire:navigate :class="currentRoute == 'admin.categories' ? 'nav-link active' : 'nav-link'">Categories</a>
                </div>
            </div>
            <div class="col-md-9">
                <h1>Categories</h1>
            </div>
        </div>

    </div>
</div>
