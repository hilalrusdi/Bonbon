<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');

:root{
    font-size: 13px;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    background: linear-gradient(rgb(10, 85, 39),rgb(11, 167, 71),rgb(53, 90, 46));
}

.container_reg{
    max-width: 60rem;
    width: 100%;
    background: linen;
    padding: 2rem 2.4rem;
    border-radius: 5px;
}

.container_reg .tittle_reg{
    font-size: 1.5rem;
    font-weight: 500;
}

.container_reg form .user_reg{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

form .user_reg .input_reg{
    margin: 20px 0 12px 0;
    width: calc(100% / 2 - 20px);
}

.user_reg .input_reg input{
    height: 35px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 1rem;
    border-bottom-width: 2px;
}


form .jenis_kelamin .kategori{
    display: flex;
    width: 50%;
    justify-content: space-between;
}

.jenis_kelamin{
    margin-bottom: 2rem;
}

.jenis_kelamin .kategori label{
    display: flex;
    align-items: center;
}

.jenis_kelamin .kategori .dot{
    height: 1rem;
    width: 1rem;
    background: #696969;
    border-radius: 50%;
    margin-right: 1rem;
    border: 3px solid transparent;
    transition: all 0.1s ease;
}

#dot-1:checked ~ .kategori label .one,
#dot-2:checked ~ .kategori label .two{
    border-color: thistle;
    background: blue;
}

form input[type='radio']{
    display: none;
}

form .button{
    height: 3rem;
    margin-top: 3rem;
}

form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: white;
    border: none;
    font-size: 1.2rem;
    border-radius: 5px;
    letter-spacing: 4px;
    background: violet;
    cursor: pointer;
}

form .button input:hover{
    background: rgb(97, 97, 255);
}
    </style>