<?php
# ***** BEGIN LICENSE BLOCK *****
#
# Rouge Ciel 3
# Theme by Pierre Van Glabeke for Dotclear 2
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# ***** END LICENSE BLOCK *****

if (!defined('DC_CONTEXT_ADMIN')) { return; }

global $core;

//PARAMS

# Translations
l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/main');

# Default values
$default_width = '750';

# Settings
$my_width = $core->blog->settings->themes->RougeCiel3_width;

# Width type
$RougeCiel3_width_combo = array(
	__('750') => '750',
	__('1000') => '1000'
);

// POST ACTIONS

if (!empty($_POST))
{
	try
	{
		$core->blog->settings->addNamespace('themes');

		# Width type
		if (!empty($_POST['RougeCiel3_width']) && in_array($_POST['RougeCiel3_width'],$RougeCiel3_width_combo))
		{
			$my_width = $_POST['RougeCiel3_width'];

		} elseif (empty($_POST['RougeCiel3_width']))
		{
			$my_width = $default_width;

		}
		$core->blog->settings->themes->put('RougeCiel3_width',$my_width,'string','Width to display',true);

		// Blog refresh
		$core->blog->triggerBlog();

		// Template cache reset
		$core->emptyTemplatesCache();

		dcPage::success(__('Theme configuration has been successfully updated.'),true,true);
	}
	catch (Exception $e)
	{
		$core->error->add($e->getMessage());
	}
}

// DISPLAY

# Width type
echo
'<div class="fieldset"><h4>'.__('Customization').'</h4>'.
'<p class="field"><label>'.__('Display width:').'</label>'.
form::combo('RougeCiel3_width',$RougeCiel3_width_combo,$my_width).
'</p>'.
'</div>';