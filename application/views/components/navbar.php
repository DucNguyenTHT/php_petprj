<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Small</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if(!$this->getSession('userId')):?>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE."/accountController";?>">Register</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE."/accountController/loginForm";?>">Login</a>
        </li>
        <?php endif;?>
    </ul>
        <?php if($this->getSession('userId')):?>
        <ul class='my-2 my-lg-0'><a href="<?php echo BASE.'/profile/logout'?>" class='btn btn-success'>Logout</a></ul>
        <?php endif; ?>
    </div>
    </nav>