<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8 well-large">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
				<h5>Add Your Category</h5>
			</div>
			<div class="widget-content nopadding">
				<form action="<?php echo base_url().'Admin/category_create'; ?>" method="POST" class="form-horizontal">
					<?php 
					if(!empty($this->session->userdata('create_category_notification'))): ?>
					<div class="control-group alert alert-danger">


						<?php		echo $this->session->userdata('create_category_notification');
						$this->session->unset_userdata('create_category_notification'); ?>

					</div>
				<?php	endif; ?>

				<div class="control-group">
					<label class="control-label">Category</label>
					<div class="controls">
						<input name="name" type="text" class="span8" placeholder="Category name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Status</label>
					<div class="controls">
						<select name="status">
							<option value="1">Published</option>
							<option value="0">Unpublished</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<input type="date" name="created">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success">Save</button>
				</div>
			</form>
		</div>
	</div>


</div>
<div class="span2">

</div>
</div> 
