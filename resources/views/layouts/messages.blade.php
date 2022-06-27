<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 
        <!-- Styles -->
</head>
<body>
    <br>
        <div class="container">
            <table id="myTable1">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>date</th>
                        <th>objet</th>
                        <th>id_registre</th>
                        <th>type</th>
                        <th>action</th>
                        
                      
                        
                    </tr>
                    <tbody>
                        @foreach($messages as $message )
                        <tr>
                            <td>{{$message->id}}</td>
                            <td>{{$message->created_at}}
                            <td>{{$message->objet}}</td>
                            <td>{{$message->register_id}}</td>
                            @if($message->expediteur_id != Auth::user()->id)
                            <td>Arrivé</td>
                            @else
                             <td>depart</td>
                            @endif
                            <td><a href="#" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a></td>
                            
                        </tr>
                        @endforeach
                     
                        
                        
                    </tbody>
                </thead>
            </table>
            
        </div>
        

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script >
                $(document).ready( function () {
                $('#myTable1').DataTable();
                } );
        </script>
     </body>
     </html>   
