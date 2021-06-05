<div class="col-md-4">
    <div class="card" style="border-radius: 2rem">

        <div class="card-body">
              <div class="list-group">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action rounded-pill {{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fas fa-book"></i> Dashboard</a><br>
                <a href="{{ route('posts') }}" class="list-group-item list-group-item-action rounded-pill {{ request()->routeIs('posts') ? 'active' : '' }}"><i class="fas fa-box"></i> Njoftimet e mia</a><br>
                <a href="{{ route('posts-requests') }}" class="list-group-item list-group-item-action rounded-pill {{ request()->routeIs('posts-requests') ? 'active' : '' }}">Kerkesat e mia</a><br>
                <a href="" class="list-group-item list-group-item-action rounded-pill">Wishing List</a><br>
                <a href="" class="list-group-item list-group-item-action rounded-pill">Kontaktet e mia</a><br>
                <a href="" class="list-group-item list-group-item-action rounded-pill">Profili Im</a>
              </div>
        </div>
    </div>
</div>
