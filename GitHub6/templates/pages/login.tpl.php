<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
		}

		/* Small devices (portrait tablets and large phones, 600px and up) */
		@media only screen and (min-width: 600px) {
		}

		/* Medium devices (landscape tablets, 768px and up) */
		@media only screen and (min-width: 768px) {
		} 

		/* Large devices (laptops/desktops, 992px and up) */
		@media only screen and (min-width: 992px) {
		} 

		/* Extra large devices (large laptops and desktops, 1200px and up) */
		@media only screen and (min-width: 1200px) {
		}
</style>

<form action = "?page=login2" method = "post">
  <fieldset>
	<legend>Login</legend>
	<br>
	<input type="text" name="username" placeholder="Username" required><br><br>
	<input type="password" name="password" placeholder="Password" required><br><br>
	<input type="submit" name="login" value="Login">
	<br>&nbsp;
  </fieldset>  
</form>
<h3>Register for login!</h2>
<form action = "?page=registration" method = "post">
  <fieldset>
	<legend>Registration</legend>
	<br>
	<input type="text" name="firstname" placeholder="First name" required><br><br>
	<input type="text" name="lastname" placeholder="Last name" required><br><br>
	<input type="text" name="username" placeholder="Username" required><br><br>
	<input type="password" name="password" placeholder="Password" required><br><br>
	<input type="submit" name="registration" value="Registration">
	<br>&nbsp;
  </fieldset>
</form>
