

<?php $__env->startSection('content'); ?>
    <div class="content read">
        <h2>Detail Barang</h2>

        <div>
            <p><strong>Nama Produk:</strong> <?php echo e($barang->nama_produk); ?></p>
            <p><strong>Kode Produk:</strong> <?php echo e($barang->kode_produk); ?></p>
            <p><strong>Harga Produk:</strong> <?php echo e($barang->harga_produk); ?></p>
            <p><strong>Stok:</strong> <?php echo e($barang->stok); ?></p>
            <p><strong>Deskripsi:</strong> <?php echo e($barang->deskripsi); ?></p>
        </div>

        <div class="actions">
            <a href="<?php echo e(route('barang.edit', $barang->id)); ?>" class="edit">Edit</a>
            <form action="<?php echo e(route('barang.destroy', $barang->id)); ?>" method="POST" style="display: inline-block;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="trash" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\semester4\ujicoba\resources\views/barang/show.blade.php ENDPATH**/ ?>