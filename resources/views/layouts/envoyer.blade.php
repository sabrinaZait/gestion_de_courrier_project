<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajouter un courrier</title>
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>
<body style="  background-image: url('./img/envoieback.jpg');"  >
    
        
        <div>
          <!-- general form elements -->
          <div style="width:600px; margin-left:380px; margin-top:50px; margin-bottom:50px;" class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Envoyer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('envoyer')}}" methode="POST">
              <div class="card-body">
              
              <div class="form-group">
                  <label for="exampleInputPassword1">de</label>
                  <input type="text" class="form-control" id="expediteur_id" name="expediteur_id" value="{{ Auth::user()->email }}" disabled>
                </div>
              <div class="form-group" data-select2-id="29">
                  <label>Destination</label>
                  <select id="destinataire_id" name="destinataire_id" class="select2 select2-hidden-accessible" multiple="" data-placeholder="select a destination" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    @foreach($destination as $item)
                    @if($item->email !=  Auth::user()->email) 
                      <option  name="destinataire_id" value="{{$item->id}}">{{$item->email}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Registre</label>
                  <select  placeholder="choisissez un registre" style="width: 100%;height:40px;border-radius: 7px;border-color:grey;"  aria-hidden="true">
                    <option id="register_id"  value="1">Courriers</option>
                    <option id="register_id"  value="2">Soit transmis</option>
                    <option id="register_id"  value="3">Lettres</option>
                    <option id="register_id"  value="4">Divers</option>
                    
                  </select>
                </div>
              
             
                <div class="form-group">
                  <label for="exampleInputPassword1">objet</label>
                  <input id="objet" name="objet" type="text" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">reference</label>
                  <input id="code" name="code" type="text" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contenue</label>
                  <textarea id="contenue" name="contenue" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                
                
                <div class="form-group">
                  <label for="exampleInputFile">Piece Joite</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">selectionner un fichier</label>
                    </div>
                    
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-warning">Envoyer</button>
              </div>
            </form>
          </div>
        </div>  
          <!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
   //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
    $('#reservationdate').datetimepicker({
        format: 'L'
    });


    
});
</script>
</body>
</html>