<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comming Soon</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:200,400,600&display=swap');
        *{
    box-sizing: border-box;
}

body{
    background-image: linear-gradient(
        135deg,
        rgb(255, 255, 255),
        rgb(255,245,245)
    );
    font-family: 'Josefin Sans', sans-serif;
    margin: 0;
}

.container{
    display: flex;
    min-height: 100vh;
}

.left{
    background-size: cover;
    background-position: center center;
    padding: 0 40px 40px;
    width: 60%;
}

.inner-container{
    max-width: 450px;
    margin: auto;
}

.left{
    width: 40%;
}

.bg-image{
    background-image: url('');
    background-size: cover;
    background-position: center center;
}

.bg-mobile{
    display: none;
}

h1{
    color: rgb(65, 58, 58);
    font-size: 60px;
    letter-spacing: 10px;
    line-height: 1.1;
    margin-top: 150px;
    margin-bottom: 0;
    transform: translateX(-100%);
    text-transform: uppercase;
    animation: comeinleft 0.5s ease forwards;
}

h1 span{
    color: rgb(206, 151, 151);
    font-weight: 200;
}

p{
    color: rgb(206, 151, 151);
    line-height: 26px;
    margin: 30px 0;
    transform: translateX(100%);
    opacity: 0;
    animation: comeinleft 0.5s ease forwards;
}

form{
    position: relative;
    transform: translateX(-100%);
    animation: comeinleft 0.5s ease forwards;
}

input{
    background-color: transparent;
    border: 1px solid rgb(206, 151, 151);
    border-radius: 50px;
    font-size: 16px;
    padding: 15px 30px;
    height: 55px;
    width: 100%;
    text-align: end;
}

input:focus{
    border-width: 2px;
    box-shadow: 0px 0px 10px rgba(206,151,151);
    outline: none;
}

input::placeholder{
    color: rgb(206, 151, 151);
    text-align: end;
}

button{
    background-image: linear-gradient(135deg, rgb(248,191,191), rgb(238,140,140));
    box-shadow: 2px 5px 10px rgba(206, 151, 151,0.5);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    padding: 15px;
    position: absolute;
    top: 0;
    left: 0;
    transition: opacity 0.2s ease;
    height: 55px;
    width: 100px;
}



/* animations */
@keyframes comeinleft {
    to{
        transform: translateX(0);
    }
}

@keyframes comeinleft {
    to{
        opacity: 1;
        transform: translateX(0);
    }
}

/* media query */

@media screen and (max-width: 600px) {
    .bg-mobile{
        display: block;
        margin-left: -40px;
        margin-left: -40px;
        width: calc(100% + 80px);
    }

    h1{
        font-size: 40px;
    }

    .left{
        width: 100%;
    }

    .left{
        display: none;
    }
}
    </style>
</head>
<body>
    <div class="container">
        
        <div class="left">
            <div class="inner-container">
                
                <h1>
                    <span>We're</span>
                    <br>
                    coming
                    <br>
                    soon
                </h1>
                <p>Hello! We're currently building our Cruises. The future is almost here.</p>

            </div>
        </div>
        <div class="right">
            <img src="Logo/web icon.png" alt="" srcset="">
        </div>
    </div>
</body>
</html>