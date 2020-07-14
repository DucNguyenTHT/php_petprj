<div class="row">
    <div class="col-md-5">
    <h2>User Login</h2>
    <?php $this->flash('accountCreated','alert alert-success');?>
        <form action="" method="post">
            <input type="text" name="Fname" placeholder="Fullname..." class="form-control">
            <input type="password" name="password" placeholder="Password..." class="form-control">
            <input type="submit" value="login" class="form-control">
        </form>
</div>   
