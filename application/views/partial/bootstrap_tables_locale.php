(function ($) {
	'use strict';

	$.fn.bootstrapTable.locales['<?php echo current_language_code(); ?>'] = {
		formatLoadingMessage: function () {
			<!-- return "<?php echo $this->lang->line('tables_loading');?>"; -->
			return "<?php echo "<p style='font-weight:bold; font-size:16px'>Loading please wait..</p>"?>";
		},
		formatRecordsPerPage: function (pageNumber) {
			<!-- return "<?php echo $this->lang->line('tables_rows_per_page'); ?>".replace('{0}', pageNumber); -->
			return "<?php echo "<p style='display:inline; font-size:16px; color:red;'>{0} rows</p>" ?>".replace('{0}', pageNumber);
		},
		formatShowingRows: function (pageFrom, pageTo, totalRows) {
			return "<?php echo "<p style='display:inline;  color:#000;'>{0} to {1} rows of {2} rows</p>" ?>".replace('{0}', pageFrom).replace('{1}', pageTo).replace('{2}', totalRows);
		},
		formatSearch: function () {
			return "<?php echo $this->lang->line('common_search'); ?>";
		},
		formatNoMatches: function () {
			return "<?php echo $this->lang->line(preg_match('(customers|suppliers|employees)', $controller_name) ?
				'common_no_persons_to_display' : $controller_name . '_no_' . $controller_name .'_to_display'); ?>";
		},
		formatPaginationSwitch: function () {
			return "<?php echo $this->lang->line('tables_hide_show_pagination'); ?>";
		},
		formatRefresh: function () {
			return "<?php echo $this->lang->line('tables_refresh'); ?>";
		},
		formatToggle: function () {
			return "<?php echo $this->lang->line('tables_toggle'); ?>";
		},
		formatColumns: function () {
			return "<?php echo $this->lang->line('tables_columns'); ?>";
		},
		formatAllRows: function () {
			return "<?php echo $this->lang->line('tables_all'); ?>";
		},
		formatConfirmAction: function(action) {
			if (action == "delete")
			{
				return "<?php echo $this->lang->line((isset($editable) ? $editable : $controller_name). "_confirm_delete")?>";
			}
			else
			{
				return "<?php echo $this->lang->line((isset($editable) ? $editable : $controller_name). "_confirm_restore")?>";
			}
        }
	};

	$.extend($.fn.bootstrapTable.defaults, $.fn.bootstrapTable.locales["<?php echo current_language_code();?>"]);

})(jQuery);