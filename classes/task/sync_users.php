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
 * Sync users task
 *
 * @package   auth_wsr
 * @copyright FCEDU UNER based on Daniel Neis Araujo <danielneis@gmail.com> work
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace auth_wsr\task;

defined('MOODLE_INTERNAL') || die();

/**
 * Sync users task class
 *
 * @package   auth_wsr
 * @copyright UNER FCEDU baed on Daniel Neis Araujo <danielneis@gmail.com> work
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class sync_users extends \core\task\scheduled_task {

    /**
     * Name for this task.
     *
     * @return string
     */
    public function get_name() {
        return get_string('syncuserstask', 'auth_wsr');
    }

    /**
     * Run task for synchronising users.
     */
    public function execute() {
        if (!is_enabled_auth('wsr')) {
            mtrace('auth_wsr plugin is disabled, synchronisation stopped', 2);
            return;
        }

        $auth = get_auth_plugin('wsr');
        $config = get_config('auth_wsr');
        $trace = new \text_progress_trace();
        $update = !empty($config->updateusers);
        $auth->sync_users($trace, $update);
    }
}
