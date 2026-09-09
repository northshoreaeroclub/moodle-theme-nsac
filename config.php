<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'nsac';
$THEME->parents = ['boost'];
$THEME->sheets = ['custom'];
$THEME->editor_sheets = [];

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->haseditswitch = true;
$THEME->hidefromselector = false;