<!-- This file is used to markup the public-facing widget. -->
<?php if (strlen (trim($monday_friday)) > 0) : ?> <!-- trim function take out all white space -->
	<p>
		<span class="day-of-week"> <strong>Monday - Friday: </strong></span>
		<?php  echo $monday_friday; ?>
	</p>
<?php endif; ?>	

<?php if (strlen (trim($saturday)) > 0) : ?> 
	<p>
		<span class="day-of-week"><strong> Saturday: </strong></span>
		<?php  echo $saturday; ?>
	</p>
<?php endif; ?>	

<?php if (strlen (trim($sunday)) > 0) : ?> 
	<p>
		<span class="day-of-week"><strong> Sunday: </strong></span>
		<?php  echo $sunday; ?>
	</p>
<?php endif; ?>	

