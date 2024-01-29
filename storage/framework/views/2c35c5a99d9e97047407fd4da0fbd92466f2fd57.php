<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        body {
            overflow-y: hidden;
        }
    </style>
</head>

<body>

    <div class="wrapper">



        
        <?php $__env->startSection('title'); ?>
        Modifier Client <?php echo e($row->CIN); ?>

        <?php $__env->stopSection(); ?>

        <?php echo $__env->make('layouts.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-wrapper" style="margin-top: 50px;background-color:antiquewhite;">

            <form method="post" action="<?php echo e(route('client.update',$row->CIN)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="row p-40">

                    <div class="col-6">

                        <input type="hidden" name="CIN" value="<?php echo e($row->CIN); ?>">
                        <!-- <div class="form-group">
                            <label for="CIN" class="pl-10"><b>CIN :</b></label>
                            <input type="htext" class="form-control" id="CIN" name="CIN" value="<?php echo e($row->CIN); ?>" readonly style="border:1px solid aqua; border-radius:5px;">
                        </div> -->
                        <div class="form-group">
                            <label for="Nom" class="pl-10"><b>Nom :</b></label>
                            <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo e(old('Nom',$row->Nom)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['Nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="Prenom" class="pl-10"><b>Prénom :</b></label>
                            <input type="text" class="form-control" id="Prenom" name="Prenom" value="<?php echo e(old('Prenom',$row->Prenom)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['Prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="DateNaissance" class="pl-10"><b>Date de naissance :</b></label>
                            <input type="date" class="form-control" id="DateNaissance" name="DateNaissance" value="<?php echo e(old('DateNaissance',$row->DateNaissance)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['DateNaissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Nationalite" class="pl-10"><b>Nationalité :</b></label>
                            <input type="text" class="form-control" id="Nationalite" name="Nationalite" value="<?php echo e(old('Nationalite',$row->Nationalite)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['Nationalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="Telephone" class="pl-10"><b>Téléphone :</b></label>
                            <input type="tel" class="form-control" id="Telephone" name="Telephone" value="<?php echo e(old('Telephone',$row->Telephone)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['Telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="Permis" class="pl-10"><b>Permis :</b></label>
                            <input type="text" class="form-control" id="Permis" name="Permis" value="<?php echo e(old('Permis',$row->Permis)); ?>" style="border:1px solid aqua; border-radius:5px;">
                            <p class="text-danger">
                                <?php $__errorArgs = ['Permis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <input type="submit" class="btn btn-primary" value='Sauvgarder' style="width:110px;height:48px">
                    <input type="reset" class="btn btn-primary" value='Vider' style="width:80px;height:48px">
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <?php echo $__env->make('layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php echo $__env->make('layouts.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Projects\GestionLocation\resources\views/Clients/ModifierClient.blade.php ENDPATH**/ ?>