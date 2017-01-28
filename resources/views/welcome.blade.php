<!DOCTYPE html>
<html>
    <head>
        <title>EFS</title>

           <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body background="http://wallpapersfr.com/wp-content/uploads/2015/04/1080-Full-hd-desktop-hd-wallpaper.jpg">


    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

               <!-- Branding Image class="navbar-brand"  -->
                <h4><a href="{{ url('/customers') }}">
                    Eagle Financial Services
                </a></h4>
                <br>
                
                    <h5> We value your funds !</h5>   


 
                
            </div>

                </div>
    </nav>
        <div class="container">
            <div class="content">
                <b><div class="title">Eagle Financial Services</div></b>
				<h1><b><a href="{{ action('CustomerController@index') }}">Click here to proceed</a></h1></b>
                 
            </div>
        </div>
        
         <footer alignment="Center"  >
  <p><B><font size="3" color="red">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Posted by: Saroj Verma   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</font> </footer>




    
    </body>
</html>
