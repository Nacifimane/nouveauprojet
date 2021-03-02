<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/PrjAdmin') ?>">Admin Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Projects</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('/PrjAdmin/new') ?>" class="btn btn-primary mr-3">New Project</a>
                </li>
                <li class="nav-item">
                   <?php if($session = session()):?>
                   <a class="nav-link" href="#"><?= $session->get('user_name') ?></a>
                    <?php endif;?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>