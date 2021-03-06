@php
    use App\Http\Controllers\CartController;
    $items = CartController::cartitem();
@endphp

<nav class="sticky-top">
    <div class="logo">
      <h1>NO/WEAR</h1>
    </div>
    <div class="">
    <ul class="nav-links">
        <li class="nav-item">
            <a class="nav-link" href="/home">Home.</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="/about">About.</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/largo">Largo.</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/segue">Segue.</a>
        </li>
        <li class="nav-item">   
            <a class="nav-link" href="/blog">Board.</a>
        </li>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login.') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register.') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/cart/{{Auth::user()->id}}">({{$items}})Cart.</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                            @csrf
                          
                        </form>
                    </div>
                </li>
           
            @endguest
        
    </ul>
    </div>
   
</nav>