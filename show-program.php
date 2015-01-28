<?php

require_once("base.php");

start_html();

start_head("برنامه");

end_head();

start_body(RTL);

?>

<br />
<div class="row bg-info">

	<div class="text-center">
	<b> برنامه هفتگی </b>
	</div>

</div>

<div class="row bg-success">

	<div class="col-sm-1 text-center">
		<p> شنبه </p>

		<div class="btn btn-warning" style="height:80px; width:100%" onclick="">
			ورزش - ۸ تا ۱۰.۵
		</div>

	</div>

	<div class="col-sm-1 text-center">
		<p> یک‌شنبه </p>
	</div>

	<div class="col-sm-1 text-center">
		<p> دوشنبه </p>
	</div>

	<div class="col-sm-1 text-center">
		<p> سه‌شنبه </p>
	</div>

	<div class="col-sm-1 text-center">
		<p> چهارشنبه </p>
	</div>

	<div class="col-sm-1 text-center">
		<p> پنج‌شنبه </p>
	</div>

	<div class="col-sm-1 text-center">
		<p> جمعه </p>
	</div>

</div>

<?php

end_body();

end_html();

?>
