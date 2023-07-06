<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand keychainify-checked" href="#">User Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active keychainify-checked" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <?php if(!$this->getSession('userId')): ?>
        <li class="nav-item">
          <a class="nav-link keychainify-checked" href="<?php echo BASEURL; ?>/accountController">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link keychainify-checked" href="<?php echo BASEURL; ?>/accountController/loginForm">Login</a>
        </li>
        <?php else:  ?>
        <li class="nav-item">
          <a class="nav-link keychainify-checked" href="<?php echo BASEURL; ?>/profile/courseForm">Add Courses</a>
        </li>
        <?php endif; ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <?php if($this->getSession('userId')): ?>
    <ul class="my-2 my-lg-0"><a href="<?php echo BASEURL; ?>/profile/logout" class="btn btn-success">Logout</a></ul>
    <?php endif; ?>
  </div>
</nav>