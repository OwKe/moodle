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
 * A two column layout for the space theme.
 *
 * @package   theme_space
 * @copyright 2018 - 2019 Marcin Czaja
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/behat/lib.php');

$extraclasses = [];

$teammember = theme_space_get_setting('teammemberno');
if ($teammember == 1) {
    $teammemberperrow = 'col-md-3 col-lg-2';
}
if ($teammember == 2) {
    $teammemberperrow = 'col-md-3 col-lg-3';
}
if ($teammember == 3) {
    $teammemberperrow = 'col-md-4 col-lg-4';
}

$logos = theme_space_get_setting('logosperrow');
if ($logos == 1) {
    $logosno = 'col-md-4 col-lg-2';
}
if ($logos == 2) {
    $logosno = 'col-md-4 col-lg-3';
}
if ($logos == 3) {
    $logosno = 'col-md-4 col-lg-4';
}

//Simple content builder
$pluginsettings = get_config("theme_space");
$slotblock1 = theme_space_get_setting('slotblock1');
$slotblock2 = theme_space_get_setting('slotblock2');
$slotblock3 = theme_space_get_setting('slotblock3');
$slotblock4 = theme_space_get_setting('slotblock4');
$slotblock5 = theme_space_get_setting('slotblock5');
$slotblock6 = theme_space_get_setting('slotblock6');
$slotblock7 = theme_space_get_setting('slotblock7');
$slotblock8 = theme_space_get_setting('slotblock8');
$slotblock9 = theme_space_get_setting('slotblock9');
$slotblock10 = theme_space_get_setting('slotblock10');
$slotblock11 = theme_space_get_setting('slotblock11');
$slotblock12 = theme_space_get_setting('slotblock12');

$showfpblock1hr = theme_space_get_setting('showfpblock1hr');
$showfpblock2hr = theme_space_get_setting('showfpblock2hr');
$showfpblock4hr = theme_space_get_setting('showfpblock4hr');
$showfpblock6hr = theme_space_get_setting('showfpblock6hr');
$showfpblock7hr = theme_space_get_setting('showfpblock7hr');
$showfpblock8hr = theme_space_get_setting('showfpblock8hr');
$showfpblock10hr = theme_space_get_setting('showfpblock10hr');
$showfpblock11hr = theme_space_get_setting('showfpblock11hr');
$showfpblock12hr = theme_space_get_setting('showfpblock12hr');
$showfpblockteamhr = theme_space_get_setting('showfpblockteamhr');

$heroshadowtype = $pluginsettings->heroshadowtype;
if ($heroshadowtype == 1) {
    $heroshadowstyle = 'c-hero-shadow-gradient';   
}
if ($heroshadowtype == 2) {
    $heroshadowstyle = 'c-hero-shadow-img';
}

    $slotblock1 = $pluginsettings->slotblock1;
    $slotblock2 = $pluginsettings->slotblock2;
    $slotblock3 = $pluginsettings->slotblock3;
    $slotblock4 = $pluginsettings->slotblock4;
    $slotblock5 = $pluginsettings->slotblock5;
    $slotblock6 = $pluginsettings->slotblock6;
    $slotblock7 = $pluginsettings->slotblock7;
    $slotblock8 = $pluginsettings->slotblock8;
    $slotblock9 = $pluginsettings->slotblock9;
    $slotblock10 = $pluginsettings->slotblock10;
    $slotblock11 = $pluginsettings->slotblock11;
    $slotblock12 = $pluginsettings->slotblock12;

    //Slot #1
    if( $slotblock1 == "1") { $slot1block1 = true; } else { $slot1block1 = false; }
    if( $slotblock2 == "1") { $slot1block2 = true; } else { $slot1block2 = false; }
    if( $slotblock3 == "1") { $slot1block3 = true; } else { $slot1block3 = false; }
    if( $slotblock4 == "1") { $slot1block4 = true; } else { $slot1block4 = false; }
    if( $slotblock5 == "1") { $slot1block5 = true; } else { $slot1block5 = false; }
    if( $slotblock6 == "1") { $slot1block6 = true; } else { $slot1block6 = false; }
    if( $slotblock7 == "1") { $slot1block7 = true; } else { $slot1block7 = false; }
    if( $slotblock8 == "1") { $slot1block8 = true; } else { $slot1block8 = false; }
    if( $slotblock9 == "1") { $slot1block9 = true; } else { $slot1block9 = false; }
    if( $slotblock10 == "1") { $slot1block10 = true; } else { $slot1block10 = false; }
    if( $slotblock11 == "1") { $slot1block11 = true; } else { $slot1block11 = false; }
    if( $slotblock12 == "1") { $slot1block12 = true; } else { $slot1block12 = false; }

    //Slot #2
    if( $slotblock1 == "2") { $slot2block1 = true; } else { $slot2block1 = false; }    
    if( $slotblock2 == "2") { $slot2block2 = true; } else { $slot2block2 = false; }
    if( $slotblock3 == "2") { $slot2block3 = true; } else { $slot2block3 = false; }
    if( $slotblock4 == "2") { $slot2block4 = true; } else { $slot2block4 = false; }
    if( $slotblock5 == "2") { $slot2block5 = true; } else { $slot2block5 = false; }
    if( $slotblock6 == "2") { $slot2block6 = true; } else { $slot2block6 = false; }
    if( $slotblock7 == "2") { $slot2block7 = true; } else { $slot2block7 = false; }
    if( $slotblock8 == "2") { $slot2block8 = true; } else { $slot2block8 = false; }
    if( $slotblock9 == "2") { $slot2block9 = true; } else { $slot2block9 = false; }   
    if( $slotblock10 == "2") { $slot2block10 = true; } else { $slot2block10 = false; }  
    if( $slotblock11 == "2") { $slot2block11 = true; } else { $slot2block11 = false; } 
    if( $slotblock12 == "2") { $slot2block12 = true; } else { $slot2block12 = false; } 

    //Slot #3
    if( $slotblock1 == "3") { $slot3block1 = true; } else { $slot3block1 = false; }    
    if( $slotblock2 == "3") { $slot3block2 = true; } else { $slot3block2 = false; }
    if( $slotblock3 == "3") { $slot3block3 = true; } else { $slot3block3 = false; }
    if( $slotblock4 == "3") { $slot3block4 = true; } else { $slot3block4 = false; }
    if( $slotblock5 == "3") { $slot3block5 = true; } else { $slot3block5 = false; }
    if( $slotblock6 == "3") { $slot3block6 = true; } else { $slot3block6 = false; }
    if( $slotblock7 == "3") { $slot3block7 = true; } else { $slot3block7 = false; }
    if( $slotblock8 == "3") { $slot3block8 = true; } else { $slot3block8 = false; }
    if( $slotblock9 == "3") { $slot3block9 = true; } else { $slot3block9 = false; }   
    if( $slotblock10 == "3") { $slot3block10 = true; } else { $slot3block10 = false; } 
    if( $slotblock11 == "3") { $slot3block11 = true; } else { $slot3block11 = false; } 
    if( $slotblock12 == "3") { $slot3block12 = true; } else { $slot3block12 = false; } 

    //Slot #4
    if( $slotblock1 == "4") { $slot4block1 = true; } else { $slot4block1 = false; }    
    if( $slotblock2 == "4") { $slot4block2 = true; } else { $slot4block2 = false; }
    if( $slotblock3 == "4") { $slot4block3 = true; } else { $slot4block3 = false; }
    if( $slotblock4 == "4") { $slot4block4 = true; } else { $slot4block4 = false; }
    if( $slotblock5 == "4") { $slot4block5 = true; } else { $slot4block5 = false; }
    if( $slotblock6 == "4") { $slot4block6 = true; } else { $slot4block6 = false; }
    if( $slotblock7 == "4") { $slot4block7 = true; } else { $slot4block7 = false; }
    if( $slotblock8 == "4") { $slot4block8 = true; } else { $slot4block8 = false; }
    if( $slotblock9 == "4") { $slot4block9 = true; } else { $slot4block9 = false; }    
    if( $slotblock10 == "4") { $slot4block10 = true; } else { $slot4block10 = false; } 
    if( $slotblock11 == "4") { $slot4block11 = true; } else { $slot4block11 = false; } 
    if( $slotblock12 == "4") { $slot4block12 = true; } else { $slot4block12 = false; } 

    //Slot #5
    if( $slotblock1 == "5") { $slot5block1 = true; } else { $slot5block1 = false; }    
    if( $slotblock2 == "5") { $slot5block2 = true; } else { $slot5block2 = false; }
    if( $slotblock3 == "5") { $slot5block3 = true; } else { $slot5block3 = false; }
    if( $slotblock4 == "5") { $slot5block4 = true; } else { $slot5block4 = false; }
    if( $slotblock5 == "5") { $slot5block5 = true; } else { $slot5block5 = false; }
    if( $slotblock6 == "5") { $slot5block6 = true; } else { $slot5block6 = false; }
    if( $slotblock7 == "5") { $slot5block7 = true; } else { $slot5block7 = false; }
    if( $slotblock8 == "5") { $slot5block8 = true; } else { $slot5block8 = false; }
    if( $slotblock9 == "5") { $slot5block9 = true; } else { $slot5block9 = false; } 
    if( $slotblock10 == "5") { $slot5block10 = true; } else { $slot5block10 = false; }   
    if( $slotblock11 == "5") { $slot5block11 = true; } else { $slot5block11 = false; } 
    if( $slotblock12 == "5") { $slot5block12 = true; } else { $slot5block12 = false; } 

    //Slot #6
    if( $slotblock1 == "6") { $slot6block1 = true; } else { $slot6block1 = false; }    
    if( $slotblock2 == "6") { $slot6block2 = true; } else { $slot6block2 = false; }
    if( $slotblock3 == "6") { $slot6block3 = true; } else { $slot6block3 = false; }
    if( $slotblock4 == "6") { $slot6block4 = true; } else { $slot6block4 = false; }
    if( $slotblock5 == "6") { $slot6block5 = true; } else { $slot6block5 = false; }
    if( $slotblock6 == "6") { $slot6block6 = true; } else { $slot6block6 = false; }
    if( $slotblock7 == "6") { $slot6block7 = true; } else { $slot6block7 = false; }
    if( $slotblock8 == "6") { $slot6block8 = true; } else { $slot6block8 = false; }
    if( $slotblock9 == "6") { $slot6block9 = true; } else { $slot6block9 = false; }    
    if( $slotblock10 == "6") { $slot6block10 = true; } else { $slot6block10 = false; }  
    if( $slotblock11 == "6") { $slot6block11 = true; } else { $slot6block11 = false; }
    if( $slotblock12 == "6") { $slot6block12 = true; } else { $slot6block12 = false; }

    //Slot #7
    if( $slotblock1 == "7") { $slot7block1 = true; } else { $slot7block1 = false; }    
    if( $slotblock2 == "7") { $slot7block2 = true; } else { $slot7block2 = false; }
    if( $slotblock3 == "7") { $slot7block3 = true; } else { $slot7block3 = false; }
    if( $slotblock4 == "7") { $slot7block4 = true; } else { $slot7block4 = false; }
    if( $slotblock5 == "7") { $slot7block5 = true; } else { $slot7block5 = false; }
    if( $slotblock6 == "7") { $slot7block6 = true; } else { $slot7block6 = false; }
    if( $slotblock7 == "7") { $slot7block7 = true; } else { $slot7block7 = false; }
    if( $slotblock8 == "7") { $slot7block8 = true; } else { $slot7block8 = false; }
    if( $slotblock9 == "7") { $slot7block9 = true; } else { $slot7block9 = false; }  
    if( $slotblock10 == "7") { $slot7block10 = true; } else { $slot7block10 = false; } 
    if( $slotblock11 == "7") { $slot7block11 = true; } else { $slot7block11 = false; } 
    if( $slotblock12 == "7") { $slot7block12 = true; } else { $slot7block12 = false; } 

    //Slot #8
    if( $slotblock1 == "8") { $slot8block1 = true; } else { $slot8block1 = false; }    
    if( $slotblock2 == "8") { $slot8block2 = true; } else { $slot8block2 = false; }
    if( $slotblock3 == "8") { $slot8block3 = true; } else { $slot8block3 = false; }
    if( $slotblock4 == "8") { $slot8block4 = true; } else { $slot8block4 = false; }
    if( $slotblock5 == "8") { $slot8block5 = true; } else { $slot8block5 = false; }
    if( $slotblock6 == "8") { $slot8block6 = true; } else { $slot8block6 = false; }
    if( $slotblock7 == "8") { $slot8block7 = true; } else { $slot8block7 = false; }
    if( $slotblock8 == "8") { $slot8block8 = true; } else { $slot8block8 = false; }
    if( $slotblock9 == "8") { $slot8block9 = true; } else { $slot8block9 = false; }
    if( $slotblock10 == "8") { $slot8block10 = true; } else { $slot8block10 = false; }
    if( $slotblock11 == "8") { $slot8block11 = true; } else { $slot8block11 = false; }
    if( $slotblock12 == "8") { $slot8block12 = true; } else { $slot8block12 = false; }

    //Slot #9
    if( $slotblock1 == "9") { $slot9block1 = true; } else { $slot9block1 = false; }    
    if( $slotblock2 == "9") { $slot9block2 = true; } else { $slot9block2 = false; }
    if( $slotblock3 == "9") { $slot9block3 = true; } else { $slot9block3 = false; }
    if( $slotblock4 == "9") { $slot9block4 = true; } else { $slot9block4 = false; }
    if( $slotblock5 == "9") { $slot9block5 = true; } else { $slot9block5 = false; }
    if( $slotblock6 == "9") { $slot9block6 = true; } else { $slot9block6 = false; }
    if( $slotblock7 == "9") { $slot9block7 = true; } else { $slot9block7 = false; }
    if( $slotblock8 == "9") { $slot9block8 = true; } else { $slot9block8 = false; }
    if( $slotblock9 == "9") { $slot9block9 = true; } else { $slot9block9 = false; }
    if( $slotblock10 == "9") { $slot9block10 = true; } else { $slot9block10 = false; }
    if( $slotblock11 == "9") { $slot9block11 = true; } else { $slot9block11 = false; }
    if( $slotblock12 == "9") { $slot9block12 = true; } else { $slot9block12 = false; }

    //Slot #10
    if( $slotblock1 == "10") { $slot10block1 = true; } else { $slot10block1 = false; }    
    if( $slotblock2 == "10") { $slot10block2 = true; } else { $slot10block2 = false; }
    if( $slotblock3 == "10") { $slot10block3 = true; } else { $slot10block3 = false; }
    if( $slotblock4 == "10") { $slot10block4 = true; } else { $slot10block4 = false; }
    if( $slotblock5 == "10") { $slot10block5 = true; } else { $slot10block5 = false; }
    if( $slotblock6 == "10") { $slot10block6 = true; } else { $slot10block6 = false; }
    if( $slotblock7 == "10") { $slot10block7 = true; } else { $slot10block7 = false; }
    if( $slotblock8 == "10") { $slot10block8 = true; } else { $slot10block8 = false; }
    if( $slotblock9 == "10") { $slot10block9 = true; } else { $slot10block9 = false; }
    if( $slotblock10 == "10") { $slot10block10 = true; } else { $slot10block10 = false; }
    if( $slotblock11 == "10") { $slot10block11 = true; } else { $slot10block11 = false; }
    if( $slotblock12 == "10") { $slot10block12 = true; } else { $slot10block12 = false; }

    //Slot #11
    if( $slotblock1 == "11") { $slot11block1 = true; } else { $slot11block1 = false; }    
    if( $slotblock2 == "11") { $slot11block2 = true; } else { $slot11block2 = false; }
    if( $slotblock3 == "11") { $slot11block3 = true; } else { $slot11block3 = false; }
    if( $slotblock4 == "11") { $slot11block4 = true; } else { $slot11block4 = false; }
    if( $slotblock5 == "11") { $slot11block5 = true; } else { $slot11block5 = false; }
    if( $slotblock6 == "11") { $slot11block6 = true; } else { $slot11block6 = false; }
    if( $slotblock7 == "11") { $slot11block7 = true; } else { $slot11block7 = false; }
    if( $slotblock8 == "11") { $slot11block8 = true; } else { $slot11block8 = false; }
    if( $slotblock9 == "11") { $slot11block9 = true; } else { $slot11block9 = false; }
    if( $slotblock10 == "11") { $slot11block10 = true; } else { $slot11block10 = false; }
    if( $slotblock11 == "11") { $slot11block11 = true; } else { $slot11block11 = false; }
    if( $slotblock12 == "11") { $slot11block12 = true; } else { $slot11block12 = false; }

    //Slot #12
    if( $slotblock1 == "12") { $slot12block1 = true; } else { $slot12block1 = false; }    
    if( $slotblock2 == "12") { $slot12block2 = true; } else { $slot12block2 = false; }
    if( $slotblock3 == "12") { $slot12block3 = true; } else { $slot12block3 = false; }
    if( $slotblock4 == "12") { $slot12block4 = true; } else { $slot12block4 = false; }
    if( $slotblock5 == "12") { $slot12block5 = true; } else { $slot12block5 = false; }
    if( $slotblock6 == "12") { $slot12block6 = true; } else { $slot12block6 = false; }
    if( $slotblock7 == "12") { $slot12block7 = true; } else { $slot12block7 = false; }
    if( $slotblock8 == "12") { $slot12block8 = true; } else { $slot12block8 = false; }
    if( $slotblock9 == "12") { $slot12block9 = true; } else { $slot12block9 = false; }
    if( $slotblock10 == "12") { $slot12block10 = true; } else { $slot12block10 = false; }
    if( $slotblock11 == "12") { $slot12block11 = true; } else { $slot12block11 = false; }
    if( $slotblock12 == "12") { $slot12block12 = true; } else { $slot12block12 = false; }
//end

//Top bar style
$topbarstyle = theme_space_get_setting('topbarstyle');
$pluginsettings = get_config("theme_space");
if( $topbarstyle == "topbarstyle-1") { $topbarstyle1 = $topbarstyle; } else { $topbarstyle1 = false; }
if( $topbarstyle == "topbarstyle-2") { $topbarstyle2 = $topbarstyle; } else { $topbarstyle2 = false; }
if( $topbarstyle == "topbarstyle-3") { $topbarstyle3 = $topbarstyle; } else { $topbarstyle3 = false; }
if( $topbarstyle == "topbarstyle-4") { $topbarstyle4 = $topbarstyle; } else { $topbarstyle4 = false; }
if( $topbarstyle == "topbarstyle-5") { $topbarstyle5 = $topbarstyle; } else { $topbarstyle5 = false; }
if( $topbarstyle == "topbarstyle-6") { $topbarstyle6 = $topbarstyle; } else { $topbarstyle6 = false; }
//end

$siteurl = $CFG->wwwroot;
$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$blockshtml = $OUTPUT->blocks('side-pre', 'sidebar');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;
$regionmainsettingsmenu = $OUTPUT->region_main_settings_menu();


$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'teammemberperrow' => $teammemberperrow,
    'logosno' => $logosno,
    'topbarstyle1' => $topbarstyle1,
    'topbarstyle2' => $topbarstyle2,
    'topbarstyle3' => $topbarstyle3,
    'topbarstyle4' => $topbarstyle4,  
    'topbarstyle5' => $topbarstyle5, 
    'topbarstyle6' => $topbarstyle6,     
    'topbarstyle1' => $topbarstyle1,
    'topbarstyle2' => $topbarstyle2,
    'topbarstyle3' => $topbarstyle3,
    'topbarstyle4' => $topbarstyle4,  
    'topbarstyle5' => $topbarstyle5, 
    'topbarstyle6' => $topbarstyle6,     
    'slot1block1' => $slot1block1,
    'slot1block2' => $slot1block2,
    'slot1block3' => $slot1block3,
    'slot1block4' => $slot1block4,
    'slot1block5' => $slot1block5,
    'slot1block6' => $slot1block6,
    'slot1block7' => $slot1block7,
    'slot1block8' => $slot1block8,
    'slot1block9' => $slot1block9,
    'slot1block10' => $slot1block10,
    'slot1block11' => $slot1block11,
    'slot1block12' => $slot1block12,
    'slot2block1' => $slot2block1,
    'slot2block2' => $slot2block2,
    'slot2block3' => $slot2block3,
    'slot2block4' => $slot2block4,
    'slot2block5' => $slot2block5,
    'slot2block6' => $slot2block6,
    'slot2block7' => $slot2block7,
    'slot2block8' => $slot2block8,
    'slot2block9' => $slot2block9,
    'slot2block10' => $slot2block10,
    'slot2block11' => $slot2block11,
    'slot2block12' => $slot2block12,
    'slot3block1' => $slot3block1,
    'slot3block2' => $slot3block2,
    'slot3block3' => $slot3block3,
    'slot3block4' => $slot3block4,
    'slot3block5' => $slot3block5,
    'slot3block6' => $slot3block6,
    'slot3block7' => $slot3block7,
    'slot3block8' => $slot3block8,
    'slot3block9' => $slot3block9,
    'slot3block10' => $slot3block10,
    'slot3block11' => $slot3block11,
    'slot3block12' => $slot3block12,
    'slot4block1' => $slot4block1,
    'slot4block2' => $slot4block2,
    'slot4block3' => $slot4block3,
    'slot4block4' => $slot4block4,
    'slot4block5' => $slot4block5,
    'slot4block6' => $slot4block6,
    'slot4block7' => $slot4block7,
    'slot4block8' => $slot4block8,
    'slot4block9' => $slot4block9,
    'slot4block10' => $slot4block10,
    'slot4block11' => $slot4block11,
    'slot4block12' => $slot4block12,
    'slot5block1' => $slot5block1,
    'slot5block2' => $slot5block2,
    'slot5block3' => $slot5block3,
    'slot5block4' => $slot5block4,
    'slot5block5' => $slot5block5,
    'slot5block6' => $slot5block6,
    'slot5block7' => $slot5block7,
    'slot5block8' => $slot5block8,
    'slot5block9' => $slot5block9,
    'slot5block10' => $slot5block10,
    'slot5block11' => $slot5block11,
    'slot5block12' => $slot5block12,
    'slot6block1' => $slot6block1,
    'slot6block2' => $slot6block2,
    'slot6block3' => $slot6block3,
    'slot6block4' => $slot6block4,
    'slot6block5' => $slot6block5,
    'slot6block6' => $slot6block6,
    'slot6block7' => $slot6block7,
    'slot6block8' => $slot6block8,
    'slot6block9' => $slot6block9,
    'slot6block10' => $slot6block10,
    'slot6block11' => $slot6block11,
    'slot6block12' => $slot6block12,
    'slot7block1' => $slot7block1,
    'slot7block2' => $slot7block2,
    'slot7block3' => $slot7block3,
    'slot7block4' => $slot7block4,
    'slot7block5' => $slot7block5,
    'slot7block6' => $slot7block6,
    'slot7block7' => $slot7block7,
    'slot7block8' => $slot7block8,
    'slot7block9' => $slot7block9,
    'slot7block10' => $slot7block10,
    'slot7block11' => $slot7block11,
    'slot7block12' => $slot7block12,
    'slot8block1' => $slot8block1,
    'slot8block2' => $slot8block2,
    'slot8block3' => $slot8block3,
    'slot8block4' => $slot8block4,
    'slot8block5' => $slot8block5,
    'slot8block6' => $slot8block6,
    'slot8block7' => $slot8block7,
    'slot8block8' => $slot8block8,
    'slot8block9' => $slot8block9,
    'slot8block10' => $slot8block10,
    'slot8block11' => $slot8block11,
    'slot8block12' => $slot8block12,
    'slot9block1' => $slot9block1,
    'slot9block2' => $slot9block2,
    'slot9block3' => $slot9block3,
    'slot9block4' => $slot9block4,
    'slot9block5' => $slot9block5,
    'slot9block6' => $slot9block6,
    'slot9block7' => $slot9block7,
    'slot9block8' => $slot9block8,
    'slot9block9' => $slot9block9, 
    'slot9block10' => $slot9block10, 
    'slot9block11' => $slot9block11,
    'slot9block12' => $slot9block12,
    'slot10block1' => $slot10block1,
    'slot10block2' => $slot10block2,
    'slot10block3' => $slot10block3,
    'slot10block4' => $slot10block4,
    'slot10block5' => $slot10block5,
    'slot10block6' => $slot10block6,
    'slot10block7' => $slot10block7,
    'slot10block8' => $slot10block8,
    'slot10block9' => $slot10block9, 
    'slot10block10' => $slot10block10,
    'slot10block11' => $slot10block11,
    'slot10block12' => $slot10block12,
    'slot11block1' => $slot11block1,
    'slot11block2' => $slot11block2,
    'slot11block3' => $slot11block3,
    'slot11block4' => $slot11block4,
    'slot11block5' => $slot11block5,
    'slot11block6' => $slot11block6,
    'slot11block7' => $slot11block7,
    'slot11block8' => $slot11block8,
    'slot11block9' => $slot11block9, 
    'slot11block10' => $slot11block10,
    'slot11block11' => $slot11block11,
    'slot11block12' => $slot11block12,
    'slot12block1' => $slot12block1,
    'slot12block2' => $slot12block2,
    'slot12block3' => $slot12block3,
    'slot12block4' => $slot12block4,
    'slot12block5' => $slot12block5,
    'slot12block6' => $slot12block6,
    'slot12block7' => $slot12block7,
    'slot12block8' => $slot12block8,
    'slot12block9' => $slot12block9, 
    'slot12block10' => $slot12block10,
    'slot12block11' => $slot12block11,
    'slot12block12' => $slot12block12,
    'showfpblock1hr' => $showfpblock1hr, 
    'showfpblock2hr' => $showfpblock2hr, 
    'showfpblock4hr' => $showfpblock4hr, 
    'showfpblock6hr' => $showfpblock6hr, 
    'showfpblock7hr' => $showfpblock7hr, 
    'showfpblock8hr' => $showfpblock8hr, 
    'showfpblock11hr' => $showfpblock11hr, 
    'showfpblock12hr' => $showfpblock12hr,  
    'showfpblock10hr' => $showfpblock10hr, 
    'showfpblockteamhr' => $showfpblockteamhr, 
    'heroshadowstyle' => $heroshadowstyle, 
    'siteurl' => $siteurl
];

$themesettings = new \theme_space\util\theme_settings();

$templatecontext = array_merge($templatecontext, $themesettings->footer_items());
$templatecontext = array_merge($templatecontext, $themesettings->hero());
$templatecontext = array_merge($templatecontext, $themesettings->blockcategories());
$templatecontext = array_merge($templatecontext, $themesettings->block1());
$templatecontext = array_merge($templatecontext, $themesettings->block2());
$templatecontext = array_merge($templatecontext, $themesettings->block3());
$templatecontext = array_merge($templatecontext, $themesettings->block4());
$templatecontext = array_merge($templatecontext, $themesettings->block10());
$templatecontext = array_merge($templatecontext, $themesettings->block11());
$templatecontext = array_merge($templatecontext, $themesettings->block12());
$templatecontext = array_merge($templatecontext, $themesettings->team());
$templatecontext = array_merge($templatecontext, $themesettings->logos());
$templatecontext = array_merge($templatecontext, $themesettings->customnav());
$templatecontext = array_merge($templatecontext, $themesettings->sidebar_custom_block());
$templatecontext = array_merge($templatecontext, $themesettings->top_bar_custom_block());
$templatecontext = array_merge($templatecontext, $themesettings->siemaSlider());
$templatecontext = array_merge($templatecontext, $themesettings->head_elements());
$templatecontext = array_merge($templatecontext, $themesettings->fonts());

echo $OUTPUT->render_from_template('theme_space/frontpage', $templatecontext);
