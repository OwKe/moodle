<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Custom space icon system
 *
 * @package    theme_space
 * @copyright  2019 Marcin Czaja - Rosea Themes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_space\util;

use core\output\icon_system_font;
use renderer_base;
use pix_icon;

defined('MOODLE_INTERNAL') || die();

/**
 * Class allowing different systems for mapping and rendering icons.
 *
 * @package    theme_space
 * @copyright  2019 Marcin Czaja - Rosea Themes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class icon_system extends icon_system_font {

    /**
     * @var array $map Cached map of moodle icon names to font awesome icon names.
     */
    private $map = [];

    /**
     * Get the icon mapping
     *
     * @return array
     */
    public function get_core_icon_map() {
        return [
            'core:docs' => 'fas fa-info-circle',
            'core:help' => 'far fa-question-circle text-muted',
            'core:req' => 'fas fa-exclamation-triangle text-danger small-icon mx-2',
            'core:movehere' => 'fas fa-compress-arrows-alt',
            'core:a/add_file' => 'far fa-file',
            'core:a/create_folder' => 'fas fa-folder-plus',
            'core:a/download_all' => 'fas fa-download',
            'core:a/help' => 'far fa-question-circle',
            'core:a/logout' => 'fas fa-sign-out-alt',
            'core:a/refresh' => 'fas fa-redo-alt',
            'core:a/search' => 'fas fa-search',
            'core:a/setting' => 'fas fa-cog',
            'core:a/view_icon_active' => 'fas fa-th',
            'core:a/view_list_active' => 'fas fa-list',
            'core:a/view_tree_active' => 'fas fa-folder',
            'core:b/bookmark-new' => 'fas fa-bookmark',
            'core:b/document-edit' => 'fas fa-edit',
            'core:b/document-new' => 'far fa-file',
            'core:b/document-properties' => 'fas fa-info-circle',
            'core:b/edit-copy' => 'far fa-copy',
            'core:b/edit-delete' => 'fas fa-trash',
            'core:e/abbr' => 'fas fa-comment-alt',
            'core:e/absolute' => 'fas fa-crosshairs',
            'core:e/accessibility_checker' => 'fas fa-universal-access',
            'core:e/acronym' => 'fas fa-comment-alt',
            'core:e/advance_hr' => 'fas fa-arrows-alt-h',
            'core:e/align_center' => 'fas fa-align-center',
            'core:e/align_left' => 'fas fa-align-left',
            'core:e/align_right' => 'fas fa-align-right',
            'core:e/anchor' => 'fas fa-chain',
            'core:e/backward' => 'fas fa-undo-alt',
            'core:e/bold' => 'fas fa-bold',
            'core:e/bullet_list' => 'fas fa-list-ul',
            'core:e/cancel' => 'fas fa-times',
            'core:e/cell_props' => 'fas fa-info-circle',
            'core:e/cite' => 'fas fa-quote-right',
            'core:e/cleanup_messy_code' => 'fas fa-eraser',
            'core:e/clear_formatting' => 'fas fa-i-cursor',
            'core:e/copy' => 'fas fa-clone',
            'core:e/cut' => 'fas fa-scissors',
            'core:e/decrease_indent' => 'fas fa-outdent',
            'core:e/delete_col' => 'far fa-minus-square',
            'core:e/delete_row' => 'far fa-minus-square',
            'core:e/delete' => 'far fa-minus-square',
            'core:e/delete_table' => 'far fa-minus-square',
            'core:e/document_properties' => 'fas fa-info-circle',
            'core:e/emoticons' => 'far fa-smile',
            'core:e/find_replace' => 'fas fa-search-plus',
            'core:e/forward' => 'fas fa-arrow-right',
            'core:e/fullpage' => 'fas fa-arrows-alt',
            'core:e/fullscreen' => 'fas fa-arrows-alt',
            'core:e/help' => 'far fa-question-circle',
            'core:e/increase_indent' => 'fas fa-indent',
            'core:e/insert_col_after' => 'fas fa-columns',
            'core:e/insert_col_before' => 'fas fa-columns',
            'core:e/insert_date' => 'far fa-calendar-alt',
            'core:e/insert_edit_image' => 'fas fa-image',
            'core:e/insert_edit_link' => 'fas fa-link',
            'core:e/insert_edit_video' => 'far fa-file-video',
            'core:e/insert_file' => 'far fa-hdd',
            'core:e/insert_horizontal_ruler' => 'fas fa-arrows-alt-h',
            'core:e/insert_nonbreaking_alpha' => 'far fa-square',
            'core:e/insert_page_break' => 'fas fa-window-minimize',
            'core:e/insert_row_after' => 'far fa-plus-square',
            'core:e/insert_row_before' => 'far fa-plus-square',
            'core:e/insert' => 'far fa-plus-square',
            'core:e/insert_time' => 'fas fa-clock',
            'core:e/italic' => 'fas fa-italic',
            'core:e/justify' => 'fas fa-align-justify',
            'core:e/layers_over' => 'fas fa-arrow-alt-circle-up',
            'core:e/layers' => 'fas fa-window-restore',
            'core:e/layers_under' => 'fas fa-stream',
            'core:e/left_to_right' => 'fas fa-chevron-right',
            'core:e/manage_files' => 'fas fa-cog',
            'core:e/math' => 'fas fa-calculator',
            'core:e/merge_cells' => 'fas fa-compress',
            'core:e/new_document' => 'far fa-file',
            'core:e/numbered_list' => 'fas fa-list-ol',
            'core:e/page_break' => 'fas fa-window-minimize',
            'core:e/paste' => 'fas fa-clipboard',
            'core:e/paste_text' => 'fas fa-clipboard',
            'core:e/paste_word' => 'fas fa-clipboard',
            'core:e/prevent_autolink' => 'fas fa-exclamation-triangle',
            'core:e/preview' => 'fas fa-search-plus',
            'core:e/print' => 'fas fa-print',
            'core:e/question' => 'far fa-question-circle',
            'core:e/redo' => 'fas fa-redo-alt',
            'core:e/remove_link' => 'fas fa-unlink',
            'core:e/remove_page_break' => 'fas fa-remove',
            'core:e/resize' => 'fas fa-expand',
            'core:e/restore_draft' => 'fas fa-undo-alt',
            'core:e/restore_last_draft' => 'fas fa-undo-alt',
            'core:e/right_to_left' => 'fas fa-chevron-left',
            'core:e/row_props' => 'fas fa-info-circle',
            'core:e/save' => 'fas fa-save',
            'core:e/screenreader_helper' => 'fas fa-braille',
            'core:e/search' => 'fas fa-search',
            'core:e/select_all' => 'fas fa-arrows-alt-h',
            'core:e/show_invisible_characters' => 'fas fa-eye-slash',
            'core:e/source_code' => 'fas fa-code',
            'core:e/special_character' => 'fas fa-edit',
            'core:e/spellcheck' => 'fas fa-check',
            'core:e/split_cells' => 'fas fa-columns',
            'core:e/strikethrough' => 'fas fa-strikethrough',
            'core:e/styleprops' => 'fas fa-info-circle',
            'core:e/subscript' => 'fas fa-subscript',
            'core:e/superscript' => 'fas fa-superscript',
            'core:e/table_props' => 'fas fa-table',
            'core:e/table' => 'fas fa-table',
            'core:e/template' => 'fas fa-sticky-note',
            'core:e/text_color_picker' => 'fas fa-paint-brush',
            'core:e/text_color' => 'fas fa-paint-brush',
            'core:e/text_highlight_picker' => 'far fa-lightbulb',
            'core:e/text_highlight' => 'far fa-lightbulb',
            'core:e/tick' => 'fas fa-check',
            'core:e/toggle_blockquote' => 'fas fa-quote-left',
            'core:e/underline' => 'fas fa-underline',
            'core:e/undo' => 'fas fa-undo-alt',
            'core:e/visual_aid' => 'fas fa-universal-access',
            'core:e/visual_blocks' => 'fas fa-audio-description',
            'core:e/styleparagraph' => 'fas fa-font',
            'core:i/addblock' => 'far fa-plus-square',
            'core:i/assignroles' => 'fas fa-user-plus',
            'core:i/backup' => 'far fa-file-archive',
            'core:i/badge' => 'fas fa-trophy',
            'core:i/calc' => 'fas fa-calculator',
            'core:i/calendar' => 'far fa-calendar-alt',
            'core:i/calendareventdescription' => 'fas fa-align-left',
            'core:i/calendareventtime' => 'fas fa-clock',
            'core:i/caution' => 'fas fa-exclamation-triangle text-danger',
            'core:i/checked' => 'fas fa-check',
            'core:i/checkpermissions' => 'fas fa-lock-open',
            'core:i/cohort' => 'fas fa-users',
            'core:i/competencies' => 'fas fa-check',
            'core:i/completion_self' => 'fas fa-user-circle',
            'core:i/dashboard' => 'fas fa-columns',
            'core:i/lock' => 'fas fa-lock',
            'core:i/categoryevent' => 'fas fa-book',
            'core:i/course' => 'fas fa-graduation-cap',
            'core:i/courseevent' => 'fas fa-graduation-cap',
            'core:i/db' => 'fas fa-database',
            'core:i/delete' => 'fas fa-trash',
            'core:i/down' => 'fas fa-arrow-down',
            'core:i/dragdrop' => 'fas fa-arrows-alt',
            'core:i/duration' => 'fas fa-clock',
            'core:i/edit' => 'fas fa-edit',
            'core:i/email' => 'fas fa-envelope',
            'core:i/empty' => 'far fa-folder',
            'core:i/enrolmentsuspended' => 'fas fa-pause',
            'core:i/enrolusers' => 'fas fa-user-plus',
            'core:i/expired' => 'fas fa-exclamation-triangle text-danger',
            'core:i/export' => 'fas fa-download',
            'core:i/files' => 'far fa-hdd',
            'core:i/filter' => 'fas fa-filter',
            'core:i/flagged' => 'fas fa-flag-checkered',
            'core:i/folder' => 'fas fa-folder',
            'core:i/grade_correct' => 'fas fa-check text-success',
            'core:i/grade_incorrect' => 'fas fa-times text-danger',
            'core:i/grade_partiallycorrect' => 'fas fa-check-square',
            'core:i/grades' => 'fas fa-book-open',
            'core:i/groupevent' => 'fas fa-users',
            'core:i/groupn' => 'fas fa-users-cog text-danger',
            'core:i/group' => 'fas fa-users',
            'core:i/groups' => 'fas fa-users-cog',
            'core:i/groupv' => 'fas fa-users',
            'core:i/home' => 'fas fa-home',
            'core:i/hide' => 'fas fa-eye',
            'core:i/hierarchylock' => 'fas fa-lock',
            'core:i/import' => 'fas fa-arrow-alt-circle-up',
            'core:i/info' => 'fas fa-info-circle',
            'core:i/invalid' => 'fas fa-times text-danger',
            'core:i/item' => 'fas fa-circle',
            'core:i/loading' => 'fas fa-circle-notch fa-spin',
            'core:i/loading_small' => 'fas fa-circle-notch fa-spin',
            'core:y/loading' => 'fas fa-circle-notch fa-spin',
            'core:i/lock' => 'fas fa-lock',
            'core:i/log' => 'fas fa-list-alt',
            'core:i/mahara_host' => 'fas fa-id-badge',
            'core:i/manual_item' => 'far fa-square',
            'core:i/marked' => 'fas fa-circle',
            'core:i/marker' => 'fas fa-highlighter',
            'core:i/mean' => 'fas fa-calculator',
            'core:i/menu' => 'fas fa-list-alt',
            'core:i/menubars' => 'fas fa-menu',
            'core:i/mnethost' => 'fas fa-external-link',
            'core:i/moodle_host' => 'fas fa-graduation-cap',
            'core:i/move_2d' => 'fas fa-arrows-alt',
            'core:i/navigationitem' => 'far fa-folder',
            'core:i/ne_red_mark' => 'fas fa-remove',
            'core:i/new' => 'fas fa-bolt',
            'core:i/news' => 'far fa-newspaper',
            'core:i/nosubcat' => 'far fa-plus-square',
            'core:i/notifications' => 'far fa-bell',
            'core:i/open' => 'fas fa-folder-open',
            'core:i/outcomes' => 'fas fa-tasks',
            'core:i/payment' => 'fas fa-money',
            'core:i/permissionlock' => 'fas fa-lock',
            'core:i/permissions' => 'fas fa-edit',
            'core:i/persona_sign_in_black' => 'fas fa-male',
            'core:i/portfolio' => 'fas fa-id-badge',
            'core:i/preview' => 'fas fa-search-plus',
            'core:i/privatefiles' => 'far fa-hdd',
            'core:i/progressbar' => 'fas fa-spinner fa-spin',
            'core:i/publish' => 'fas fa-share',
            'core:i/questions' => 'far fa-question-circle',
            'core:i/reload' => 'fas fa-redo-alt',
            'core:i/report' => 'fas fa-chart-area',
            'core:i/repository' => 'far fa-hdd-o',
            'core:i/restore' => 'fas fa-arrow-alt-circle-up',
            'core:i/return' => 'fas fa-undo-alt',
            'core:i/role' => 'fas fa-user-md',
            'core:i/rss' => 'fas fa-rss',
            'core:i/rsssitelogo' => 'fas fa-graduation-cap',
            'core:i/scales' => 'fas fa-balance-scale',
            'core:i/scheduled' => 'fas fa-calendar-check-o',
            'core:i/search' => 'fas fa-search',
            'core:i/section' => 'far fa-folder',
            'core:i/settings' => 'fas fa-cog',
            'core:i/show' => 'fas fa-eye-slash',
            'core:i/siteevent' => 'fas fa-globe-americas',
            'core:i/star-rating' => 'fas fa-star',
            'core:i/stats' => 'fas fa-line-chart',
            'core:i/switch' => 'fas fa-exchange',
            'core:i/switchrole' => 'fas fa-user-secret',
            'core:i/twoway' => 'fas fa-arrows-alt-h',
            'core:i/unchecked' => 'far fa-square',
            'core:i/unflagged' => 'fas fa-flag-o',
            'core:i/unlock' => 'fas fa-unlock',
            'core:i/up' => 'fas fa-arrow-up',
            'core:i/userevent' => 'fas fa-user',
            'core:i/user' => 'fas fa-user',
            'core:i/users' => 'fas fa-users',
            'core:i/valid' => 'fas fa-check text-success',
            'core:i/warning' => 'fas fa-exclamation-triangle text-danger',
            'core:i/withsubcat' => 'far fa-plus-square',
            'core:i/star' => 'fas fa-star',
            'core:i/star-half' => 'fas fa-star-half-alt',
            'core:i/moremenu' => 'fas fa-ellipsis-v',
            'core:i/previous' => 'fas fa-arrow-left',
            'core:i/next' => 'fas fa-arrow-right',
            'core:i/checkedcircle' => 'fas fa-check-circle',
            'core:i/uncheckedcircle' => 'far fa-circle',
            'core:i/sendmessage' => 'far fa-paper-plane',
            'core:i/location' => 'fas fa-map-marker-alt',
            'core:m/USD' => 'fas fa-usd',
            'core:t/addcontact' => 'fas fa-address-card',
            'core:t/add' => 'far fa-plus-square',
            'core:t/approve' => 'fas fa-thumbs-up',
            'core:t/assignroles' => 'fas fa-user-cog',
            'core:t/award' => 'fas fa-trophy',
            'core:t/backpack' => 'fas fa-shopping-bag',
            'core:t/backup' => 'fas fa-arrow-circle-down',
            'core:t/block' => 'fas fa-ban',
            'core:t/block_to_dock_rtl' => 'fas fa-chevron-right',
            'core:t/block_to_dock' => 'fas fa-chevron-left',
            'core:t/calc_off' => 'fas fa-calculator', // TODO: Change to better icon once we have stacked icon support or more icons.
            'core:t/calc' => 'fas fa-calculator',
            'core:t/check' => 'fas fa-check',
            'core:t/cohort' => 'fas fa-users',
            'core:t/collapsed_empty_rtl' => 'far fa-plus-square',
            'core:t/collapsed_empty' => 'far fa-plus-square',
            'core:t/collapsed_rtl' => 'far fa-plus-square',
            'core:t/collapsed' => 'far fa-plus-square',
            'core:t/contextmenu' => 'fas fa-cog',
            'core:t/copy' => 'fas fa-copy',
            'core:t/delete' => 'fas fa-trash',
            'core:t/dockclose' => 'fas fa-window-close',
            'core:t/dock_to_block_rtl' => 'fas fa-chevron-right',
            'core:t/dock_to_block' => 'fas fa-chevron-left',
            'core:t/download' => 'fas fa-download',
            'core:t/down' => 'fas fa-arrow-down',
            'core:t/dropdown' => 'fas fa-cog',
            'core:t/editinline' => 'fas fa-edit',
            'core:t/edit_menu' => 'fas fa-cog',
            'core:t/editstring' => 'fas fa-edit',
            'core:t/edit' => 'fas fa-cog',
            'core:t/emailno' => 'fas fa-ban',
            'core:t/email' => 'fas fa-envelope-o',
            'core:t/enrolusers' => 'fas fa-user-plus',
            'core:t/expanded' => 'fas fa-caret-down',
            'core:t/go' => 'fas fa-play',
            'core:t/grades' => 'fas fa-book-open',
            'core:t/groupn' => 'fas fa-user',
            'core:t/groups' => 'fas fa-user-cog',
            'core:t/groupv' => 'fas fa-user-circle',
            'core:t/hide' => 'fas fa-eye',
            'core:t/left' => 'fas fa-arrow-left',
            'core:t/less' => 'fas fa-caret-up',
            'core:t/locked' => 'fas fa-lock',
            'core:t/lock' => 'fas fa-unlock',
            'core:t/locktime' => 'fas fa-lock',
            'core:t/markasread' => 'fas fa-check',
            'core:t/messages' => 'far fa-comment-dots',
            'core:t/message' => 'far fa-comment-dots',
            'core:t/more' => 'fas fa-caret-down',
            'core:t/move' => 'fab fa-trello',
            'core:t/online' => 'fas fa-circle',
            'core:t/passwordunmask-edit' => 'fas fa-edit',
            'core:t/passwordunmask-reveal' => 'fas fa-eye',
            'core:t/portfolioadd' => 'far fa-plus-square',
            'core:t/preferences' => 'fas fa-cog',
            'core:t/preview' => 'fas fa-search-plus',
            'core:t/print' => 'fas fa-print',
            'core:t/removecontact' => 'fas fa-user-times',
            'core:t/reset' => 'fas fa-redo-alt',
            'core:t/restore' => 'fas fa-arrow-circle-up',
            'core:t/right' => 'fas fa-arrow-right',
            'core:t/show' => 'fas fa-eye-slash',
            'core:t/sort_asc' => 'fas fa-sort-amount-down',
            'core:t/sort_desc' => 'fas fa-sort-amount-up',
            'core:t/sort' => 'fas fa-sort',
            'core:t/stop' => 'fas fa-stop',
            'core:t/switch_minus' => 'far fa-minus-square',
            'core:t/switch_plus' => 'far fa-plus-square',
            'core:t/switch_whole' => 'far fa-square',
            'core:t/tags' => 'fas fa-tags',
            'core:t/unblock' => 'far fa-comment-alt',
            'core:t/unlocked' => 'fas fa-lock-open',
            'core:t/unlock' => 'fas fa-lock',
            'core:t/up' => 'fas fa-arrow-up',
            'core:t/user' => 'fas fa-user',
            'core:t/viewdetails' => 'fas fa-list',
            'core:t/collapsedcaret' => 'fas fa-caret-down',
            'core:t/downlong' => 'fas fa-long-arrow-alt-down',
            'core:t/uplong' => 'fas fa-long-arrow-alt-up',
            'core:t/export' => 'fas fa-download',
            'core:t/emptystar' => 'far fa-star',
            'core:t/sort_by' => 'fas fa-sort-amount-up-alt',
            'atto_collapse:icon' => 'fas fa-bars',
            'atto_h5p:icon' => 'fas fa-laptop-code',
            'atto_recordrtc:i/videortc' => 'far fa-file-video',
            'atto_recordrtc:i/audiortc' => 'fas fa-microphone',
            'enrol_guest:withpassword' => 'fas fa-key',
            'enrol_guest:withoutpassword' => 'fas fa-unlock-alt',
            'enrol_self:withoutkey' => 'fas fa-sign-in-alt',
            'enrol_self:withkey' => 'fas fa-key',
            'mod_lesson:e/copy' => 'fas fa-clone',
            'mod_forum:i/pinned' => 'fas fa-thumbtack',
            'mod_forum:t/selected' => 'fas fa-check',
            'mod_forum:t/subscribed' => 'fas fa-envelope-open-text',
            'mod_forum:t/unsubscribed' => 'fas fa-envelope',
            'mod_book:chapter' => 'fas fa-bookmark',
            'mod_book:nav_prev' => 'fas fa-arrow-left',
            'mod_book:nav_prev_dis' => 'fas fa-arow-left',
            'mod_book:nav_sep' => 'fas fa-minus',
            'mod_book:add' => 'far fa-plus-square',
            'mod_book:nav_next' => 'fas fa-arrow-right',
            'mod_book:nav_next_dis' => 'fas fa-arrow-right',
            'mod_book:nav_exit' => 'fas fa-times',
            'mod_data:field/checkbox' => 'far fa-check-square',
            'mod_data:field/date' => 'fas fa-table',
            'mod_data:field/file' => 'far fa-file',
            'mod_data:field/latlong' => 'fas fa-globe-africa',
            'mod_data:field/menu' => 'fas fa-bars',
            'mod_data:field/multimenu' => 'fas fa-grip-vertical',
            'mod_data:field/number' => 'fas fa-calculator',
            'mod_data:field/picture' => 'far fa-image',
            'mod_data:field/radiobutton' => 'far fa-check-circle',
            'mod_data:field/text' => 'fas fa-font',
            'mod_data:field/textarea' => 'fas fa-pen-fancy',
            'mod_data:field/url' => 'fas fa-link',
            'mod_scorm:failed' => 'far fa-times-circle text-danger',
            'mod_scorm:completed' => 'fas fa-check-circle green',
            'mod_scorm:passed' => 'fas fa-check-circle green',
            'mod_scorm:incomplete' => 'fas fa-spinner text-danger',
            'mod_scorm:notattempted' => 'far fa-circle',
            'mod_feedback:required' => 'fas fa-exclamation-circle',
            'mod_forum:t/star' => 'fas fa-star',
            'tool_usertours:t/export' => 'fas fa-download',
            'tool_recyclebin:trash' => 'fas fa-trash',
            'theme:fp/add_file' => 'far fa-file',
            'theme:fp/alias' => 'fas fa-share',
            'theme:fp/alias_sm' => 'fas fa-share',
            'theme:fp/check' => 'fas fa-check',
            'theme:fp/create_folder' => 'fas fa-folder-plus',
            'theme:fp/cross' => 'fas fa-remove',
            'theme:fp/download_all' => 'fas fa-download',
            'theme:fp/help' => 'far fa-question-circle',
            'theme:fp/link' => 'fas fa-link',
            'theme:fp/link_sm' => 'fas fa-link',
            'theme:fp/logout' => 'fas fa-sign-out-alt',
            'theme:fp/path_folder' => 'fas fa-folder',
            'theme:fp/path_folder_rtl' => 'fas fa-folder',
            'theme:fp/refresh' => 'fas fa-redo-alt',
            'theme:fp/search' => 'fas fa-search',
            'theme:fp/setting' => 'fas fa-cog',
            'theme:fp/view_icon_active' => 'fas fa-th',
            'theme:fp/view_list_active' => 'fas fa-list',
            'theme:fp/view_tree_active' => 'fas fa-folder',
            'local_mail:icon' => 'far fa-envelope',
            'local_mail:inbox' => 'fas fa-inbox',
            'local_mail:starred' => 'fas fa-star',
            'local_mail:sent' => 'far fa-paper-plane',
            'local_mail:trash' => 'far fa-trash-alt',
            'local_mail:course' => 'fas fa-graduation-cap',
            'local_mail:drafts' => 'far fa-copy',
            'local_boostnavigation:customnode' => 'far fa-file-alt',
            'local_boostnavigation:activities' => 'fas fa-poll-h',
            'local_boostnavigation:resources' => 'fas fa-poll-h',
            'core:i/navigationitem' => 'fas fa-folder'
        ];
    }

    /**
     * Overridable function to get a mapping of all icons.
     * Default is to do no mapping.
     *
     * @return array
     */
    public function get_icon_name_map() {
        if ($this->map === []) {
            $cache = \cache::make('core', 'fontawesomeiconmapping');

            $this->map = $cache->get('mapping');

            if (empty($this->map)) {
                $this->map = $this->get_core_icon_map();
                $callback = 'get_fontawesome_icon_map';

                if ($pluginsfunction = get_plugins_with_function($callback)) {
                    foreach ($pluginsfunction as $plugintype => $plugins) {
                        foreach ($plugins as $pluginfunction) {
                            $pluginmap = $pluginfunction();
                            $this->map += $pluginmap;
                        }
                    }
                }
                $cache->set('mapping', $this->map);
            }

        }
        return $this->map;
    }

    /**
     * Get the AMD icon system name.
     *
     * @return string
     */
    public function get_amd_name() {
        return 'core/icon_system_fontawesome';
    }

    /**
     * Renders the pix icon using the icon system
     *
     * @param renderer_base $output
     * @param pix_icon $icon
     * @return mixed
     */
    public function render_pix_icon(renderer_base $output, pix_icon $icon) {
        $subtype = 'pix_icon_fontawesome';
        $subpix = new $subtype($icon);

        $data = $subpix->export_for_template($output);

        if (!$subpix->is_mapped()) {
            $data['unmappedIcon'] = $icon->export_for_template($output);
        }
        return $output->render_from_template('core/pix_icon_fontawesome', $data);
    }

}
