<?php

require_once("base.php");

start_html();

start_head("عضویت");

end_head();

?>

<body dir="rtl">

	<br />
	<div class="row">

	<div class="col-sm-3">
	</div>

	<div class="col-sm-6">

	<form role="form" action="cnt-add-user.php" method="post">
		<div class="form-group">

			<label for="username">نام کاربری</label>
			<input type="text" name="user_name" class="form-control" placeholder="نام کاربری را وارد کنید" />
			
			<label for="pwd">رمز عبور</label>
			<input type="password" name="password" class="form-control" placeholder="رمز عبور خود را وارد کنید" />

			<br />
			<div class="col-sm-2">
			<button type="submit" class="form-control btn btn-primary"> برو </button>
			</div>

		</div>
	</form>

	</div>

	</div>

</body>

<?php

end_html();
?>
