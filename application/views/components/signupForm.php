<div class="col-md-5">
    <form action="<?php echo BASE."/accountController/createAccount";?>" method="post">
        <div class="form-group">
            <input type="text" name="Fname" placeholder="Fullname..." class="form-control" 
            value="<?php if(!empty($data['fullName'])): echo $data['fullName']; endif;?>">
        </div>
        <div class="erro">
            <?php
                if(!empty($data['fullNameErro'])): echo $data['fullNameErro']; endif;
            ?>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email..." class="form-control"
            value="<?php if(!empty($data['email'])): echo $data['email']; endif;?>">
        </div>
        <div class="erro">
            <?php
                if(!empty($data['emailErro'])): echo $data['emailErro']; endif;
            ?>
        </div>
        
        <div class="form-group">
            <input type="password" name="password" placeholder="Password..." class="form-control"
            value="<?php if(!empty($data['password'])): echo $data['password']; endif;?>">
        </div>
        <div class="erro">
            <?php
                if(!empty($data['passwordErro'])): echo $data['passwordErro']; endif;
            ?>
        </div>
        <input type="submit" value="register" class="form-control">
    </form>
</div>