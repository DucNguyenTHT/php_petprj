<div class="row">
    <div class="col-md-5">
    <h2>User Login</h2>
    <?php if($this->getSession('accountCreated')): $this->flash('accountCreated','alert alert-success'); endif; ?>
        <form action="<?php echo BASE.'/accountController/userlogin' ?>" method="post">
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
            <input type="submit" value="login" class="form-control">
        </form>
</div>   
