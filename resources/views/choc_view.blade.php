<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($chocos as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->choco_name }}</td>
            <td>{{ $user->price}}</td>
            <td>{{ $user->category}}</td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>