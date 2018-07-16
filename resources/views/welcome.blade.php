<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .wrapper{
                position: absolute;
                left: 60px;
                top:50px;


            }

        </style>
    </head>
    <body>

<div class="wrapper">
     <form method="post" action={{route('show')}}>

      {{ csrf_field() }}
      <select name="weather-api" title=" " >
          <option disabled>Выберите API</option>
          <option value="bit">WeatherBit</option>
          <option value="west">MesoWest</option>
      </select>
      <input type="submit" value="Выбрать"/>

     </form>

</div>

</body>
</html>
