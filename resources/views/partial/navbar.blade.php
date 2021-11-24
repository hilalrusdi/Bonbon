    
    
    <nav class="navbar">
        <ul class="navbar-nav">

            <li class="nav-logo border">
                <a class="logo-link" href="">
                    <!-- <span class="logo">BONBON</span> -->
                    <img class="bonbon" src="{{ url('img/a.png') }}" alt="">
                    <span class="logo-tittle"><img class="bobon2" src="{{ url('img/text.jpg') }}" alt=""></span>
                    
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'Dashboard') ? 'point' : '' }}" href="/dashboard">
                    <span class="nav-icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav-tittle">Dashboard</span>
                </a>
            </li>

            @can('admin')
            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'Supplier') ? 'point' : '' }}" href="/supplier">
                    <span class="nav-icon"><ion-icon name="storefront-outline"></ion-icon></span>
                    <span class="nav-tittle">Supplier</span>
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'User') ? 'point' : '' }}" href="/user">
                    <span class="nav-icon"><ion-icon name="man-outline"></ion-icon></span>
                    <span class="nav-tittle">Karyawan</span>
                </a>
            </li>
            @endcan('admin')

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'Tanaman') ? 'point' : '' }}" href="/tanaman">
                    <span class="nav-icon"><ion-icon name="leaf-outline"></ion-icon></span>
                    <span class="nav-tittle">Tanaman</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'Transaksi') ? 'point' : '' }}" href="/transaksi">
                    <span class="nav-icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <span class="nav-tittle">Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($tittle === 'Quality') ? 'point' : '' }}" href="/quality">
                    <span class="nav-icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                    <span class="nav-tittle">Quality Check</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <form action="">
                    <button type="submit" class="nav-link btn-1">
                        <span class="nav-icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="nav-tittle">Log Out</span>
                    </button>
                </form>
                <a class="nav-link" href="">
                    <span class="nav-icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="nav-tittle">Log Out</span>
                </a>
                    
                
            </li> -->

        </ul>     
    </nav>