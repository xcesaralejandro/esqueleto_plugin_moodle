<?php

/**
 * @package    students-report
 * @author     César Mora <cesar.mcid@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019072802; // Versión actual en formato fecha (YYYYMMDDXX) XX son digitos de versión.
$plugin->requires  = 2016120502; // Versión de moodle requerida [Se puede obtener del fichero version.php en la raiz].
$plugin->component = 'local_student_reports'; // contexto_nombrepluggin (directorio_nombrecarpeta) [El fichero en /lang/en/ debe llevar el mismo nombre].
$plugin->maturity  = MATURITY_ALPHA; //Opciones: MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC or MATURITY_STABLE
$plugin->release = "0.0.0.1";

// Definir dependencias que vaya a utilizar el pluggin
$plugin->dependencies = array(
    'mod_resource' => ANY_VERSION  // Definir cualquier versión.
    // 'mod_resource' => 2014020300, // Requerir desde una versión en particular (Está en el fichero version.php 
                                     // dentro del componente (EJ: mod/resource/version.php)).
);