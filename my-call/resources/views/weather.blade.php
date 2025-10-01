<html>
    <head>
        <title>Current Weather</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    </head>
    <body>

    <div class="container">
        <table>
            <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Location</th>
                        <th>Country</th>
                        <th>Temperature</th>
                        <th>Wind Speed</th>
                        <th>Humidity</th>
                        <th>Status</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img alt="icon" src="{{$weather['current']['condition']['icon']}}"> </td>
                    <td>{{$weather['location']['name']}}</td>
                    <td>{{$weather['location']['country']}}</td>
                    <td>{{$weather['current']['temp_c']}} Degree Celcius</td>
                    <td>{{$weather['current']['wind_kph']}} KM/h</td>
                    <td>{{$weather['current']['humidity']}} %</td>
                    <td>{{$weather['current']['condition']['text']}} </td>

                </tr>
            </tbody>
        </table>
    </div>


    </body>
</html>
