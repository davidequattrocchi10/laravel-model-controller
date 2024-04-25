<header class="bg-dark">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-primary text-white' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'nationality' ? 'bg-primary text-white' : ''}}" href="{{route('nationality')}}">Nationality</a>
        <a class="nav-link {{Route::currentRouteName() === 'vote' ? 'bg-primary text-white' : ''}}" href="{{route('vote')}}">Vote</a>
        <a class="nav-link {{Route::currentRouteName() === 'date' ? 'bg-primary text-white' : ''}}" href="{{route('date')}}">Date</a>
        <a class="nav-link {{Route::currentRouteName() === 'findId' ? 'bg-primary text-white' : ''}}" href="{{route('findId')}}">Find Id</a>
    </nav>


</header>