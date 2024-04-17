<?php

include("header.php");
include("navbar.php");

?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">register</div>
        <div class="card-body">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      <label for="email">Email</label>
    </div>

    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="cemail" placeholder="Enter confirm email" name="cemail">
      <label for="cemail">Confirm Email</label>
    </div>

    <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <label for="pwd">Password</label>
    </div>

    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="password pswd" placeholder="Enter confirm password" name="password pswd">
      <label for="password pswd">Confirm Email</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
             
        </div>
        <div class="card-footer">login ver. 1.2.3.5</div>
    </div>


<?php
include("footer.php");
?>



