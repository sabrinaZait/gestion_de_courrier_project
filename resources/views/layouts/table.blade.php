<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 
        <!-- Styles -->
</head>
<body>
        <div class="container">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>e-mail</th>
                        
                      
                        
                    </tr>
                    <tbody>
                        @foreach($users as $user )
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            
                        </tr>
                        @endforeach
                     
                        
                        
                    </tbody>
                </thead>
            </table>
            
        </div>
        <div class="container">
        <table>
                   <thead>
                       <th>id</th>
                       <th>role</th>    
                   </thead>
                    <tbody>
                      @foreach($roles as $role)
                        <tr><td>{{$role ->id}}</td>
                        <td>{{$role ->name}}</td><tr>
                     @endforeach
                    </tbody>
            </table>


        </div>
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script >
                $(document).ready( function () {
                $('#myTable').DataTable();
                } );
        </script>
     </body>
     </html>   
