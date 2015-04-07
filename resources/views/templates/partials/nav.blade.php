<nav>
    <ul>
        <li>
            <a href="{!! URL::route('overview') !!}">Overview</a>
        </li>
        
            @if(Auth::check())
            
            @else
            <li> <a href="{!! URL::route('account-create') !!}">Create account</a> </li>
            @endif
           
       
    </ul>
</nav>
