<?php
  // Deposite aquí las funciones locales
  require_once('../../config.php');

  function dd($var){
    print_object($var);
    die();
  }

  function dump($var){
    print_object($var);
  }

  function set_student_report_page($course){
    global $PAGE;

    $url = '/local/student_reports/view.php';

    $plugin_name = get_string('pluginname', 'local_student_reports');
    $PAGE->set_url(new moodle_url($url));
    $PAGE->set_title($plugin_name);
    $PAGE->set_pagelayout('standard');
    $PAGE->set_heading($course->fullname);
    require_login($course, false);
  }