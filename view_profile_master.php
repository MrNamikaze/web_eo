<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 color">Profile</h1>
        </div>
            <?php
            if($not==1):
            ?>
            <div class="alert alert-success" role="alert">
              Sukses dirubah!!
            </div>
            <?php endif;?>
            <?php
            if($not==2):
            ?>
            <div class="alert alert-danger" role="alert">
              Invalid email/no hp!!
            </div>
            <?php endif;?>
        <form class="user" action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="id" name="id" 
                    placeholder="Nama Lengkap" value="<?= $_SESSION['user']['id']?>" hidden>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                    placeholder="Nama Lengkap" value="<?= $_SESSION['user']['nama']?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" name="email" 
                    placeholder="Email Address" value="<?= $_SESSION['user']['email']?>">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password" name="password" 
                    placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary btn-user btn-block" name="profile" value="Update" style="width: 10%;margin-right: 0;margin-left: auto">
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
</body>
  <!-- /.content-wrapper -->