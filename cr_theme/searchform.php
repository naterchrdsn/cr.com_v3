<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" role="search">
	<div class="form-group searchFormContainer">
	  <input type="search" class="form-control input-sm" id="s" name="s" placeholder="Search...">
	  <input type="hidden" value="post" name="post_type" id="post_type" />
	</div>
	<button type="submit" class="btn btn-sm btn-default">Submit</button>
</form>