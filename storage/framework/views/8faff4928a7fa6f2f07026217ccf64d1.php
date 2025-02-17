
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>એચ.એન.મોલ</title>
    <link rel="icon" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>એચ.એન.મોલ</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/font-awesome.css')); ?>">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/icofont.css')); ?>">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/themify.css')); ?>">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/flag-icon.css')); ?>">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/feather-icon.css')); ?>">

    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/chartist.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/date-picker.css')); ?>">
    <!-- Plugins css Ends-->

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/bootstrap.css')); ?>">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('admin/assets/css/color-1.css')); ?>" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/responsive.css')); ?>">

    

    <!--Styles -->
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/assets/css/boot.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body onload="startTime()">
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="<?php echo e(asset('admin/assets/images/login/1.jpg')); ?>"
                    alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div>
                        <div class="logo"><img class="img-fluid for-light"
                                src="<?php echo e(asset('admin/assets/images/login_logo_HN-removebg.png')); ?>" width="300"
                                alt="looginpage"><img class="img-fluid for-dark"
                                src="<?php echo e(asset('admin/assets/images/login_logo_HN-removebg.png')); ?>" width="300"
                                alt="looginpage"></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo csrf_field(); ?>

                                <h4>Register your account</h4>
                                <p>Enter your personal details to register account</p>
                                <div class="form-group">
                                    <label class="col-form-label pt-0"><?php echo e(__('Name')); ?></label>
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <input id="name" type="text" placeholder="First name"
                                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="name" value="<?php echo e(old('name')); ?>" required
                                                autocomplete="name" autofocus>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><?php echo e(__('Email Address')); ?></label>
                                    <input id="email" type="email" placeholder="Test@gmail.com"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                        value="<?php echo e(old('email')); ?>" required autocomplete="email">


                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><?php echo e(__('Password')); ?></label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" placeholder="*********"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="password" required autocomplete="new-password">
                                        <div class="show-hide"><span class="show"></span></div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><?php echo e(__('Confirm Password')); ?></label>
                                    <div class="form-input position-relative">
                                        <input id="password-confirm" type="password" placeholder="*********"
                                            class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2"
                                                href="#">Privacy Policy</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100"
                                        type="submit"><?php echo e(__('Register')); ?></button>
                                </div>
                                
                                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2"
                                        href="login">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- latest jquery-->
        <script src="<?php echo e(asset('admin/assets/js/jquery-3.5.1.min.js')); ?>"></script>
        <!-- Bootstrap js-->
        <script src="<?php echo e(asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
        <!-- feather icon js-->
        <script src="<?php echo e(asset('admin/assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
        <!-- scrollbar js-->
        <script src="<?php echo e(asset('admin/assets/js/scrollbar/simplebar.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/scrollbar/custom.js')); ?>"></script>
        <!-- Sidebar jquery-->
        <script src="<?php echo e(asset('admin/assets/js/config.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/script.js')); ?>"></script>

        <!-- Plugins JS start-->
    </div>
</body>

</html>
<?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>