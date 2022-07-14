<!-- Topbar Navbar -->

<div class="float-left">
    <h5><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date("d F Y")
        ?>, <b id="clock"></b>
    </h5>
</div>
<ul class="navbar-nav ml-auto">
    <!-- Nav Item - User Information -->
    <?php
    $keranjang = $this->cart->contents();
    $jml_item = 0;
    foreach ($keranjang as $key => $value) {
        $jml_item = $jml_item + $value['qty'];
    }
    ?>
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="<?php echo site_url('CTR_Pelanggan/Keranjang/') . $user['id'] ?>">
            <i class="fas fa-cart-arrow-down fa-2x"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter"><?php echo $jml_item ?></span>
        </a>
    </li>
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?php echo $user['username'] ?></span>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo site_url('CTR_Pelanggan/profile'); ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('CTR_Login'); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>
</ul>
</nav>
<!-- End of Topbar -->
<script type="text/javascript">
    window.onload = function() {
        clock();
    }

    function clock() {
        var e = document.getElementById('clock'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('clock()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>