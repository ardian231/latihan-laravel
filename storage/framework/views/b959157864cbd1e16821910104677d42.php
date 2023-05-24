

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Tambah Barang</h2>

        <form action="<?php echo e(route('barang.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" required>
            </div>

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" required>
            </div>

            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" required></textarea>
            </div>

            <button type="submit" class="create">Tambah</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\semester4\ujicoba\resources\views/barang/create.blade.php ENDPATH**/ ?>