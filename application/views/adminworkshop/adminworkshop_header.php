<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('admin/dashboard')?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('adminworkshop/workshop')?>">WorkShops</a>

          </li>    
          <li>
            <a class="nav-link" href="<?= base_url('adminworkshop/upcoming_workshop')?>">Upcoming WorkShop</a>
          </li>    
      </ul>

        <li class="d-flex">
          <a class="nav-link my-2 my-sm-0 btn btn-primary me-3" href="<?= base_url('login/admin_logout')?>">Logout</a>
          <a class="nav-link my-2 my-sm-0 btn btn-outline-primary" href="<?= base_url('adminworkshop/add_workshop')?>">Add Workshop</a>
        </li>
    </div>
  </div>
</nav>
<script type="text/javascript" src="<?= base_url('/asset/ckeditor/ckeditor.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/asset/ckfinder/ckfinder.js')?>"></script>