<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ __('Menu') }}</div>

        <div class="card-body">
              <div class="list-group">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a><br>
                <a href="{{ route('posts') }}" class="list-group-item list-group-item-action {{ request()->routeIs('posts') ? 'active' : '' }}">Njoftimet e mia</a><br>
                <a href="{{ route('posts-requests') }}" class="list-group-item list-group-item-action {{ request()->routeIs('posts-requests') ? 'active' : '' }}">Kerkesat e mia</a><br>
                <a href="" class="list-group-item list-group-item-action">Wishing List</a><br>
                <a href="" class="list-group-item list-group-item-action">Kontaktet e mia</a><br>
                <a href="" class="list-group-item list-group-item-action">Profili Im</a>
              </div>
        </div>
    </div>
</div>
