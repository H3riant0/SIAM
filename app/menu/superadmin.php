<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>     
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=data-Mhs" class="nav-link   <?php
      if(isset($_GET['page']) && ($_GET['page']=='data-Mhs' || $_GET['page']=='edit-Mhs')){ echo 'active';} else{}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data-Pembayaran" class="nav-link <?php
      if(isset($_GET['page']) && $_GET['page']=='data-Pembayaran'){ echo 'active';} else{}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data-Tagihan" class="nav-link <?php
      if(isset($_GET['page']) && $_GET['page']=='data-Tagihan'){ echo 'active';} else{}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tagihan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index.php?page=data-arsip" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Scan / Arsip</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link logoff">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>    
          
        </ul>
      </nav>