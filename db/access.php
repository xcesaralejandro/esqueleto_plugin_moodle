<?php
// En este fichero se definen las capacidades y permisos para los diferentes roles
/**
 * @package    students-report
 * @author     César Mora <cesar.mcid@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    // Key = contexto/pluggin:capacidad (local)/(student_reports):usepluggin
    // Para definir la descripción el $string debe ser pluggin:capacidad ($string['student_reports:usepluggin'])    
    'local/student_reports:usepluggin' => array(
        //'riskbitmask'  => RISK_SPAM | RISK_XSS, // Definir riesgos asociados a la acción (Ahora no aplica, 
                                                  // pero lo dejo aquí para implementar tras funcionaldades
                                                  // futuras)
                                                  // Ver riesgos en: https://docs.moodle.org/dev/Hardening_new_Roles_system

        'captype'      => 'read',  //tipo de capacidad de lectura o escritura (read/write)
        'contextlevel' => CONTEXT_COURSE,
        'archetypes'   => array(
            'student'        => CAP_ALLOW,
            'teacher'        => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager'        => CAP_ALLOW
        )
    ),

    'local/student_reports:downloadreport' => array(
        'captype'      => 'read',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes'   => array(
            'teacher'        => CAP_ALLOW,
            'manager'        => CAP_ALLOW
        )
    ),
);
