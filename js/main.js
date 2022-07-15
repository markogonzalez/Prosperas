$("#img_splash").fileinput({
    'theme': 'fa5',
    'allowedFileExtensions': ['jpg', 'png', 'gif'],
    'showUpload': false,
    'language':'es',
    'showCaption' : true,
    'minImageHeight' : 1920,
    'maxImageHeight' : 1920,
    'minImageWidth' : 1080,
    'maxImageWidth' : 1080,
    'defaultPreviewContent' : "&nbsp;",
    'showCaption' : false,
});

$("#img_icon").fileinput({
    'theme': 'fa5',
    'allowedFileExtensions': ['jpg', 'png', 'gif'],
    'showUpload': false,
    'language':'es',
    'showCaption' : true,
    'minImageHeight' : 1024,
    'maxImageHeight' : 1024,
    'minImageWidth' : 1024,
    'maxImageWidth' : 1024,
    'defaultPreviewContent' : "&nbsp;",
    'showCaption' : false,
});

$("#img_header_logo").fileinput({
    'theme': 'fa5',
    'allowedFileExtensions': ['jpg', 'png', 'gif'],
    'showUpload': false,
    'language':'es',
    'showCaption' : true,
    
    'defaultPreviewContent' : "&nbsp;",
    'showCaption' : false,
});
function validar_campos($opcion){
  let app_name = document.querySelector("#app_name").value;
  let img_splash = document.querySelector("#img_splash").value;
  let img_icon = document.querySelector("#img_icon").value;
  let img_header_logo = document.querySelector("#img_header_logo").value;
  let duration_splash = document.querySelector("#duration_splash").value;
  let splash_mili = duration_splash*1000;
  // let loader = document.querySelector('input[name="loader"]:checked');
  let text_color = document.querySelector("#text_color").value;
  let background_color = document.querySelector("#background_color").value;
  let color_boton = document.querySelector("#color_boton").value;
  let text_title = document.querySelector("#text_title").value;
  let inputs = document.getElementsByName('campos[]');
  let tipos = document.getElementsByName('tipo[]');
  let min_lengths = document.getElementsByName('min_lenght[]');
  let max_lengths = document.getElementsByName('max_lenght[]');
  let text_alerts = document.getElementsByName('text_alert[]');
  
  let boton_send_text = document.querySelector("#boton_send_text").value;
  let text_success = document.querySelector("#text_success").value;
  let text_nosuccess = document.querySelector("#text_nosuccess").value;
  let nums = document.getElementsByName("num_opcion[]");

  if (app_name==""){
    alert("El nombre de la app es obligatorio");
    return false;
  }

  // if (img_splash==""){
  //     alert("La imagen del splash es obligatoria");
  //     return false
  // }
  // if (img_icon==""){
  //     alert("La imagen del icono es obligatoria");
  //     return false
  // }
  // if (img_header_logo==""){
  //     alert("La imagen del header es obligatoria");
  //     return false
  // }
  // if (duration_splash=="" || duration_splash ==0){
  //     alert("La duración del splash debe de ser mayor a 0 segundos.");
  //     return false
  // }
  // // if (!document.querySelector('input[name="loader"]:checked')){
  // //     alert("Debes de seleccionar un loader");
  // //     return false;
  // // }
  // if (text_color == ""){
  //     alert("Debes de seleccionar el color para el texto");
  //     return false;
  // }
  // if (background_color == ""){
  //     alert("Selecciona un color de fondo");
  //     return false;
  // }
  // if (color_boton == ""){
  //     alert("Selecciona un color para el botón");
  //     return false;
  // }
  // for (let i = 0; i < inputs.length; i++){
  //     if(inputs[i].value==""){
  //         alert("Todos lo titulos de los inputs son obligatorios");
  //         return false;
  //     }
  //     if(tipos[i].value=="radio" || tipos[i].value=="check" || tipos[i].value=="select"){
  //       let arr_opc = document.getElementsByName('opciones'+nums[i].value+'[]');
  //       for (let j = 0; j < arr_opc.length; j++){
  //         if (arr_opc[j].value == ""){
  //           alert("Todas las opciones son obligatorias");
  //           return false;
  //         }
  //       }
  //     }
  // }
  // for (let i = 0; i < tipos.length; i++){
  //     if(tipos[i].value==""){
  //         alert("Todos los tipos de los inputs son obligatorios");
  //         return false;
  //     }
  // }
  // for (let i = 0; i < min_lengths.length; i++){
  //     if(min_lengths[i].value=="" || min_lengths[i].value == 0){
  //         alert("Todos los min_lenght de los inputs son obligatorios y mayor a 0");
  //         return false;
  //     }
  // }
  // for (let i = 0; i < max_lengths.length; i++){
  //     if(max_lengths[i].value==""){
  //       alert("Todos los max_lenghts de los inputs son obligatorios");
  //       return false;
  //     }

  // }
  // for (let i = 0; i < text_alerts.length; i++){
  //     if(text_alerts[i].value==""){
  //         alert("Todos los text_alerts de los inputs son obligatorios");
  //         return false;
  //     }
  // }
  // if (text_confirmation_title == ""){
  //     alert("El titulo del texto de confirmación es obligatorio");
  //     return false;
  // }
  // if (text_confirmation_body == ""){
  //     alert("El mensaje de confirmación es obligatorio");
  //     return false;
  // }
  // if (text_noconfirm == ""){
  //     alert("El texto para el botón de no aceptar es obligatorio");
  //     return false;
  // }
  // if (text_confirm == ""){
  //     alert("El texto para el botón de aceptar es obligatorio");
  //     return false;
  // }
  // if (boton_send_text == ""){
  //     alert("El texto para el botón de enviar información es obligatorio");
  //     return false;
  // }
  // if (text_success == ""){
  //     alert("El texto para el mensaje de aceptación es obligatorio");
  //     return false;
  // }
  // if (text_nosuccess == ""){
  //     alert("El texto para el mensaje de rechazo es obligatorio");
  //     return false;
  // }

  if($opcion==1){
    let img_splash_f = document.querySelector("#img_splash").files;
    const objectURL_splash = URL.createObjectURL(img_splash_f[0]);
    let img_icon_f = document.querySelector("#img_icon").files;
    const objectURL_icon = URL.createObjectURL(img_icon_f[0]);
    let img_header_logo_f = document.querySelector("#img_header_logo").files;
    const objectURL_header = URL.createObjectURL(img_header_logo_f[0]);

    document.querySelector("#app_img_splash").setAttribute("src",objectURL_splash);
    setTimeout(function(){

      document.querySelector("#div_img_splash").classList.add("d-none");
      document.querySelector("#div_app").classList.remove("d-none");
      document.querySelector("#app_img_header").setAttribute("src",objectURL_header);
      document.querySelector("#sub_header").setAttribute("style","color:"+text_color);
      document.querySelector("#sub_header").append(text_title);
      html_inputs="";
      for(let i = 0; i<inputs.length; i++){
        if(tipos[i].value == "radio" || tipos[i].value == "checkbox"){
          html_inputs += `<div class="form-group">
          <label style="color:`+text_color+`;width:100%;">`+inputs[i].value+`</label>`;
          let arr_opc = document.getElementsByName('opciones'+nums[i].value+'[]');
          for (let j = 0; j < arr_opc.length; j++){
            html_inputs+=`<div class="form-check-inline">
              <input class="form-check-input" type="`+tipos[i].value+`" name="`+tipos[i].value+i+`" readonly>
              <label class="form-check-label" for="`+tipos[i].value+i+`">`+arr_opc[j].value+`</label>
              </div>`;
          }
          html_inputs += `</div>`;
        }else if(tipos[i].value == "select"){
          html_inputs+=`<label style="color:`+text_color+`;width:100%;">`+inputs[i].value+`</label>
            <select class="form-control">`;
            let arr_opc = document.getElementsByName('opciones'+nums[i].value+'[]');
            for (let j = 0; j < arr_opc.length; j++){
            html_inputs += `<option value="">`+arr_opc[j].value+`</option>`;
            }
            html_inputs+=`</select>`;
        }else{
          html_inputs+=`<div class="form-group">
          <label style="color:`+text_color+`;">`+inputs[i].value+`</label>
          <input class="form-control " readonly >
        </div>`;
        }
        
       
      }
      document.querySelector("#app_div_inputs").innerHTML = html_inputs;
      document.querySelector("#app_btn_enviar").append(boton_send_text);
      document.querySelector("#app_btn_enviar").setAttribute("style","background-color:"+background_color);
      document.querySelector("#app_btn_enviar").addEventListener('click', function(event) {
    
        alert("hola");
    });

      document.querySelector("#div_descargar").classList.remove("d-none");
  }, splash_mili);
  }else if($opcion==2){
    generar_json();
  }

}

function mostrar_msg(){
  let text_confirmation_title = document.querySelector("#text_confirmation_title").value;
  let text_confirmation_body = document.querySelector("#text_confirmation_body").value;
  let text_noconfirm = document.querySelector("#text_noconfirm").value;
  let text_confirm = document.querySelector("#text_confirm").value;

  alert("hola");
}



  function generar_json(){
    let editorForm = document.querySelector("#editorForm");
      let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHttp');
      let ajaxurl = "crear_json.php";
      let formData = new FormData(editorForm);
      request.open("POST",ajaxurl,true);
      request.send(formData);
      request.onreadystatechange = function(){

        if (request.readyState == 4 && request.status == 200) {
          var arrObj = JSON.parse(request.responseText);
          
          if (arrObj.status) {
            alert("Exito");
          }else{
            alert("Error al crear vista previa.")
          }
        }
      
    }
  }

  function validarinput(){
    let tipos = document.getElementsByName('tipo[]');
    let nums = document.getElementsByName("num_opcion[]");
    for (let i = 0; i < tipos.length; i++){
      if(tipos[i].value=="radio" || tipos[i].value=="checkbox" || tipos[i].value=="select"){
        document.querySelector("#div_opciones"+nums[i].value).classList.remove("d-none");
      }else{
        document.querySelector("#div_opciones"+nums[i].value).classList.add("d-none");
      }
    }
  }

  




$(".colorpicker").spectrum({
  type: "component",
  showPalette: false,
  preferredFormat: "rgb",
});
  

$("#addRow").click(function () {
  let num_inputs = document.getElementsByName("campos[]").length;
  let html = `<div class="inputs-mt inputs-mb" id="inputFormRow">
          <button id="removeRow" type="button" class="btn btn-danger btn-sm">Borrar</button>
          <div class="row input-group mb-3">
            <div class="col-md-10">
              <label>Titulo</label>
              <input type="text" name="campos[]" id="campos[]" class="form-control m-input" placeholder="Ingrese el titulo del campo" autocomplete="off" >  
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
              <input type="number" name="min_lenght[]" id="min_lenght[]" class="form-control">
            </div>
            <div class="col-md-3">
              <label for="max_lenght">Max Lenght</label>
              <input type="number" name="max_lenght[]" id="max_lenght[]" class="form-control">
            </div>
            <div class="col-md-3">
              <label for="text_alert">Alerta</label>
              <input type="text" name="text_alert[]" id="text_alert[]" class="form-control">
            </div>
          </div>
          <div class="form-group row d-none" id="div_opciones`+num_inputs+`">
            <div class="col-md-12 mb-3">
              <input type="text" name="opciones`+num_inputs+`[]" id="opciones`+num_inputs+`[]" class="form-control m-input" placeholder="Ingrese la opción" autocomplete="off">
            </div>
            <div class="col-md-12 mb-3">
              <div id="newOpcion">
                <button id="addOpcion" type="button" class="btn btn-info">Agregar nueva opcion</button>
                <input type="hidden" value ="`+num_inputs+`" id="num_opcion" name="num_opcion[]">
               </div>
            </div>
          </div>    
        </div>`;

  $('#newRow').append(html);
});

$(document).on('click', '#removeRow', function () {
  $(this).closest('#inputFormRow').remove();
});

$(document).on('click', '#addOpcion', function () {
  let val = $(this).closest("#newOpcion").find("input[id='num_opcion']").val();

  let html = `<div class="mb-3 row" id="div_opcion">
            <div class="col-md-10"><input type="text" name="opciones`+val+`[]" id="opciones`+val+`[]" class="form-control m-input" placeholder="Ingrese la opción" autocomplete="off"></div>
            <div class="col-md-2"><button id="removeOpcion" type="button" class="btn btn-danger btn-sm">Eliminar opción</button></div>
            </div>`;
  $(this).closest('#newOpcion').append(html);
});

$(document).on('click', '#removeOpcion', function () {
  $(this).closest('#div_opcion').remove();
});

