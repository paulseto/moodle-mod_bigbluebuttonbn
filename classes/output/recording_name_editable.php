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
 * Renderer for recording name in place editable.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Laurent David  (laurent.david [at] call-learning [dt] fr)
 */

namespace mod_bigbluebuttonbn\output;

use mod_bigbluebuttonbn\instance;
use mod_bigbluebuttonbn\local\bigbluebutton\recordings\recording_data;

/**
 * Renderer for recording name in place editable.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Laurent David  (laurent.david [at] call-learning [dt] fr)
 */
class recording_name_editable extends recording_editable {
    /**
     * Specific constructor with the right label/hint for this editable
     *
     * @param stdClass $rec
     * @param instance $instance
     * @throws \coding_exception
     */
    public function __construct($rec, instance $instance) {
        parent::__construct($rec, $instance,
            get_string('view_recording_name_editlabel', 'mod_bigbluebuttonbn'),
            get_string('view_recording_name_edithint', 'mod_bigbluebuttonbn'));
    }
    /**
     * Get the value to display
     *
     * @param array $rec
     * @return string
     */
    public function get_recording_value($rec) {
        return recording_data::row_meta_activity($rec->recording, $this->instance);
    }

    /**
     *  Get the type of editable
     */
    protected static function get_type() {
        return 'meta_bbb-recording-name';
    }
}
