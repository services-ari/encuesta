<?php


$lang['rtl']      = false;
$lang['lang']     = 'en';
$lang['close']    = 'Close';
$lang['loading']  = 'Cargando...';

# + Timepo
$lang['timedate']['time_second'] = "segundo";
$lang['timedate']['time_minute'] = "minuto";
$lang['timedate']['time_hour'] = "hora";
$lang['timedate']['time_day'] = "día";
$lang['timedate']['time_week'] = "semana";
$lang['timedate']['time_month'] = "mes";
$lang['timedate']['time_year'] = "año";
$lang['timedate']['time_decade'] = "década";
$lang['timedate']['time_ago'] = "atrás";


# + Menu
$lang['menu'] = [
	"home"    => "Inicio",
	"forms"   => "Encuestas",
	"about"   => "About us",
	"plans"   => "Planes",
	"welcome" => "Bienvenido",
	"new"     => "Nueva encuesta",
	"admin"   => "Dashboard",
	"info"    => "Perfil",
	"logout"  => "Salir",
	"signin"  => "Sign in"
];


# + Sign in (login)
$lang['login'] = [
	"username" => "Usuario o Correo",
	"password" => "Contraseña",
	"keep"     => "Mantenerme activo",
	"button"   => "Entrar",
	"footer"   => "¿No tienes una cuenta?",
	"footer_l"   => "Regístrate gratis",
	"alert"    => [
    	"required"   => "¡Dejaste el nombre de usuario o la contraseña vacío!",
    	"moderat"    => "Membership has been banned by admin, if you think this is a mistak please feel free to contact us.",
    	"activation" => "Membership need email activation.",
    	"approve"    => "Membership need to be approved by administration.",
      "success"    => "Has iniciado sesión con éxito, deseamos que lo pases bien.",
      "social"     => "There is a problem with your social ID, the username you want to login with is not yours or already exist with a different social ID!",
      "error"      => "¡El nombre de usuario o la contraseña no están disponibles!"
  ]
];

# + Sign up (login)
$lang['signup'] = [
	"username" => "Usuario",
	"dni" => "DNI",
	"oficio" => "Soy un",
	"password" => "Contraseña",
	"email" => "Correo Electrónico",
	"button"   => "Registrarme",
	"footer"   => "¿Tiene usted una cuenta?",
	"footer_l"   => "Si tengo cuenta",
	"alert"    => [
    "required"         => "¡Todos los campos marcados con * son obligatorios!",
    "char_username"    => "¡El nombre de usuario debe contener solo letras!",
    "limited_username" => "¡El nombre de usuario debe tener un límite de entre 3 y 15 caracteres!",
    "exist_username"   => "¡El nombre de usuario ya existe!",
    "limited_pass"     => "La contraseña debe tener un límite de entre 6 y 12 caracteres!",
    "repass"           => "¡La nueva contraseña debe coincidir con la contraseña!",
    "check_email"      => "Introduzca un correo electrónico válido.",
    "exist_email"      => "¡La dirección de correo electrónico ya existe!",
		"exist_dni"        => "¡El DNI ingresado ya esta registrado!",
    "birth"            => "Tu fecha de nacimiento debe estar entre<b>1-1-2005</b> y <b>1-1-1942</b>!",
    "success"          => "El proceso de registro ha finalizado con éxito.",
    "success1"         => "El proceso de registro ha finalizado con éxito. Pero aún necesita la aprobación de la administración.",
    "success2"         => "El proceso de registro ha finalizado con éxito. Pero aún es necesario activarlo por correo electrónico.",
    "error"            => "¡El nombre de usuario o la contraseña no están disponibles!"
  ]
];

# + User Details | Detalles de usuarios
$lang['details'] = [
	"title" => "Información de perfil:",
	"firstname" => "Nombre",
	"lastname"  => "Apellidos",
	"dni"  => "dni",
	"oficio"  => "Tipo de usuario",
	"username"  => "Editar Usuario",
	"password"  => "Editar Contraseña",
	"email"     => "Editar Correo Eletrónico",
	"male"      => "Masculino",
	"female"    => "Femenino",
	"country"   => "País",
	"state"     => "Distrito/Region",
	"city"      => "Ciudad",
	"address"   => "Dirección",
	"image_n"   => "No hay imagen seleccionada..",
	"image_c"   => "Elegir imagen",
	"button"    => "Guardar info",
	"alert"     => [
    "success" => "El proceso de edición de información ha finalizado correctamente."
  ]
];

# + Survey | Encuesta
$lang['survey'] = [
	"close_h" => "Este estudio está actualmente cerrado.",
	"close_p" => "Quiere crear su propia encuesta?",
	"button"  => "REGÍSTRATE GRATIS",
	"back"  => "Atras",
	"next"  => "Seguir",
	"alert"     => [
    "error" => "requerido!"
  ]
];


# + Page o página: Alerts | Alerta
$lang['alerts'] = [
	"no-data"    => "¡Datos no encontrados!",
	"permission" => "¡No puede acceder a esta página porque tiene que actualizar su plan!",
	"wrong"      => "¡Algo salió mal!",
	'required'   => '¡Todos los campos marcados con * son obligatorios!',
	'logout'    => '¿Estás seguro de que quieres cerrar sesión?',
	"danger"     => "Oh Cielos!",
	"success"    => "Bien hecho!",
	"warning"    => "Advertencia!",
	"info"       => "¡Aviso!"
];


# + Responses | Respuestas 
$lang['responses'] = [
	"title" => "respuestas a la encuesta",
	"btn_1" => "Ver reporte",
	"btn_2"  => "Editar encuesta"
];


# + Rapports | Reportes
$lang['rapports'] = [
	"title"     => "Mi Encuesta",
	"btn1"      => "Crear Encuesta",
	"tituesta"      => "Estadisticas :",
	"btn2"      => "Editar Encuesta",
	"stats_d"     => "Estadísticas de los últimos 7 días",
	"stats_m"     => "Estadísticas de este año",
	"title"     => "Título:",
	"views"     => "Vistas:",
	"roficio"     => "Respuestas de:",
	"responses" => "Respuestas:",
	"rate"      => "Calificación:",
	"start"     => "Fecha de inicio:",
	"end"       => "Fecha final:",
	"last_r"    => "Última respuesta:",
	"days"      => "Los últimos 7 días",
	"months"    => "Mes",
	"results"   => "Resutaldos",
	"export"    => "Exportar datos",
	"by"        => "Respuesta de",
	"people"    => "personas",
	"alert"     => [
    "success" => "El proceso de edición de información ha finalizado correctamente."
  ]
];




# + New/Edit survey | Nueva/editar encuesta
$lang['new'] = [
	"title"       => "Crear nueva encuesta",
	"questions"   => "Preguntas",
	"oficio2"   => "A quien va dirigido",
	"welcome"     => "Página de bienvenida",
	"thanks"      => "Página de gracias",
	"design"      => "Diseño",
	"stitle"      => "Título de encuesta",
	"start"       => "Fecha de inicio",
	"end"         => "Fecha de finalización",
	"url"         => "URL para direccionar al finalizar",
	"private"     => "Encuesta privada (Solo por URL)",
	"unpub"       => "De manera pública",
	"ip"          => "Restricción por IP",
	"start_q"     => "¡Empezar encuesta!",
	"new_step"    => "Agregar nuevo paso",
	"new_q"       => "Crear Nueva pregunta",
	"new_qpl"     => "Escribe tu pregunta",
	"new_qde"     => "Escribe una breve descripción de tu pregunta.",
	"new_qre"     => "Pregunta requerida",
	"new_qln"     => "Respuestas en la misma línea",
	"new_a"       => "Respuestas",
	"new_abtn"    => "Agregar",
	"new_as1"    => "Texto simple",
	"new_as2"    => "Texto Multiple",
	"new_as3"    => "Opción múltiple (Checkbox)",
	"new_as4"    => "Opción múltiple (Radio)",
	"new_as5"    => "Estrellas",
	"new_as6"    => "Fecha",
	"new_as7"    => "Número de celular",
	"new_as8"    => "País o ciudad",
	"new_as9"    => "Correo electrónico",
	"new_asi"    => "Icon",
	"new_aspl"    => "Ejemplo: ¿Qué opinas del servicio?",
	"new_asck"    => "Agregar respuesta",
	"wp"          => "Edita tu página de bienvenida a tu encuesta",
	"wp_h"        => "Título",
	"wp_btn"      => "Texto del botón para iniciar",
	"wp_icon"     => "Seleccinar un icono de boton",
	"tx"          => "Edita tu página de finalización de encuesta",
	"tx_h"        => "Título",
	"tx_btn"      => "Texto del botón finalizar",
	"tx_icon"     => "Seleccionar icono de boton",
	"send"        => "Enviar encuesta",
	"design_bs"   => "Button shadow:",
	"design_bb"   => "Button border:",
	"design_si"   => "Size:",
	"design_s"    => "Style:",
	"design_c"    => "Color",
	"design_btg"  => "Button background:",
	"design_g"    => "Gradient",
	"design_n"    => "Normal",
	"design_btc"  => "Butoon text color:",
	"design_sbg"  => "Survey background:",
	"design_stbg" => "Step background:",
	"design_ibg"  => "Input background:",
	"design_yes"  => "Yes",
	"design_no"   => "No",
	"alert" => [
    "error" =>  "Error! ¡Algunos campos de la encuesta son obligatorios!",
    "error1" => "Error! Por favor asegúrese de agregar {var}!",
    "error2" => "Error! ¡Asegúrese de agregar preguntas al paso!",
    "error3" => "Error! ¡Asegúrate de que la pregunta {var} tenga un valor!",
    "error4" => "Error! ¡Asegúrese de agregar respuestas a la pregunta!",
    "error5" => "Error! ¡Asegúrese de que todas las respuestas en cuestión {var} tengan un valor!",
    "success" => "¡éxito! ¡¡todo listo!!"
  ]
];

$lang['edit'] = [
	"title" => "Editar una nueva encuesta",
	"alert" => [
    "success" => "  Se han calculado sus pagos!"
  ]
];

# + Index

$lang['mysurvys'] = [
	"title"     => "Mis encuestas creadas",
	"alltitle"     => "Encuestas públicas",
	"create"    => "Crear encuesta",
	"status"    => "Estado",
	"oficio" => "Tipo de Usuario",
	"name"      => "Nombre de encuesta",
	"views"     => "Visto",
	"responses" => "Respuestas",
	"rate"      => "Completado al",
	"created"   => "Creado",
	"last_r"    => "Última respuesta",
	"op_view"   => "Ver encuesta",
	"op_stats"  => "Estadísticas",
	"op_resp"   => "Respuestas",
	"op_edit"   => "Editar encuesta",
	"op_delete" => "Eliminar encuesta",
	"op_embed"  => "Insertar encuesta",
	"op_send"   => "Enviar encuesta",
	"alert" => [
    "success" => "¡Sus pagos han sido calculados!"
  ]
];


# + Dashboard

$lang['dashboard'] = [
	"hello"     => "Hola,",
	"welcome"     => "Bienvenido de nuevo a su panel de control.",
	"stats_line_d"     => "los últimos 7 días",
	"stats_line_m"     => "de este año",
	"stats_bar_d"     => "últimos 7 días",
	"stats_bar_m"     => "de este año",
	"surveys"     => "Encuestas",
	"users"     => "Usuarios",
	"responses"     => "Respuestas",
	"questions"     => "Preguntas",
	"new_u"     => "Nuevos usuarios (24h)",
	"new_p"     => "Últimos pagos (24h)",
	"new_s"     => "Últimas encuestas (24h)",
	"u_users"     => "Miembros",
	"u_status"     => "Estado",
	"u_username"     => "Usuario",
	"u_plan"     => "Plan",
	"u_credits"     => "Creditos",
	"u_last_p"     => "Ultimo pago",
	"u_registred"     => "Registrado hace",
	"u_updated"     => "Actualizado hace",
	"u_oficio"     => "Tipo de usuario",
	"u_delete"     => "Delete User",
	"u_edit"     => "Edit User",
	"p_title"     => "Pagos",
	"p_user"     => "Usuario",
	"p_status"     => "Estado",
	"p_plan"     => "Plan",
	"p_amount"     => "Monto",
	"p_date"     => "Fecha de pago",
	"p_txn"     => "Taza",
	"set_title"     => "Configuración general",
	"set_stitle"     => "Título:",
	"set_keys"     => "Palabras clave:",
	"set_desc"     => "Descripción:",
	"set_url"     => "URl del sitio:",

	"set_noreply"     => "Email de respuesta:",
	"set_register"     => "Site Registration",

	"set_btn"     => "Guardar configuración",
	"alert" => [
    "success" => "La configuración se ha enviado correctamente."
  ]
];
