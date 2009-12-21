<?php echo form_open('admin/pages/layouts/delete');?>

<p class="float-right">[ <?php echo anchor('admin/pages/layouts/create', lang('page_layouts.create_label')) ?> ]</p>

<table border="0" class="table-list clear-both">		    
	<thead>
		<tr>
			<th><?php echo form_checkbox('action_to_all');?></th>
			<th><?php echo lang('nav_title_label');?></th>
			<th class="width-10"><span><?php echo lang('nav_actions_label');?></span></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="3">
				<div class="inner"></div>
			</td>
		</tr>
	</tfoot>
	<tbody>
		
		<?php if (!empty($page_layouts)): ?>
			<?php foreach ($page_layouts as $page_layout): ?>
				<tr>
					<td><input type="checkbox" name="action_to[]" value="<?php echo $page_layout->id;?>" /></td>
					<td><?php echo $page_layout->title;?></td>
					<td>
						<?php echo anchor('admin/pages/layouts/edit/' . $page_layout->id, lang('page_layouts.edit_label'));?> | 
						<?php echo anchor('admin/pages/layouts/delete/' . $page_layout->id, lang('page_layouts.delete_label'), array('class'=>'confirm'));?>
					</td>
				</tr>
				<?php endforeach; ?>
					
			<?php else:?>
				<tr>
					<td colspan="3"><?php echo lang('page_layouts.no_pages');?></td>
				</tr>
			<?php endif; ?>		
		</tbody>
	</table>
	
	<br/>
			
	<?php $this->load->view('admin/partials/table_buttons', array('buttons' => array('delete') )); ?>

<?php echo form_close(); ?>