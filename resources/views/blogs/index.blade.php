<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>All Blogs</h1>
    <table>
        @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td> 
            </tr>
        @endforeach
    </table>
</body>
</html>