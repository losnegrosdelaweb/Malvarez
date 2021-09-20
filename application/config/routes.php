<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';
$route['buscadorHome'] = 'home/BuscarPropiedad';
/* Dashboard - Administración */
$route['dashboard'] = 'admin';

/* Catalogos */

$route['catalogo'] = 'catalogo';
$route['filtrarCatalogo'] = 'catalogo/getCatalogoFiltrado';
$route['catalogo-alquileres'] = 'catalogo/indexAlquileres';

$route['login'] = 'login';
$route['validar'] = 'login/validarLogin';

$route['detpropiedad/(:num)'] = 'detpropiedad/index/$1';
$route['enviarMailPropiedad'] = 'detpropiedad/postEnviarMail';

//Emprendimientos
$route['emprendimientos'] = 'emprendimientos';

//Nosotros
$route['nosotros'] = 'nosotros';

//Contacto
$route['contacto'] = 'contacto';
$route['validarContacto'] = 'contacto/validarContacto';
$route['contactoMail'] = 'contacto/postEnviarMail';

/* Admin */

//Tipo Propiedad Rutas
$route['tipoPropiedad'] = 'tipoPropiedad';
$route['insertPropiedad'] = 'tipoPropiedad/postTipoPropiedad';
$route['getTipoPropiedad/(:num)'] = 'tipoPropiedad/getTipoPropiedad/$1';
$route['putEstadoTipoPropiedad/(:num)'] = 'tipoPropiedad/putEnabledDisabledTipoPropiedad/$1';
$route['cerrarSesion'] = 'admin/CerrarSesion';


//Ubicaciones
$route['ubicacion'] = 'ubicacion';
$route['postUbicacion'] = 'ubicacion/postUbicacion';
$route['getUbicacion/(:num)'] = 'ubicacion/getUbicacion/$1';
$route['putEstadoUbicacion/(:num)'] = 'ubicacion/putEnabledDisabledUbicacion/$1';

//Usuarios
$route['users'] = 'usuario';
$route['insertUsuario'] = 'usuario/postUsuario';
$route['getUsuario/(:num)'] = 'usuario/getUsuario/$1';
$route['putEstadoUsuario/(:num)'] = 'usuario/putEnabledDisabledUsuario/$1';

//Imagenes
$route['ajuntoImagen/(:num)'] = 'adjunto/SubirImagen/$1';
$route['adjuntoListado/(:num)'] = 'propiedad/ListadoAdjuntos/$1';
$route['borrarImagen/(:num)/(:num)'] = 'adjunto/DeleteAdjunto/$1/$2';

//Mantenimiento
$route['mantenimiento'] = 'mantenimiento';

//Propiedades
$route['propiedad'] = 'propiedad';
$route['postPropiedad'] = 'propiedad/postPropiedad';
$route['buscarCiudades/(:num)'] = 'propiedad/getCiudades/$1';
$route['getPropiedad/(:num)'] = 'propiedad/getPropiedad/$1';
$route['putEstadoPropiedad/(:num)'] = 'propiedad/putEnabledDisabledPropiedad/$1';

//Consultas
$route['consulta'] = 'consulta';
$route['insertConsulta'] = 'consulta/postConsulta';
$route['getConsulta/(:num)'] = 'consulta/getConsulta/$1';
$route['putEstadoConsulta/(:num)'] = 'consulta/putEnabledDisabledConsulta/$1';


$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

