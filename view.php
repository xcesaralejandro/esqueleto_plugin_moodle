<?php
    require_once('locallib.php');

    $courseid = required_param('courseid', PARAM_INT);
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
    
    $context = context_course::instance($course->id);
    require_capability('local/student_reports:usepluggin', $context);
    
    set_student_report_page($course);

    $PAGE->requires->js_call_amd('local_student_reports/main','init', ['var_php_to_vue' => 'var_php_to_vue ¡¡WORKING!!']);

    echo $OUTPUT->header();
    echo $OUTPUT->render_from_template('local_student_reports/app', ['var_php_to_mustache' => 'var_php_to_mustache ¡¡WORKING!!']);
    echo $OUTPUT->footer();