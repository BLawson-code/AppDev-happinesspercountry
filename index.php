<!DOCTYPE html>

<html>

    <head>

        <title> Happiness Per Country </title>

        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default%22%3E"></script>
        <script src="javaScript.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    </head>
    
    <body>
        
        <header>
            
            <h1>Happiness Per Country</h1>
            
            <div id="menu-outer">
                <div class="table">
                    <ul id="horizontal-list">
                        <li>HOME</li>
                    </ul>
                </div>
            </div>
        </header>

        <div id="wrapper">
            
            <div id="map">
                </div>
            </div>
        </div>
            
            <script type="application/javascript">
            $( document ).ready(function() {   //function will only run when everything has loaded
                initMap();
            });
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_vsmth4wsOaHQ92adbKFNZZHGCLR8-I&callback=initMap" type="text/javascript"></script>
    </body>
</html>