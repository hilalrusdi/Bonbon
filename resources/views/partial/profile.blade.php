<div class="action-profile">
    <div class="profile" onclick="menuToggle();">
        <img src="{{$profile}}" alt="">
    </div>
    <div class="menu-profile">
        <div class="identity">
            <img class="img-profile" src="{{$profile}}" alt="">
            <h1>{{$nama}}</h1>
            <h2>{{$email}}</h2>
        </div>
        <ul class="main-profile">
            <li>
                <span class="icon-profile"><ion-icon name="call-outline"></ion-icon></ion-icon></span>
                <span class="tittle-profile">{{$telepon}}</span>
            </li>
            <li>
                <span class="icon-profile"><ion-icon name="book-outline"></ion-icon></ion-icon></span>
                <span class="tittle-profile">{{$job}}</span>
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