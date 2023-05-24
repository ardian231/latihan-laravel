

<?php $__env->startSection('content'); ?>
    <div class="content edit">
        <h2>Edit Barang</h2>

        <form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="<?php echo e($barang->nama_produk); ?>" required>
            </div>

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" value="<?php echo e($barang->kode_produk); ?>" required>
            </div>

            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" value="<?php echo e($barang->harga_produk); ?>" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" value="<?php echo e($barang->stok); ?>" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" required><?php echo e($barang->deskripsi); ?></textarea>
            </div>

            <button type="submit" class="update">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\semester4\ujicoba\resources\views/barang/edit.blade.php ENDPATH**/ ?>