<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>આવક/જાવક ની એન્ટ્રી કરો
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">આવક/જાવક ની એન્ટ્રી કરો
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>આવક/જાવક ની એન્ટ્રી કરો
                            </h5>
                            <a href="<?php echo e(url('admin/roj_med/view')); ?>" class="btn float-end btn-success">આવક/જાવક હિસાબ
                            </a>
                        </div>
                        <div class="card-body">
                            
                            <form id="myForm" action="<?php echo e(url('admin/roj_med/save')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="label1 form-label" for="validationCustom01">નામ :</label>
                                        <input class="form-control" id="validationCustom01" type="text" name="name"
                                            required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">તારિક :</label>
                                        <input class="form-control" id="validationCustom01" type="date" name="date" readonly
                                            value="<?php echo e(now()->format('Y-m-d')); ?>">
                                        <div class="valid-feedback">Looks
                                            good!
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label class="label1 form-label" for="validationCustom01">કારણ :</label>
                                        <textarea class="form-control" id="validationCustom01" type="text" value="" name="reason" required> </textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>


                                    <div class="col-md-6 mt-3">

                                        <select class=" form1 form-select" name="cash_type" id="type" required>
                                            <option>આવક </option>
                                            <option>જાવક</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mt-3">

                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            placeholder="Please enter number only" name="amount" id="amount" required>
                                    </div>
                                    <center>
                                        <button type="submit" style="width: 130px" class="btn btn-primary but m-5">
                                            Submit Form
                                        </button>

                                        <script>
                                            // Prevent the form from submitting on enter
                                            const form = document.getElementById('myForm');
                                            form.addEventListener('keypress', function(e) {
                                                if (e.keyCode === 13) {
                                                    e.preventDefault();
                                                }
                                            });

                                            document.addEventListener('keydown', function(event) {
                                                if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
                                                    var form = event.target.form;
                                                    var index = Array.prototype.indexOf.call(form, event.target);
                                                    form.elements[index + 1].focus();
                                                    event.preventDefault();
                                                }
                                            });
                                        </script>
                                    </center>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/roj_med/index.blade.php ENDPATH**/ ?>