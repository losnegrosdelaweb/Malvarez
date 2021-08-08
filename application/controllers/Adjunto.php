<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Adjunto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdjuntoModel');

		//$this->load->library('ImageResize');
	}

	public function index()
	{
		
	}


 //redimensionar imagen
	function resizeImagen($ruta,$nombre,$ancho,$alto,$calidad,$nombreN,$extension){
      $rutaImagenOriginal = $ruta.$nombre;
      if($extension == 'GIF' || $extension == 'gif'){
        $img_original = imagecreatefromgif($rutaImagenOriginal);
      }
      if($extension == 'jpg' || $extension == 'JPG' || $extension == 'peg' || $extension == 'PEG'){
        $img_original = imagecreatefromjpeg($rutaImagenOriginal);
      }
      if($extension == 'png' || $extension == 'PNG'){
        $img_original = imagecreatefrompng($rutaImagenOriginal);
      }
      $max_ancho = $ancho;
      $max_alto = $alto;
      list($ancho,$alto)=getimagesize($rutaImagenOriginal);
      $x_ratio = $max_ancho / $ancho;
      $y_ratio = $max_alto / $alto;
      if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
      $ancho_final = $ancho;
          $alto_final = $alto;
      } elseif (($x_ratio * $alto) < $max_alto){
          $alto_final = ceil($x_ratio * $alto);
          $ancho_final = $max_ancho;
      } else{
          $ancho_final = ceil($y_ratio * $ancho);
          $alto_final = $max_alto;
      }

      $tmp=imagecreatetruecolor($ancho_final,$alto_final);
      imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
      imagedestroy($img_original);
      imagejpeg($tmp,$ruta.$nombreN,$calidad);
  }

/*
	public function SubirImagen($id)
	{
		return "aaaaaa";
	}*/


	public function SubirImagen($id)
	{
		if(isset($_FILES['file'])){ // comprobamos que se ha enviado el formulario
		    // comprobar que han seleccionado una foto
		    if($_FILES['file']['name'] != ""){ // El campo foto contiene una imagen...        
		        // Primero, hay que validar que se trata de un JPG/GIF/PNG
		        $allowedExts = array("jpg", "peg", "gif", "png", "JPG", "GIF", "PNG", "PEG");
		        //$extension = "jpg";
		        $extension = substr( $_FILES["file"]["name"],-3);
		        if ((($_FILES["file"]["type"] == "image/gif")
		                || ($_FILES["file"]["type"] == "image/jpeg")
		                || ($_FILES["file"]["type"] == "image/png")
		                || ($_FILES["file"]["type"] == "image/jpg"))
		                && in_array($extension, $allowedExts)) {
		            // el archivo es un JPG/GIF/PNG, entonces...
		            
		            $extension = substr( $_FILES["file"]["name"],-3);
		             //$extension = end(explode('.', $_FILES['foto']['name']));
		            $foto = substr(md5(uniqid(rand())),0,10).".".$extension;
		            $directorio = base_url()."../assets/adjuntos";
		            //$directorio = dirname(__FILE__); // directorio de tu elección
		            // almacenar imagen en el servidor

		            move_uploaded_file($_FILES['file']['tmp_name'], $directorio.'/'.$foto);

		            //$minFoto = 'min_'.$foto;
		            //$resFoto = 'PDB_'.$_POST['dni'].'_'.$_POST['cod_unidad'].'.'.$extension;
		            $resFoto = 'aaaa.'.$extension;
		            
		            //tamaño en bits de la imagen cargada
		            //$tam_archivo = filesize($directorio.'/'.$foto);
		            //ancho y alto de la imagen cargada
		            $tam_ancho_alto = getimagesize($directorio.'/'.$foto);

		            if($tam_ancho_alto[0]>$tam_ancho_alto[1]){
		                $ancho=1024;
		                $alto=768;
		            }else{
		                $ancho=768;
		                $alto=1024;                    
		            }
		            $calidad=50;
								//var_dump("aaaaaaaaaaaaaaa");die;
		            $this->resizeImagen($directorio.'/', $foto, $ancho, $alto, $calidad, $resFoto, $extension);
		            
		            //abrir el archivo de la imagen reducida generada para insertarla en la BD
		            $fp = fopen($directorio.'/'.$resFoto, 'r');
		            if ($fp){
		              $data = fread($fp, filesize($directorio.'/'.$resFoto));
		              fclose($fp);
		              $data = base64_encode ($data);
		              unlink($directorio.'/'.$foto);
		              unlink($directorio.'/'.$resFoto);

		              /*CONSULTA PARA GUARDAR EL BLOB EN LA BD*/
		              $datos = array(				
									'id_propiedad' => $id,
									'base64' => $data,
									'activo' => 1
								);

				        $this->AdjuntoModel->postImage($datos);	
		            }
		        }        
		    }
		}
	}

	public function DeleteAdjunto($id_propiedad, $id_imagen)
	{
		$this->AdjuntoModel->deleteAdjunto($id_imagen);

		redirect('/../../../../adjuntoListado/'.$id_propiedad, 'refresh');
	}
}