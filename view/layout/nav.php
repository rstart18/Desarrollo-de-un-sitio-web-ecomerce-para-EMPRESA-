<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/css/uikit.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="../../public/js/uikit.min.js"></script>
        <script src="../public/js/uikit-icons.min.js"></script>
        <style>

            *{
                font-family: Helvetica, Sans-Serif;
            }

            .mainslider img{
            border-width: 1px;
            border-style: solid;
            border-color: gray;
            }
            
            .menu_bar{
                display: none;
            }

            .navbar{
                display: block;
            }

            @media screen and (max-width:800px ) {
                
                .menu_bar{
                    display: block;
                }
                .navbar{
                    display: none;
                }

            }
        </style>
    </head>
    <body>
<!-- navbar PC -->
    <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left navbar">

        <ul class="uk-navbar-nav">
            <li class="uk-active" href="">
            <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home"><img src="https://cdn.shopify.com/s/files/1/0601/2554/4675/files/Group_Copy_70x.png?v=1642111361"  alt=""></a>
            </li>
            <li class="uk-active"><a href="#">Inicio</a></li>
            <li>
                <a href="#">Categorias</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Gorras</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Productos</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right navbar">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Login</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar mobile -->
    <nav class="uk-navbar uk-navbar-container uk-margin menu_bar" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Categorias</a></li>
                    <li><a href="#">New Era</a></li>
                    <li><a href="#">Otros</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-navbar-center">

        <ul class="uk-navbar-nav">
            <li>
            <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home"><img src="https://cdn.shopify.com/s/files/1/0601/2554/4675/files/Group_Copy_70x.png?v=1642111361"  alt=""></a>
                </div>
            </li>
        </ul>

        </div>
    </nav>
    
    </body>
</html>