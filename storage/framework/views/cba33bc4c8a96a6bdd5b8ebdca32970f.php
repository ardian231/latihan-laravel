

<?php $__env->startSection('content'); ?>

    <div class="container">
        <h2>Daftar Barang</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <a class="btn btn-primary" href="<?php echo e(route('barang.create')); ?>" class="create-contact">Tambah Barang</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Kode Produk</th>
                    <th>Harga Produk</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->nama_produk); ?></td>
                        <td><?php echo e($item->kode_produk); ?></td>
                        <td><?php echo e($item->harga_produk); ?></td>
                        <td><?php echo e($item->stok); ?></td>
                        <td><?php echo e($item->deskripsi); ?></td>
                        <td class="actions">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-info" href="<?php echo e(route('barang.show', $item->id)); ?>" class="edit">Lihat</a>
                            <a class="btn btn-warning" href="<?php echo e(route('barang.edit', $item->id)); ?>" class="edit">Edit</a>
                            <form action="<?php echo e(route('barang.destroy', $item->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit" class="trash" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas\semester4\ujicoba\resources\views/barang/index.blade.php ENDPATH**/ ?>