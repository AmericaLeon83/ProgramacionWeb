<form action="login.php?action=recovery&token=<?php echo $token?>"
method = "post">
<h1> Establece tu nueva contrasenia</h1>
<!-- PASSWORD INPUT -->
<div class="form-outline mb-4" >
    <input type="password" id="form2Example2" class="form-control" 
    name="contrasena"/>
    <label class="form-label" for="form2Example2">Password</label>
</div>

<!--SUBMIT BUTTON -->
<input type="submit" class="btn btn-primary btn-block mb-4">Sign in</input>

</form>