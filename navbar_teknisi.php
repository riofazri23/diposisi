<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE_URL ?>index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE_URL ?>teknisi/data_teknisi.php">Data Teknisi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>disposisi/data_disposisi_teknisi.php">Data Disposisi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
      </form>
    </div>
  </div>
</nav>