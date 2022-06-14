<header>    
    <nav class="main-nav">
        <ul class='main-menu flex list-style-none'>
            <li class="menu-item">
                <a href="{{route('welcome')}}" class="menu-item-link
                 @if (Request::route()->getName()==='welcome') active
                @endif">
                welcome page
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('pacchetti')}}" class="menu-item-link 
                @if (Request::route()->getName()==='pacchetti') active
                @endif">
                    Pacchetti Viaggi
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('destinazioni')}}" class="menu-item-link 
                @if (Request::route()->getName()==='destinazioni') active
                @endif">
                    Destinazioni
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('contatti')}}" class="menu-item-link 
                @if (Request::route()->getName()==='contatti') active
                @endif">
                    Contattaci
                </a>
            </li>
        </ul>
    </nav>
</header>