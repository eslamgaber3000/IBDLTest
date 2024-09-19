<div class="sidebar-container">
    <div class="cor-side-com sidebar">

        <div class="cor-side-com">
            <div style="margin:3em 0" class=" qualifications-section">

                <div class="first-col ">
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'assessment')); ?>"> <img src="../../images/services/white/Assessment.png"
                                alt=""></a>
                    </div>
                    <?php if(session('ver') === 'Center' || session('ver') === 'Trainee'): ?>

                    <?php else: ?>
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'education')); ?>"> <img src="../../images/services/white/Education.png"
                                alt=""></a>
                    </div>
                    <?php endif; ?>
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'qualifications')); ?>"> <img
                                src="../../images/services/white/Qualifications.png" alt=""></a>
                    </div>
                    <?php if(session('ver') === 'Trainee'): ?>
                    <?php else: ?>
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'simulation')); ?>"> <img src="../../images/services/white/Simulation.png"
                                alt=""></a>
                    </div>
                    <?php endif; ?>
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'service')); ?>"> <img src="../../images/services/white/Services.png"
                                alt=""></a>
                    </div>
                    <?php if(session('ver') === 'corporate' || session('ver') === 'Center'): ?>

                    <?php else: ?>
                    <div class="img-col1 mx-1 mb-2">
                        <a href="<?php echo e(url('pages/'.'accreditation')); ?>"> <img
                                src="../../images/services/white/Accreditation.png" alt=""></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="logo-section">
                <img src="../../images/IBDL_Red.png" alt="">
            </div>

            <div class="logo-word-section">
                <p>INSPIRE TO LEARN</p>
            </div>
            
        </div>







    </div>
</div><?php /**PATH /home/u101566037/domains/ibdl.net/public_html/blog/resources/views/include/sidebar.blade.php ENDPATH**/ ?>