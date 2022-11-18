

<?php $__env->startSection('title', 'Thank you'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <!-- HERO SECTION-->
  <section class="py-5">
    <div class="row">
        <h2 class="h5 text-center text-uppercase mb-4" style="color:cadetblue">
          Your order is on it's way.
        </h2>
        <div style="max-width: 500px;margin: 0 auto;">
          <a class="btn btn-dark btn-sm px-2" style="
            width: 195px;
            background-color: cadetblue;
            box-shadow: 2px 4px 3px #818181;
            border-radius: 5px;
            border: 0px;
            padding: 9px 0 7px 0;
            margin-right:15px;
          " href="/invoice" target="_blank">
          DOWNLOAD INVOICE
          </a>
          <a class="btn btn-dark btn-sm px-2" style="
            width: 195px;
            background-color: rgb(60, 121, 123);
            box-shadow: 2px 4px 3px #818181;
            border-radius: 5px;
            border: 0px;
            padding: 9px 0 7px 0;
          " href="/email-invoice">
          EMAIL INVOICE
          </a>
        </div>
    </div>
  </section>

  <!-- SERVICES-->
  <?php $__env->startComponent('front/services'); ?> <?php echo $__env->renderComponent(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Shopping-cart-php-mvc\views/front/thankyou.blade.php ENDPATH**/ ?>