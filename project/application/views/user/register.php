<form method="POST" action="<?php echo base_url('usuario/insert')?>">
      
      <div class="form-group">
        <label for="exampleInputPassword1">Names:</label>
        <input type="text" class="form-control" name="txt-names" placeholder="Names">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Last Names:</label>
        <input type="text" class="form-control" name="txt-lastNames" placeholder="Last Names">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email:</label>
        <input type="text" class="form-control" name="txt-email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">User:</label>
        <input type="text" class="form-control" name="txt-user" placeholder="User">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password:</label>
        <input type="password" class="form-control" name="txt-password" placeholder="Password">
      </div>
          <button type="submit" class="btn btn-primary">Add Profile</button>
    </form>