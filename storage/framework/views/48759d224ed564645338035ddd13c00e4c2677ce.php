<nav>
<?php $__env->startSection('navbar'); ?>
<div id="header">
<ul class="nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Pintores</a>
                <ul>
                    <li><a href="<?php echo e(route()); ?>"></a></li>
                    <li><a href="<?php echo e(route()); ?>"></a></li>
                    <li><a href="<?php echo e(route()); ?>"></a></li>
                    <li><a href="<?php echo e(action()); ?>"></a></li>
                    <li><a href="<?php echo e(action()); ?>"></a></li>
                </ul>
            </li>
            <li><a href="">Contacto</a></li>
</div>
<?php echo $__env->yieldSection(); ?>
</nav>
