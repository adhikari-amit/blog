<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('user')?>">Artículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('user')?>">articles
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
      <?php
        if(! $this->session->userdata('user_id')):  ?>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login')?>">Login</a>
        </li>
      <?php else :?>
         <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/dashboard')?>">Dashboard</a>
        </li>
      <?php endif ?>  
        
      </ul>
      <!-- <form class="d-flex"> -->
         <?php echo form_open('user/search',['class'=>'d-flex']); ?>
        <!-- <input class="form-control me-sm-2" type="text" placeholder="Search"> -->

        <?php $data = array(
            'name'          => 'query',
            'id'            => 'query',
            'class'         =>'form-control me-sm-2',
            'placeholder'   =>"Search",
            'type'          =>"text",
            'value' => set_value('query'),
            );

            echo form_input($data);
        ?>
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      <!-- </form> -->
      <?= form_close(); ?>
    </div>
  </div>
</nav>