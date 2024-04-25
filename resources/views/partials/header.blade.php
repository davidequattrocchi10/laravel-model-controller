<header class="bg-dark">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-primary text-white' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'title' ? 'bg-primary text-white' : ''}}" href="{{route('title')}}">Title</a>
        <a class="nav-link {{Route::currentRouteName() === 'vote' ? 'bg-primary text-white' : ''}}" href="{{route('vote')}}">Vote</a>
    </nav>


</header>