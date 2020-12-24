<!DOCTYPE html>
<html lang="en">

<head>
    <title>Full Width Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Tambah Data Film</div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('siswa/save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="judul_film">judul_film</label>
                        <input type="text" name="judul_film" class="form-control" value="<?= old('judul_film'); ?>" id="judul_film">
                    </div>
                    <div class="form-group">
                        <label for="tgl_launc">tgl_launc</label>
                        <input type="date" name="tgl_launc" class="form-control" value="<?= old('tgl_launc'); ?>" id="tgl_launc">
                    </div>

                    <div class="form-group">
                        <label for="synopys">synopys</label>
                        <textarea name="synopys" id="synopys" class="form-control" cols="3" rows="3"><?= old('synopys'); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
					<br><?php echo "apem"; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>