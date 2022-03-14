<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url('admin/dashboard')?>">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/subscriber')?>" >Subscribe List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/category')?>" >Category</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/authors')?>" >Authors</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/customer')?>" >New Customer</a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/sociallinks')?>" >Social Links</a>
          </li>
 
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/all_comments')?>"  >Comments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('adminworkshop')?>">Workshop</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?= base_url('admin/submitted_articles')?>">Submitted Articles</a>
          </li>  
       
      </ul>

        <li class="d-flex">
         
          <a class="nav-link my-2 my-sm-0 btn btn-dark me-3" href="<?= base_url('admin/add_article')?>">Add Articles</a>
           <a class="nav-link my-2 my-sm-0 btn btn-dark " href="<?= base_url('login/admin_logout')?>">Logout</a>
        </li>
    </div>
  </div>
</nav>
