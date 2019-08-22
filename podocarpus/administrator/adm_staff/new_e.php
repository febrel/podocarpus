<?php
   
	Nuevoe($_POST['id'], $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['nationality'],$_POST['place'], $_FILES['foto']["name"]);

	function Nuevoe($id, $name, $lastname, $email, $phone, $address, $nationality, $place, $foto){

		//Para la administracion de foto utilizo fecha para controlar poblema nombre, te agrega un nuevo nombre con fecha y si no te deja el por defecto
        $fecha = new DateTime();
        //Validar foto, sea diferente de vacios, y se concantena _ con la fecha
        //Si hay una foto real concatenas la fecha y su nombre, de lo contrario conserva el valor de foto por defecto
        $nombreArchivo = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.png";
        //Nombre que php devulve cuando se selecione
        $tmpFoto = $_FILES["foto"]["tmp_name"];

        if ($tmpFoto != "") {
            //Copia al servidor junto con el nombre del archivo
            move_uploaded_file($tmpFoto, "../../images/".$nombreArchivo);
        }

        
        include('../adm_header.php');
        $miconexion->consulta("INSERT INTO staff (id, nombres, apellidos, correo,  celular, domicilio, nacionalidad, lugarEncargo, galeria) VALUES ('".$id."' ,'".$name."' ,'".$lastname."' ,'".$email."' ,'".$phone."' ,'".$address."','".$nationality."','".$place."','".$nombreArchivo."') ");  
	}
	
?>

<script type="text/javascript">
	alert("Servicio Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>
