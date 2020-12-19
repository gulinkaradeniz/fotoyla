<ul>
    
    
</ul>
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li>
            <a href="/login" class="text-lg mb-4 block">Giriş Yapınız</a>
        </li>
        <li>
            <a href="/users" class="text-lg mb-4 block">Üye Ol</a>
        </li>
    @else
    
        <li>
            <label class="text-lg mb-4 block">
                {{ Auth::user()->name }}
            </label>

            <div>
                <a class="mb-4 relative rounded-full py-1 px-1 lg:p-1 text-sm lg:text-base hover:bg-red-300 hover:text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış Yap</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>