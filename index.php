<?php

require_once("base.php");

start_html();

start_head("صفحه اصلی");

end_head();

start_body(RTL);

?>

<div class="row">

	<div class="col-sm-4">
	</div>

	<div class="col-sm-7">
	
		<br />

		<div class="container">
			<p> این یک برنامه برای نمایش برنامه هفتگی است؛ 
			به منظور این که کار برنامه‌ریز کمی 
			آسان‌تر شود. :) </p>

		</div>

	</div>

</div>

<?php

	if(isset($_SESSION["msg"]))
	{
		echo $_SESSION["msg"];
		unset($_SESSION["msg"]);
	}

end_body();

end_html();

?>
