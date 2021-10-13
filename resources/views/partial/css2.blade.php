<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');

:root{
    font-size: 10px;
    font-family: 'Poppins';
    --text-primary: #b6b6b6;
    --text-secondary: #ececec;
    --text-third: #F8EDE3;
    --bg-primary: #798777;
    --bg-secondary: #A2B29F;
    --bg-third: #BDD2B6;
    --bg-fourth: #F8EDE3;
    --bg-onclick: #286155;  

}

::-webkit-scrollbar {
    width: 0.5rem;
}

::-webkit-scrollbar-thumb {
    background: rgb(152, 152, 255);
    border-radius: 10px;
}

body{
    color: black;
    background-color: white;
    margin: 0;
    padding: 0;
}



main{
    margin-left: 5rem;
    padding: 1rem;
}

.navbar{
    width: 5rem;
    height: 100vh;
    position: fixed;
    background-color: var(--bg-primary);
    transition: width 200ms ease;
}


.navbar-nav{
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
}

.nav-item{
    width: 100%;
}

.nav-icon{
    min-width: 2rem;
    margin: 0 1.5rem;
}

ion-icon{
    font-size: 2em;
}

/* .nav-item:last-child{
    margin-top: auto;
} */

.nav-link{
    display: flex;
    align-items: center;
    height: 5rem;
    color: var(--text-third);
    text-decoration: none;
    filter: grayscale(100%) opacity(0.7);
    transition: width 200ms ease;
}

.logo-link{
    display: flex;
    align-items: center;
    height: 5rem;
    text-decoration: none;
    filter: grayscale(100%);
    transition: width 200ms ease;
}

.point{
    filter: grayscale(0%) opacity(1); 
    background: var(--bg-onclick);
    color: var(--text-secondary);
}

.nav-link:hover{
    filter: grayscale(0%) opacity(1);
    background: var(--bg-onclick);
    color: var(--text-secondary);
}

/* .btn-1{
    border: none;
    background-color: var(--bg-primary);
    color: var(--text-third);
} */

.logo-link:hover{
    filter: grayscale(0%);
    color: var(--text-secondary);
}

.nav-tittle{
    display: none;
    margin-left: 1rem;
}

.logo-tittle{
    display: none;
    margin-left: 1rem;
}

.navbar:hover .logo-tittle{
    display: block;
}

.navbar:hover{
    width: 16rem;
}

.navbar:hover .nav-tittle{
    display: block;
}

/* .nav-logo{
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 1rem;
    text-align: center;
    letter-spacing: 0.3ch;
    width: 3rem;
} */

.bonbon{
    width: 4rem;
}

.bobon2{
    margin-top: 1rem;
    width: 10rem;
}


/* .logo{
    transform: rotate(0deg);
    height: 100%;
    width: 100%;
    margin-top: 1rem;
    transition: transform var(--transition-speed);
} */
:root{
    --text-primary: rgb(14, 20, 12);
    --text-secondary: #70b654;
}


*{
    padding: 0;
    margin: 0;
}

.action-profile{
    position: fixed;
    top: 1.5rem;
    right: 2rem;
}


.action-profile .profile{
    position: relative;
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    transition: ease-in-out 0.3s;
}

.action-profile .profile img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:cover;
}

.action-profile .profile:hover{
    width: 5rem;
    height: 5rem;
    position: relative;
}



.action-profile .menu-profile{
    position: absolute;
    top: 6rem;
    right: -0.8rem;
    padding: 0.8rem 2.4rem;
    background: #BDD2B6;
    width: 30rem;
    border-radius: 15px;
    box-sizing: 0 0.6rem 2rem black;
    transition: 0.5s;
    visibility: hidden;
    opacity: 0;
}

.action-profile .menu-profile.active{
    visibility: visible;
    opacity: 1;
}

.action-profile .menu-profile .identity{
    top: 1rem;
    width: 100%;
    text-align: center;
    position: relative;
}

.action-profile .menu-profile .identity .img-profile{
    width: 10vh;
    border-radius: 100%;
}

.action-profile .menu-profile::before{
    content: '';
    position: absolute;
    top: -0.4rem;
    right: 1.7rem;
    width: 2rem;
    height: 2rem;
    background:#BDD2B6;
    transform: rotate(45deg);
}

h1{
    color: var(--text-primary);
    line-height: 1em;
    padding-top: 1rem;
}

h2{
    color: var(--text-secondary);
    font-weight: 400;
    padding-bottom: 3rem;
}

.menu-profile .main-profile .icon-profile{
    width: 100%;
    position: relative;
}

.menu-profile .main-profile .tittle-profile{
    padding-left: 1rem;
    font-size: 1.5rem;
}


.action-profile .menu-profile ul li{
    list-style: none;
    padding: 0.5rem;
    border-bottom: 1px solid #7e8024;
}


.action-profile .menu-profile ul li:last-of-type{
    border-bottom: none;
}

.btn-1{
    margin-top: 2rem;
}

.dropdown{
    border: none;
    background-color: rgb(65, 221, 143);
    font-size: 1rem;
    margin-top: 10rem;
    font-family: 'Poppins';
    width: 40%;
    height: 3.5rem;
    right: -18rem;
    position: relative;
    border-radius: 7px;
    cursor: pointer;
    transition: ease 0.2s;
}

.dropdown:hover{
    background-color: rgb(64, 134, 77);
    color: white;
}

.dropdown ion-icon{
    padding-right: 0.5rem;
    font-size: 1.5rem;
}

.dropdown span{
    text-align: center;
    align-items: center;
    font-size: 1.3rem;
}




</style>