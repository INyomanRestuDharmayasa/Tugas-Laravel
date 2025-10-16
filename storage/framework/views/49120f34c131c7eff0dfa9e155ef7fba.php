

<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="card p-4">
    <h2 class="text-center mb-4 text-primary fw-bold">Daftar Mahasiswa</h2>

    <div class="text-end mb-3">
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">+ Tambah Mahasiswa</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-striped table-hover text-center align-middle">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($m->id); ?></td>
                    <td><?php echo e($m->nim); ?></td>
                    <td><?php echo e($m->nama); ?></td>
                    <td><?php echo e($m->prodi); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $m->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $m->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="5">Belum ada data mahasiswa.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kampus-laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>