<!DOCTYPE html>
  <html>
    <head>
        <title>PHPMAIL</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    
               <div class="container">
                <div class="row">
                <div class="col s6">
            
                    <form action="contacto.php" method="post"  id="myForm">
                        <div class="input-field ">
                            <input type="text" id="autocomplete-input" name="name" class="autocomplete">
                            <label for="autocomplete-input">name</label>
                        </div>

                        <div class="input-field ">
                            <input type="email" id="autocomplete-input" name="email" class="autocomplete">
                            <label for="autocomplete-input">correo</label>
                        </div>

                        <div class="input-field ">
                            <input type="tel" id="autocomplete-input" name="tel" class="autocomplete">
                            <label for="autocomplete-input">phone</label>
                        </div>

                        <div class="input-field ">
                        <textarea name="mensaje" id=""  rows="15" class="autocomplete"></textarea>
                      
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Submit <i class="material-icons right">send</i>
                        </button>
                    </form>

                    <button onclick="ver()"></button>
                
                </div>
            </div>
            </div>

             



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
    <!-- Código de instalación Cliengo para http://bylekong.com -->
  <script type="text/javascript">
  
  $(document).ready(function(){
     
      });
    </script>
            
     
    </body>
  </html>