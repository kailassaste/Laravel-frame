<div>
    
    @if(session('user'))
    <h1>welcome, {{session('user')}}</h1>
    @else
    <h1>No user found in session <a href="login">Login</a></h1>
    @endif

    <a href="logout">Logout</a>

    {{print_r(session('allData')['user'])}}
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
