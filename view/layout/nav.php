<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../public/css/uikit.min.css" />
        <script src="../../public/js/uikit.min.js"></script>
        <script src="../public/js/uikit-icons.min.js"></script>
        <style>
            
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

    <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left navbar">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
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
            <li><a href="#">Item</a></li>
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

    <nav class="uk-navbar uk-navbar-container uk-margin menu_bar" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>
            </div>
        </div>
    </nav>

    </body>
</html>