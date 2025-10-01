<html>
<head>
    <title>Send SMS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<div class="container">
        <h1>Send SMS</h1>
        <h1>
            @if(session('message'))
                {{session('message')}}
            @endif
        </h1>
        <form  action="{{route('SMSSend')}}"  method="POST">
            @csrf
            <label>Mobile No</label>
            <input type="text" id="mobile" name="mobile" required/><br/><br/>
            <label>SMS text</label>
            <textarea rows="12" type="text" id="message" name="message" required> </textarea> <br/><br/>
            <button type="submit"> Submit </button>
        </form>
</div>


</body>
</html>

