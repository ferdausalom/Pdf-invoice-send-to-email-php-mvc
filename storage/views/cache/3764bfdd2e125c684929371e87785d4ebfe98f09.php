

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title></title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" language="javascript">
    $(function () {
            $('#btnSend').click(function () {
                var taXmlData = $('#taXml').val();
                console.log(taXmlData);
                $.ajax({
                    type: "POST",
                    url: 'https://sec-phoneplus.com/DistributionWebService/DialerDistribution.asmx/ImportFromXml',
                    data: taXmlData,
                    success: function (jqXHR) {
                        alert('Success');
                    },
                    error: function (jqXHR) {
                        alert('Failure:\r\n' + jqXHR.responseText);
                    }
                });
            });
        })
  </script>

</head>

<body>
  <textarea id="taXml" rows="22" cols="74" style="display: none">
    <div id="">
      <XmlTemplate>
        <WebServiceURL>https://sec-phoneplus.com/DistributionWebService/DialerDistribution.asmx/ImportFromXml</WebServiceURL>
          <TenantID>957</TenantID>
          <TenantName>אפקטיב נט מי עדן </TenantName>
          <ApplicationID>2454</ApplicationID>
          <ApplicationVersion>1</ApplicationVersion>
          <ApplicationName>CALL BACK</ApplicationName>
          <SecID>39d26304-4058-451b-a7d8-8fd1d280e824</SecID>
          <DialerRequestTime>2022-11-18 12:00:00</DialerRequestTime>
          <PhoneNum>+972452155423</PhoneNum>
          <PhoneNum2></PhoneNum2>
          <PhoneNum3></PhoneNum3>
          <AgentExtNumber></AgentExtNumber>
          <Info1></Info1>
          <Info2></Info2>
          <Info3></Info3>
          <Info4></Info4>
          <Info5></Info5>
        </XmlTemplate>
    </div>
</textarea>
  <br />
  <input type="button" id="btnSend" value="Send" />
</body>

</html>

<div class="container">
  <!-- TRENDING PRODUCTS-->
  <section class="py-5">
    <?php $__env->startComponent('message', ['sessionName' => 'message']); ?><?php echo $__env->renderComponent(); ?>
    <header>
      <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
      <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
    </header>
    <div class="row">
      <!-- PRODUCT-->
      <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="product text-center">
          <div class="position-relative mb-3">
            <div class="badge text-white bg-"></div>
            <a class="d-block" href="/product/show?id=<?= $product->id; ?>">
              <img class="img-fluid w-100" src="/<?= $product->thumbnail; ?>" alt="...">
            </a>
            <div class="product-overlay">
              <ul class="mb-0 list-inline">
                <li class="list-inline-item m-0 p-0">

                  <form action="/cart/store" method="POST">
                    
                      <input type="hidden" name="productId" value="<?= $product->id; ?>">
                      <input type="hidden" name="clientIp" value="<?= get_client_ip(); ?>">
                      <button type="submit" class="btn btn-sm btn-dark">Add to cart</button>
                    </form>

                </li>
              </ul>
            </div>
          </div>
          <h6> <a class="reset-anchor" href="/product/show?id=<?= $product->id; ?>">
              <?= $product->name; ?>
            </a></h6>
          <p class="small text-muted">$
            <?= ($product->price/100); ?>
          </p>
        </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </section>

  <!-- SERVICES-->
  <?php $__env->startComponent('front/services'); ?> <?php echo $__env->renderComponent(); ?>

</div>

<script type="text/javascript">
  $(document).ready(function(){
      
      $(document).on('submit', '#addToCart', (e) => {
        // e.preventDefault();
        $("#message").html('');

        const form = $("#addToCart")[0];
        let data = new FormData(form);

        $.ajax({
          url: "/cart/store",
          method: "POST",
          dataType: "JSON",
          data: data,
          processData: false,
          contentType: false,
          cache: false,
          success: (response) => {
            if (response.success) {
              $("#mesgsage").html(`<div class="alert alert-success">'
                ${response.message}
                  '</div>`);
            } else {
              $("#messgage").html(`<div class="alert alert-warning">'
                ${response.message}
                  '</div>`);
            }
          }

        });

      });

    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Shopping-cart-php-mvc\views/front/index.blade.php ENDPATH**/ ?>