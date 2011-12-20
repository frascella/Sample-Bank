/*
Author: donutz
Plugin: Confirm Publishing Actions
Version: 1.0
Update: 2011/10/27
Website: http://www.codezilla.nl/wordpress/plugin/confirm-publishing-actions/

Copyright 2011  Peter J. Herrel  (email : codezilla.nl@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

var $j = jQuery.noConflict();
$j(document).ready(function()
{
	$j('a.submitdelete').click(function()
	{
		return confirm(cpa_l10n_obj.confirm_delete);
	});
	$j('input#publish').click(function()
	{
		var $this = $j(this);
		var val = $this.val();
		if (val == 'Submit for Review')
		{
			return confirm(cpa_l10n_obj.confirm_submit);
		}
		if (val == 'Publish')
		{
			return confirm(cpa_l10n_obj.confirm_publish);
		}
		if (val == 'Update')
		{
			return confirm(cpa_l10n_obj.confirm_update);
		}
	});
	$j('#submitpost #ajax-loading, #submitpost .ajax-loading').hide();
});