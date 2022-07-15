<?php 

    function uploadImg(array $data,string $name){
        $url_temp = $data['tmp_name'];
        $destino = "img/uploads/".$name;
        $move = move_uploaded_file($url_temp, $destino);
        return $move;
    }

    function getextension($archivo){
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        return $extension;
    }

    function removeRGB($rgb){
        $num_rgb = substr($rgb, 4, -1);
        
        $integerIDs = array_map('intval', explode(',', $num_rgb));
       
        return $integerIDs;
    }

    function crear_zip($name,$archivo1,$archivo2,$archivo3){
        $zip = new ZipArchive();
        $filename = $name.".zip";

        if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
            exit("cannot open <$filename>\n");
        }

        $zip->addFile("./img/uploads/".$archivo2, $archivo2);
        $zip->addFile("./img/uploads/".$archivo3, $archivo3);
        $zip->addFile("./img/uploads/".$archivo1, $archivo1);
        $zip->getStatusString();
    
        return $zip->close();
    }

    function quitar_espacios($string){
        $sin_espacios = explode(" ",$string);
        return $sin_espacios;
    }

    function crear_json($name,$json){
        $fp = fopen($name.'.json', 'w');
        fwrite($fp, $json);
        return fclose($fp);
    }


    

    $img_splash = $_FILES['img_splash'];
    $new_splash = "splash.".getExtension($img_splash['name']);
    $img_icon = $_FILES['img_icon'];
    $new_icon = "icon.".getExtension($img_icon['name']);
    $img_header_logo = $_FILES['img_header_logo'];
    $new_header = "header_logo.".getExtension($img_header_logo['name']);
    if(!empty($_POST['duration_splash'])){
        $duration_splash = $_POST['duration_splash']*1000;
    }else{
        $duration_splash = 1000;
    }
    // $loader = $_POST['loader'];
    $text_color = $_POST['text_color'];
    $background_color = $_POST['background_color'];
    $color_boton = $_POST['color_boton'];
    $text_title = $_POST['text_title'];
    $app_name = $_POST['app_name'];
    $inputs = $_POST['campos'];
    $tipos = $_POST['tipo'];
    $min_lenghts = $_POST['min_lenght'];
    $max_lenghts = $_POST['max_lenght'];
    $text_alerts = $_POST['text_alert'];
    $text_confirmation_title = $_POST['text_confirmation_title'];
    $text_confirmation_body = $_POST['text_confirmation_body'];
    $text_noconfirm = $_POST['text_noconfirm'];
    $text_confirm = $_POST['text_confirm'];
    $boton_send_text = $_POST['boton_send_text'];
    $text_success = $_POST['text_success'];
    $text_nosuccess = $_POST['text_nosuccess'];
    $comentarios = $_POST["coments"];
    if(isset($_POST['required'])){
        $requieres = $_POST['required'];
    }
   
    $num_opcion = $_POST['num_opcion'];

    $arr_fields= array();
    for ($i=0; $i <count($inputs) ; $i++) {
        
        if(!isset($requieres[$i])){
            $requieres[$i]=false;
        }else{
            $requieres[$i]=true;
        }
        
        $arr_fields[$i] = array(
            "index" => $i,
            "label" => $inputs[$i],
            "type" => $tipos[$i],
            "min-leng" => $min_lenghts[$i],
            "max-leng" => $max_lenghts[$i],
            "text-alert" => $text_alerts[$i],
            "require" => $requieres[$i],
        );
        if($tipos[$i]=="radio" || $tipos[$i]=="checkbox" || $tipos[$i]=="select"){
            $opcion = "opciones".$num_opcion[$i];
            $arr_fields[$i]['options'] = $_POST[$opcion];
         }
            

    }

    $json=array(
        "img_splash" => $new_splash,
        "duration_splash" => $duration_splash,
        "img_icon" => $new_icon,
        "img_header" => $new_header,
        "text_title" => $text_title,
        "app_name" => $app_name,
        "text_color" => removeRGB($text_color),
        "background_color" => removeRGB($background_color),
        "color_button" => removeRGB($color_boton),
        "fields" => $arr_fields,
        "text_confirmation_title" => $text_confirmation_title,
        "text_confirmation_body" => $text_confirmation_body,
        "text_noconfirm" => $text_noconfirm,
        "text_confirm" => $text_confirm,
        "button_send_text" => $boton_send_text,
        "text_success" => $text_success,
        "text_nosuccess" => $text_nosuccess,
        "coments" => $comentarios

    );
    $json = json_encode($json,JSON_UNESCAPED_UNICODE);
    
    if (uploadImg($img_splash,$new_splash) && uploadImg($img_icon,$new_icon) && uploadImg($img_header_logo,$new_header)) {
        if (crear_json($app_name,$json)) {
            if(crear_zip($app_name,$new_splash,$new_icon,$new_header)){
                $arr_response = array("status" => TRUE, "msg" => "Exito.");
            }else{
                $arr_response = array("status" => FALSE, "msg" => "Error al crear zip.");
            }
        }else{
            $arr_response = array("status" => FALSE, "msg" => "Error al crear el json");
        }
    }else{
        $arr_response = array("status" => FALSE, "msg" => "Error en la imagen.");
       
    }    
    echo json_encode($arr_response,JSON_UNESCAPED_UNICODE);    

?>