<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="{{ url('/getdata')}}" method="post">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your name:"><br>
            <label>Age:</label>
            <input type="text" name="age" placeholder="Enter your age:"><br>
            <label>Country:</label>
            <input type="text" name="country" placeholder="Enter your country:"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>