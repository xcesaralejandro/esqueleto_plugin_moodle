<?php
// Este fichero corresponde a la configuración inicial del pluggin, la que se consulta luego de 
// instalar o actualizar el pluggin

/**
 * @package    students-report
 * @author     César Mora <cesar.mcid@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    define("PREVIOUS_DAY_REPORT", 7);

    $settings = new admin_settingpage('local_student_reports', get_string('pluginname', 'local_student_reports'));

    $title = get_string('previous_days_to_create_report', 'local_student_reports');
    $description = get_string('previous_days_to_create_report_description', 'local_student_reports');

    $settings->add(new admin_setting_configtext('local_student_reports/previousdaysreport', 
                                                $title, 
                                                $description,
                                                PREVIOUS_DAY_REPORT, PARAM_INT));

    // Backup / restore checkbox.
    // $title = get_string('configenablebackup', 'local_mail');
    // $description = get_string('configenablebackupdesc', 'local_mail');
    // $settings->add(new admin_setting_configcheckbox('local_mail/enablebackup', $title, $description, 1));

    // // Legacy navigation.
    // $title = get_string('configlegacynav', 'local_mail');
    // $description = get_string('configlegacynavdesc', 'local_mail');
    // $default = moodle_major_version() < 3.2 ? '1' : '0';
    // $settings->add(new admin_setting_configcheckbox('local_mail/legacynav', $title, $description, $default));

    $ADMIN->add('localplugins', $settings);
}
