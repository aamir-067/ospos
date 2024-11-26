<?php $this->load->view("partial/header"); ?>

<script type="text/javascript">
	dialog_support.init("a.modal-dlg");
</script>

<style>

#home_module_list {
	display: flex;
	width: 10;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.item-card {
	/* background-color: #333; */
	background: linear-gradient(135deg, #6c6c6c, #111);
	border-radius: 10px;
	width: 20%;
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	height: 130px;
	margin: 10px;
	padding: 10px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

@media screen and (max-width: 600px) {
	.item-card {
		width: 45%;
		aspect-ratio: 1 / 1;
		margin: 5px;
		padding: 5px;
}
#home_module_list {
	justify-content: center;
}
	
}
</style>
<h3 class="text-center" ><?php echo $this->lang->line('common_welcome_message'); ?></h3>

<div id="home_module_list">
	<?php
	foreach($allowed_modules as $module)
	{
	?>
		<div class="module_item item-card" title="<?php echo $this->lang->line('module_'.$module->module_id.'_desc');?>">
			<a href="<?php echo site_url("$module->module_id");?>"><img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a>
			<a href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
		</div>
	<?php
	}
	?>
</div>

<?php $this->load->view("partial/footer"); ?>
