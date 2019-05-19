    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                @foreach ($categories as $category)
                    <li><a href="/category/{{$category->name_category}}">{{$category->name_category}}</a></li>
                @endforeach
                <li><a href="/wishlist">Wishlist</a></li>
                @if(Auth::user()->role_id == 1)
                    <li><a href="/admin">Your Panel</a></li>
                @endif
            </ul>
        </div>
    </nav>