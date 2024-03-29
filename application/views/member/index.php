<div class="row justify-content-center">
    <div class="col-lg-2 text-center">
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>

<div class="card mb-3 col-lg-5">
    <div class="row no-gutters">
        <div class="col profile">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text"><?= $user['email']; ?></p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<style>
    .thumbnail {
        height: 150px auto;
    }
</style>