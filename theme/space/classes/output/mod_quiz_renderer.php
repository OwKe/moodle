<?php

namespace theme_space\output;
use confirm_action;
use html_writer;
use mod_quiz_display_options;
use moodle_url;
use quiz_attempt;
use single_button;

defined('MOODLE_INTERNAL') || die;
require_once($CFG->dirroot.'/mod/quiz/renderer.php');

class mod_quiz_renderer extends \mod_quiz_renderer {

    // OVERRIDE - SKIP SUMMARY PAGE AND REPLACE FINISH BUTTON WITH SUBMIT QUIZ BUTTON.

    protected function attempt_navigation_buttons($page, $lastpage, $navmethod = 'free', $attemptobj = null) {
        $output = '';

        $output .= html_writer::start_tag('div', array('class' => 'submitbtns'));

        if ($page > 0 && $navmethod == 'free') {
            $output .= html_writer::empty_tag('input', array('type' => 'submit', 'name' => 'previous',
                'value' => get_string('navigateprevious', 'quiz'), 'class' => 'mod_quiz-prev-nav btn btn-secondary'));
        }

        if ($lastpage) {
            $output .= $this->skipSummaryAndFinishButton($attemptobj);
        } else {
            $output .= html_writer::empty_tag('input', array('type' => 'submit', 'name' => 'next',
                'value' => get_string('navigatenext', 'quiz'), 'class' => 'mod_quiz-next-nav btn btn-primary'));
        }

        $output .= html_writer::end_tag('div');

        return $output;
    }


    public function skipSummaryAndFinishButton($attemptobj) {
        $output = '';

        // Finish attempt button.
        $options = array(
            'attempt' => $attemptobj->get_attemptid(),
            'timeup' => 0,
            'slots' => '',
            'cmid' => $attemptobj->get_cmid(),
            'sesskey' => sesskey(),
        );

        $button = new single_button(new moodle_url($attemptobj->processattempt_url(), $options), get_string('submitallandfinish', 'quiz'));
        $button->id = 'responseform';
        if ($attemptobj->get_state() == quiz_attempt::IN_PROGRESS) {
            $button->add_action(new confirm_action(get_string('confirmclose', 'quiz'), null,
                get_string('submitallandfinish', 'quiz')));
        }

        $output .= $this->render($button);

        return $output;
    }

    // OVERRIDE - CHANGE THE CONTENT OF THE REVIEW PAGE

    public function review_page(quiz_attempt $attemptobj, $slots, $page, $showall, $lastpage, mod_quiz_display_options $displayoptions, $summarydata) {

        $output = '';
        $output .= $this->header();

        $category = $attemptobj->get_course()->category;

        // CADETS SHOW SIMPLE PAGE

        if($category == 2) {

            $title = $attemptobj->get_quiz_name();

            $data = (object) [
                'title' => $title
            ];

            if (strpos(strtolower($title), 'sample') !== false) {
                $data->sample = true;
            }

            $output .= $this->render_from_template('theme_space/simple-review', $data);

        } else {
            $output .= $this->review_summary_table($summarydata, $page);
            $output .= $this->review_form($page, $showall, $displayoptions, $this->questions($attemptobj, true, $slots, $page, $showall, $displayoptions), $attemptobj);
        }

        $output .= $this->review_next_navigation($attemptobj, $page, $lastpage, $showall);
        $output .= $this->footer();
        return $output;
    }
}
