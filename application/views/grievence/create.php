<div class="container">

	<h2 style="text-align:center;">Grievence Form</h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('grievence/create',"class='form-horizontal'"); ?>
		
	  <div class="form-group">
	    <label for="org_name" class="col-sm-2 control-label">Org. Name</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="org_name" name="org_name" placeholder="organisation name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="place" class="col-sm-2 control-label">Place</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="place" name="place" placeholder="Place">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="issue" class="col-sm-2 control-label">Issue</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" id="issue" name="issue" placeholder="issues" rows="3"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="contact" class="col-sm-2 control-label">Contact</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit Grievence</button>
	    </div>
	  </div>

	</form>

</div>