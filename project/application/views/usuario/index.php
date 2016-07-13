
<h1>Form to Create Profiles</h1>
<!-- The following code will have user interfaces-->
<div>
<form method="POST" action="<?php echo base_url('usuario/insert')?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Porfile:</label>
        <select name="txt-idProfile" class="form-control">
        <?php 
         foreach ($getPerfil as  $value) {?>
            <option value="<?php echo $value->per_id;?>" ><?php echo $value->per_nombre;?></option> 
       <?php }?>
      
        </select>
      </div>
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
        <label for="exampleInputPassword1">Phone Number:</label>
        <input type="text" class="form-control" name="txt-phoneNumber" placeholder="Phone Number">
      </div>
          <button type="submit" class="btn btn-primary">Add Profile</button>
    </form>
</div>
