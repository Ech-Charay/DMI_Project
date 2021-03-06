<?php $__env->startSection('content1'); ?>
<div class="container">
	<form method="POST" action="<?php echo e(route('AffectProfEns')); ?>">
		<?php echo e(csrf_field()); ?>

		<?php $__currentLoopData = $elements_ens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element_ens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="form-groupe">
			<label>- <?php echo e($element_ens->name); ?></label>
			<input type="hidden" name="element[]" value="<?php echo e($element_ens->id); ?>">
			<select class="selectpicker" data-live-search="true" name="ens[]">
				<?php $__currentLoopData = $profs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($prof->id); ?>"><?php echo e($prof->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="row justify-content-center">
			<input type="submit" name="submit" value="submit" class="btn btn_primary">
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home_Chef_fil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\echch\OneDrive\Bureau\working\DMIProject\resources\views/manage/AffectProfEns.blade.php ENDPATH**/ ?>