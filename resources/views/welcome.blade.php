<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <style>
        * {
            background-color: rgba(68, 122, 225, 0.12);
        }
        .navbar {
            position: absolute;
            width: 344px;
            height: 900px;
            left: 0px;
            top: 0px;

            background: #353382;
            border-radius: 0px 30px 30px 0px;
        }
        .welcome {
            position: absolute;
            width: 651px;
            height: 174px;
            left: 375px;
            top: 35px;

            background: #FFD466;
            border-radius: 20px;
        }
        .greeting {
            position: absolute;
            width: 263px;
            height: 37px;
            left: 410px;
            top: 79px;

            font-family: Montserrat;
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            line-height: 37px;
            /* identical to box height */

            color: #000000;
        }
        .navbar-child1 {
            position: absolute;
            width: 272px;
            height: 237px;
            left: 425px;
            top: 332px;

            background: #B1EE94;
            border-radius: 47px;
        }
        .navbar-child2 {
            position: absolute;
            width: 272px;
            height: 237px;
            left: 751px;
            top: 332px;

            background: #447AE1;
            border-radius: 47px;
        }
        .navbar-child3 {
            position: absolute;
            width: 272px;
            height: 237px;
            left: 1084px;
            top: 332px;

            background: #F7F174;
            border-radius: 47px;
        }
    </style>
    <body class="antialiased">
        <div class="navbar">
        </div>
        <div class="welcome">
        </div>
        <div class="navbar-child1">
        </div>
        <div class="navbar-child2">
        </div>
        <div class="navbar-child3">
        </div>
    </body>
</html>
