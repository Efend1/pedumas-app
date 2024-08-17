
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<body>
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>
        <ul class="navbar-nav navbar-align">
            <li >
                <button
                    class="btn btn-primary"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"
                >
                    Menu
                </button>
            </li>
            <li class="nav-item dropdown">
                <a
                    class="nav-link"
                    data-bs-toggle=" dropdown"
                    aria-expanded="false"
                    href="profil.php"
                >
                    <i
                        data-feather="user"
                        style="width: 24px; height: 24px"
                    ></i>
                   <span class="text-dark"> <?php echo $_SESSION['nama_petugas']; ?> | <?php echo $_SESSION['level'] ?></span>
                </a>
            </li>
        </ul>
    </nav>

    <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel"
    >
        <div class="offcanvas-header bg-primary">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">
                PEDUMAS SITU
            </h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body">
          <?php if($_SESSION['level'] == 'admin'){ ?>
          <ul>
            <li>
              <a>Kelola Aduan</a>
            </li>
            <li>
              <a>Kelola Tanggapan</a>
            </li>
            <li>
              <a>Laporan</a>
            </li>
            <li>
              <a>Kelola Petugas</a>
            </li>
            <li><a>logout</a></li>
          </ul>
          <?php } else { ?>
          <ul>
            <li>
              <a>Kelola Aduan</a>
            </li>
            <li>
              <a>Kelola Tanggapan</a>
            </li>
            <li><a>logout</a></li>
          </ul>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
</body>
