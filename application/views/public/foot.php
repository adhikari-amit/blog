<!-- ========== Js ========== -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/slick.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>

<script type="text/javascript">
  var modal = document.getElementById("myModal");
  var span = document.getElementById("close");
  span.onclick = function() {
    modal.style.display = "none";
  }

  $(window).on('load', function() {
    setTimeout(function() {
      modal.style.display = "block";
    }, 1000);
  });
</script>