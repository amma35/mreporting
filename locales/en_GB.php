<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Mreporting plugin for GLPI
 Copyright (C) 2003-2011 by the mreporting Development Team.

 https://forge.indepnet.net/projects/mreporting
 -------------------------------------------------------------------------

 LICENSE

 This file is part of mreporting.

 mreporting is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 mreporting is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with mreporting. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

$LANG['plugin_mreporting']["name"] = "More Reporting";

$LANG['plugin_mreporting']["right"]["manage"] = "Rights management";
$LANG['plugin_mreporting']["error"][0] = "No report is available !";
$LANG['plugin_mreporting']["error"][1] = "No data for this date range !";
$LANG['plugin_mreporting']["error"][2] = "Undefined";
$LANG['plugin_mreporting']["error"][3] = "No graphic selected";
$LANG['plugin_mreporting']["error"][4] = "Object already exists";

$LANG['plugin_mreporting']["export"][0] = "General Report - ODT";
$LANG['plugin_mreporting']["export"][1] = "Number";
$LANG['plugin_mreporting']["export"][2] = "data";
$LANG['plugin_mreporting']["export"][3] = "Without data";
$LANG['plugin_mreporting']["export"][4] = "Without data";

$LANG['plugin_mreporting']["config"][0] = "Configuration";
$LANG['plugin_mreporting']["config"][1] = "See area";
$LANG['plugin_mreporting']["config"][2] = "Curves lines (SVG)";
$LANG['plugin_mreporting']["config"][3] = "See values";
$LANG['plugin_mreporting']["config"][4] = "Reverse data array";
$LANG['plugin_mreporting']["config"][5] = "On mouse over";
$LANG['plugin_mreporting']["config"][6] = "Always";
$LANG['plugin_mreporting']["config"][7] = "Never";
$LANG['plugin_mreporting']["config"][8] = "Unity";
$LANG['plugin_mreporting']["config"][9] = "Default delay";
$LANG['plugin_mreporting']["config"][10] = "Initialize graphics configuration";
$LANG['plugin_mreporting']["config"][11] = "Additional condition for MySQL";
$LANG['plugin_mreporting']["config"][12] = "See graphic";
$LANG['plugin_mreporting']["config"][13] = "Class";
$LANG['plugin_mreporting']["config"][14] = "Send this report with the notification";

$LANG['plugin_mreporting']["dashboard"][1] = "Dashboard";
$LANG['plugin_mreporting']["dashboard"][2] = "Configure the dashboard";
$LANG['plugin_mreporting']["dashboard"][3] = "Dashboard is empty. Please add reports by clicking on the icon";
$LANG['plugin_mreporting']["dashboard"][4] = "Select a report to display";
$LANG['plugin_mreporting']["dashboard"][5] = "Report list";
$LANG['plugin_mreporting']["dashboard"][6] = "Select a report to add";
 
$LANG['plugin_mreporting']['parser'][1] = "Use this model";
$LANG['plugin_mreporting']['parser'][2] = "Please, select a model in your preferences";
$LANG['plugin_mreporting']['parser'][3] = "No model available";

$LANG['plugin_mreporting']['notification_name']    = 'Notification for "More Reporting"';
$LANG['plugin_mreporting']['notification_creator'] = 'Automaticaly generated by GLPI';
$LANG['plugin_mreporting']['notification_comment'] = '';
$LANG['plugin_mreporting']['notification_subject'] = ' GLPI statistics reports';
$LANG['plugin_mreporting']['notification_text'] = <<<EOT
Hello,

GLPI reports are available.
You will find attached in this email.

EOT;

$LANG['plugin_mreporting']['notification_html'] = <<<EOT
<p>Hello,</p>

<p>GLPI reports are available.<br />
   You will find attached in this email.</p>

EOT;
$LANG['plugin_mreporting']['notification_event']   = "More Reporting";
$LANG['plugin_mreporting']['notification_log']     = "Notification(s) sent !";

$LANG['plugin_mreporting']['download_reports']     = "Download of GLPI reports";
$LANG['plugin_mreporting']['download_in_progress'] = "The download of GLPI reports is in progress...";
$LANG['plugin_mreporting']['download_dont_start']  = "If it doesn't start automaticaly";
$LANG['plugin_mreporting']['download_clic_here']   = "click here";

$LANG['plugin_mreporting']['selector']["status"]   = "Status";
$LANG['plugin_mreporting']['selector']["period"][0] = "Period";
$LANG['plugin_mreporting']['selector']["period"][1] = "Day";
$LANG['plugin_mreporting']['selector']["period"][2] = "Week";
$LANG['plugin_mreporting']['selector']["period"][3] = "Month";
$LANG['plugin_mreporting']['selector']["period"][4] = "Year";

