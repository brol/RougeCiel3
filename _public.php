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
if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/public');

# appel css largeurs (1000.css ou 750.css)
$core->addBehavior('publicHeadContent','RougeCiel3width_publicHeadContent');

function RougeCiel3width_publicHeadContent($core)
{
	$style = $core->blog->settings->themes->RougeCiel3_width;
	if (!preg_match('/^750|1000$/',$style)) {
		$style = '750';
	}

	$url = $core->blog->settings->system->themes_url.'/'.$core->blog->settings->system->theme;
	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/css/".$style.".css\" />\n";
}