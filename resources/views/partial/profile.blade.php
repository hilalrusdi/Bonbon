<div class="action-profile">
    <div class="profile" onclick="menuToggle();">
        <img src="{{ url($profile) }}" alt="">
    </div>
    <div class="menu-profile">
        <div class="identity">
            <img class="img-profile" src="{{ url('img/user_menu.png') }}" alt="">
            {{-- <h1>{{ auth()->user()->name }}</h1> --}}
            {{-- <h2>{{ auth()->user()->NIK }}</h2> --}}
        </div>
        <ul class="main-profile">
            <li>
                <span class="icon-profile"><ion-icon name="call-outline"></ion-icon></span>
                {{-- <span class="tittle-profile">{{ auth()->user()->no_hp }}</span> --}}
            </li>
            <li>
                <span class="icon-profile"><ion-icon name="calendar-clear-outline"></ion-icon></span>
                {{-- <span class="tittle-profile">{{ auth()->user()->born }}</span> --}}
            </li>
            <li>
                <span class="icon-profile"><ion-icon name="location-outline"></ion-icon></span>
                {{-- <span class="tittle-profile">{{ auth()->user()->alamat }}</span> --}}
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
<script>
    function menuToggle(){
        const toggleMenu = document.querySelector('.menu-profile');
        toggleMenu.classList.toggle('active')
    }
</script>