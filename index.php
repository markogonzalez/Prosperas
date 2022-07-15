<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Input File -->
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <script src="js/plugins/buffer.min.js" type="text/javascript"></script>
    <script src="js/plugins/filetype.min.js" type="text/javascript"></script>
    <script src="js/plugins/piexif.js" type="text/javascript"></script>
    <script src="js/plugins/sortable.js" type="text/javascript"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/locales/es.js"></script>
    
    <!-- ColorPicker -->
    <script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <title>Editor App</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form autocomplete="off" class="col-md-8" action="" id="editorForm" method="POST" onsubmit="return false;">
          <div class="col-md-12 container_form">
             <!-- Titulo -->
             <h2>Cambiado desde la mac</h2>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="text_title">Nombre</label>
                  <input type="text" class="form-control" name="app_name" id="app_name" >
                </div>
              </div>
            <!-- / Titulo -->
            <!-- Imagenes -->
            <h2>Imagenes de la app</h2>
            <div class="form-group row">
              <div class="col-md-4">
                <div class="col-md-12">
                  <label for="img_splash">Splash (1080x1920 px)</label>
                </div>
                <div class="col-md-12">
                  <input id="img_splash" name="img_splash" type="file" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                  <label for="img_icon">Icono (1024x1024 px)</label>
                </div>
                <div class="col-md-12">
                  <input id="img_icon" name="img_icon" type="file" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                  <label for="img_header_logo">Header logo</label>
                </div>
                <div class="col-md-12">
                  <input id="img_header_logo" name="img_header_logo" type="file" >
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="duration_splash">Duración splash (Segundos)</label>
                <input class="form-control" type="number" name="duration_splash" id="duration_splash" >
              </div>
              <!-- <div class="col-md-12 row">
                <div class="col-md-12">
                  <label for="loader">Loader</label> 
                </div>
                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="loader" id="loader1" value="1">
                    <label class="form-check-label" for="loader1"><img src="img/loader.gif" style="width: 30%;padding:5px;"></label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="loader" id="loader2" value="2">
                    <label class="form-check-label" for="loader2"><img src="img/loader.gif" style="width: 30%;padding:5px;"></label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="loader" id="loader3" value="3">
                    <label class="form-check-label" for="loader3"><img src="img/loader.gif" style="width: 30%;padding:5px;"></label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="loader" id="loader4" value="4">
                    <label class="form-check-label" for="loader4"><img src="img/loader.gif" style="width: 30%;padding:5px;"></label>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- / Imagenes -->
            <!-- Colores -->
            <h2>Colores Principales</h2>
            <div class="form-group row">
              <div class="col-md-4">
                <label for="text_color">Color de textos</label>
                <input type="text" class="form-control colorpicker" name="text_color" id="text_color" >
              </div>
              <div class="col-md-4">
                <label for="background_color">Color background</label>
                <input type="text" class="form-control colorpicker" name="background_color" id="background_color" >
              </div>
              <div class="col-md-4">
                <label for="color_boton">Color Botón</label>
                <input type="text" class="form-control colorpicker" name="color_boton" id="color_boton" >
              </div>
            </div>
            <!-- / Colores -->
            <!-- Titulo -->
            <h2>Titulo</h2>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="text_title">Texto titulo</label>
                <input type="text" class="form-control" name="text_title" id="text_title" >
              </div>
            </div>
            <!-- / Titulo -->
            <!-- Inputs -->
            <h2>Inputs</h2>
            <div class="form-group row">
              <div class="col-md-12" >
                <div class="row input-group mb-3">
                  <div class="col-md-10">
                    <label>Titulo</label>
                    <input type="text" name="campos[]" id="campos[]" class="form-control m-input" placeholder="Ingrese el titulo del campo" autocomplete="off" value="Nombre completo">  
                  </div>
                  <div class="col-md-2" style="display:inline-grid">
                    <label>Obligatorio</label>
                    <input type="checkbox" name="required[]" id="required[]" >
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3">
                    <label>Tipo</label>
                    <select onchange="validarinput()" class="form-control" name="tipo[]" id="tipo[]" >
                      <option value="">Selecciona el tipo de input</option>
                      <option value="text" selected>Text</option>
                      <option value="email">Email</option>
                      <option value="number">Number</option>
                      <option value="alfanumeric">Alfanumeric</option>
                      <option value="date">Date (DD-MM-YYYY)</option>
                      <option value="radio">Radio</option>
                      <option value="checkbox">Checkbox</option>
                      <option value="select">Select</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="min_lenght">Min Lenght</label>
                    <input type="number" name="min_lenght[]" id="min_lenght[]" value="5" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="max_lenght">Max Lenght</label>
                    <input type="number" name="max_lenght[]" id="max_lenght[]" value="30" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="text_alert">Alerta</label>
                    <input type="text" name="text_alert[]" id="text_alert[]" value="Se requiere nombre y apellidos" class="form-control">
                  </div>
                </div>
                <div class="form-group row d-none" id="div_opciones0">
                  <div class="col-md-12 mb-3">
                    <input type="text" name="opciones0[]" id="opciones0[]" class="form-control m-input" placeholder="Ingrese la opción" autocomplete="off">
                  </div>
                  <div class="col-md-12">
                    <div id="newOpcion">
                      <button id="addOpcion" type="button" class="btn btn-info">Agregar nueva opcion</button>
                      <input type="hidden" value ="0" id="num_opcion" name="num_opcion[]">
                    </div>  
                    
                  </div>
                </div> 
              </div>

              <div class="col-md-12 inputs-mt" >
                <div class="row input-group mb-3">
                  <div class="col-md-10">
                    <label>Titulo</label>
                    <input type="text" name="campos[]" id="campos[]" class="form-control m-input" placeholder="Ingrese el titulo del campo" autocomplete="off" value="Correo">  
                  </div>
                  <div class="col-md-2" style="display:inline-grid">
                    <label>Obligatorio</label>
                    <input type="checkbox" name="required[]" id="required[]" >
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3">
                    <label>Tipo</label>
                    <select onchange="validarinput()" class="form-control" name="tipo[]" id="tipo[]" >
                      <option value="">Selecciona el tipo de input</option>
                      <option value="text">Text</option>
                      <option value="email" selected>Email</option>
                      <option value="number">Number</option>
                      <option value="alfanumeric">Alfanumeric</option>
                      <option value="date">Date (DD-MM-YYYY)</option>
                      <option value="radio">Radio</option>
                      <option value="checkbox">Checkbox</option>
                      <option value="select">Select</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="min_lenght">Min Lenght</label>
                    <input type="number" name="min_lenght[]" id="min_lenght[]" value="10" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="max_lenght">Max Lenght</label>
                    <input type="number" name="max_lenght[]" id="max_lenght[]" value="40" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="text_alert">Alerta</label>
                    <input type="text" name="text_alert[]" id="text_alert[]" value="Se requiere un correo" class="form-control">
                  </div>
                </div>  
                <div class="form-group row d-none" id="div_opciones1">
                  <div class="col-md-12 mb-3">
                    <input type="text" name="opciones1[]" id="opciones1[]" class="form-control m-input" placeholder="Ingrese la opción" autocomplete="off">
                  </div>
                  <div class="col-md-12">
                    <div id="newOpcion">
                      <button id="addOpcion" type="button" class="btn btn-info">Agregar nueva opcion</button>
                      <input type="hidden" value ="1" id="num_opcion" name="num_opcion[]">
                    </div>  
                    
                  </div>
                </div>          
              </div>

              <div class="col-md-12 inputs-mt" >
                <div class="row input-group mb-3">
                  <div class="col-md-10">
                    <label>Titulo</label>
                    <input type="text" name="campos[]" id="campos[]" class="form-control m-input" placeholder="Ingrese el titulo del campo" autocomplete="off" value="Celular">  
                  </div>
                  <div class="col-md-2" style="display:inline-grid">
                    <label>Obligatorio</label>
                    <input type="checkbox" name="required[]" id="required[]" >
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3">
                    <label>Tipo</label>
                    <select onchange="validarinput()" class="form-control" name="tipo[]" id="tipo[]" >
                      <option value="">Selecciona el tipo de input</option>
                      <option value="text">Text</option>
                      <option value="email">Email</option>
                      <option value="number" selected>Number</option>
                      <option value="alfanumeric">Alfanumeric</option>
                      <option value="date">Date (DD-MM-YYYY)</option>
                      <option value="radio">Radio</option>
                      <option value="checkbox">Checkbox</option>
                      <option value="select">Select</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="min_lenght">Min Lenght</label>
                    <input type="number" name="min_lenght[]" id="min_lenght[]" value="10" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="max_lenght">Max Lenght</label>
                    <input type="number" name="max_lenght[]" id="max_lenght[]" value="10" class="form-control">
                  </div>
                  <div class="col-md-3">
                    <label for="text_alert">Alerta</label>
                    <input type="text" name="text_alert[]" id="text_alert[]" value="Se requiere teléfono" class="form-control">
                  </div>
                </div>
                <div class="form-group row d-none" id="div_opciones2">
                  <div class="col-md-12 mb-3">
                    <input type="text" name="opciones2[]" id="opciones2[]" class="form-control m-input" placeholder="Ingrese la opción" autocomplete="off">
                  </div>
                  <div class="col-md-12 mb-3">
                    <div id="newOpcion">
                      <button id="addOpcion" type="button" class="btn btn-info">Agregar nueva opcion</button>
                      <input type="hidden" value ="2" id="num_opcion" name="num_opcion[]">
                    </div>
                  </div>
                </div>            
              </div>
            </div>
            <div class="form-group row">
              <div id="newRow"></div>  
              <div class="col-md-12">
                <button id="addRow" type="button" class="btn btn-info">Agregar nuevo input</button>
              </div>
            </div>
            <!-- / Inputs -->
            <!-- Botón y textos confirmación -->
            <h2>Botón y texto de confirmación</h2>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="text_confirmation_title">Titulo de confirmación</label>
                <input class="form-control" type="text" name="text_confirmation_title" id="text_confirmation_title" placeholder="Confirmación" >
              </div>
              <div class="col-md-6">
                <label for="text_confirmation_body">Mensaje de confirmación</label>
                <textarea class="form-control" name="text_confirmation_body" id="text_confirmation_body" placeholder="En este momento se realizará..." ></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4">
                <label for="text_noconfirm">Texto botón no aceptar</label>
                <input class="form-control" type="text" name="text_noconfirm" id="text_noconfirm" placeholder="No acepto..." >
              </div>
              <div class="col-md-4">
                <label for="text_confirm">Texto botón aceptar</label>
                <input class="form-control" type="text" name="text_confirm" id="text_confirm" placeholder="Acepto" >
              </div>
              <div class="col-md-4">
                <label for="boton_send_text">Texto botón para enviar información</label>
                <input class="form-control" type="text" name="boton_send_text" id="boton_send_text" placeholder="Enviar" >
              </div>
            </div>
            <!-- / Botón y textos confirmación -->
            <!-- Mensaje de exito -->
            <h2>Mensaje de rechazo o aceptación</h2>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="text_success">Mensaje de aceptación</label>
                <textarea class="form-control" name="text_success" id="text_success" placeholder="Tu solicitud fue aprobada..." ></textarea>
              </div>
              <div class="col-md-6">
                <label for="text_nosuccess">Mensaje de rechazo</label>
                <textarea class="form-control" name="text_nosuccess" id="text_nosuccess" placeholder="En este momento se realizará..." ></textarea>
              </div>
            </div>
            <!-- / Mensaje de exito -->
            <!-- Comentarios -->
            <h2>Comentarios</h2>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="coments">Escribe necesidades espeficificas</label>
                <textarea class="form-control" name="coments" id="coments" placeholder="" ></textarea>
              </div>
              
            </div>
            <!-- / Comentarios -->

            <div class="form-group row">
              <div class="col-md-6">
                <button class="btn btn-primary" onclick="validar_campos(1)">Generar Vista previa</button>
              </div>
              <div class="col-md-6 " id="div_descargar">
                <button class="btn btn-info" onclick="validar_campos(2)" id="btn_descargar" >Descargar Archivo JSON</button>
              </div>
            </div>
          </div>
          
        </form>
        <div class="col-md-4 ">
          <div id="div_img_splash">
            <img style="width:100%;" id="app_img_splash" />
          </div>
          <div class="d-none" id="div_app" style="display: block !important;position:relative">
            <div class="col-md-12 header_app" id="header_app">
              <img id="app_img_header" style="width: 170px;padding:10px;">
            </div>
            <div class="col-md-12 text-center" style="margin: 20px 0;">
              <h5 id="sub_header"></h5>
            </div>
            <div class="col-md-12">
              <div id="app_div_inputs">

              </div>
              <div class="form-group justify-content-center row" style="margin:30px 0;">
                <div class="col-md-12 text-center">
                  <button id="app_btn_enviar" onclick="mostrar_msg()" class="btn btn-success"></button>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>