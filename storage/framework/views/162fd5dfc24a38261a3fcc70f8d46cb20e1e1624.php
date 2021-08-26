

<?php $__env->startSection('title_web'); ?>
     Blog
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-md btn-primary mb-3">
                        TAMBAHKAN BLOG
                    </a>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <img src="<?php echo e(Storage::url('public/blogs/').$blog->image); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td><?php echo e($blog->title); ?></td>
                                    <td><?php echo $blog->content; ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('blog.edit', $blog->id )); ?>" class="btn btn-sm btn-success">
                                            EDIT                                            
                                        </a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                HAPUS
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger">
                                    Data Blog Belum Tersedia
                                </div>
                                <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($blogs->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blog\resources\views/blog/index.blade.php ENDPATH**/ ?>