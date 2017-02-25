<?php $__env->startSection('content'); ?>
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel panel-primary">
                <div class="panel-heading">Edit Tunjangan Pegawai</div>
                <div class="panel-body">
					<?php echo Form::model($tunjanganp,['method'=>'PATCH','route'=>['tunjanganp.update',$tunjanganp->id]]); ?>

						<?php echo Form::hidden('id',null,['class'=>'form-control']); ?>

                        <div class="form-group<?php echo e($errors->has('kode_t') ? ' has-error' : ''); ?>">
                            <label for="kode_t" class="col-md-4 control-label">Kode Tunjangan</label>

                            <div class="col-md-6">
                                <?php echo Form::text('kode_t',null,['class'=>'form-control']); ?>

                                <?php if($errors->has('kode_t')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kode_tunjangan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                       

                        <div class="form-group<?php echo e($errors->has('pegawai_id') ? ' has-error' : ''); ?>">
                            <label for="pegawai_id" class="col-md-4 control-label">Pegawai ID</label>

                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    <option value="">pilih</option>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nip); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>

                                <?php if($errors->has('pegawai_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                      
                        <div class="form-group">
						<?php echo Form::submit('Save',['class'=>'btn btn-primary form-control']); ?>

					</div>
				<?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>