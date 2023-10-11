<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <h1>All Blogs</h1>
    <table class="table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
         <tr>
             <th>ID</th>
             <th>Title</th>
             <th>Author</th>
             <th>Author ID</th>
         </tr>
        </thead>
        
        <tbody>
         @foreach($blogs as $blog)
             <tr>
                 <td>{{$blog->id}}</td> 
                 <td>{{$blog->title}}</td>
                 <td>{{$blog->content}}</td>
                 <td>{{$blog->user_id}}</td>
             </tr>
     @endforeach
        </tbody>
     </table>
</body>
</html>