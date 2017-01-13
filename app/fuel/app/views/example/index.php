<script type="text/javascript">
  function modify(mod) {
    $.get({
      url: '/example/ajax?modify=' + mod,
      success: function (data) {
        $('#progress-display').html(data);
      }
    });
  }
</script>



<div class="row">
  <div class="col-md-2">
    <a href="/example/modify?amount=1" id="increase" type="button" class="btn btn-lg btn-success btn-block">Increase</a>
  </div>
  <div class="col-md-2">
    <a href="/example/modify?amount=-1" id="decrease" type="button" class="btn btn-lg btn-danger btn-block">Decrease</a>
  </div>
  <div class="col-md-2">
    <button onclick="modify(1)" type="button" class="btn btn-lg btn-success btn-block">Increase (ajax)</button>
  </div>
  <div class="col-md-2">
    <button onclick="modify(-1)" id="decrease" type="button" class="btn btn-lg btn-danger btn-block">Decrease (ajax)</button>
  </div>
  <div class="col-md-4">
    <a href="/example/reset" id="reset" type="button" class="btn btn-lg btn-primary btn-block">Reset</a>
  </div>
</div>
<div id="progress-display" class="row" style="margin-top: 30px;">
  <?php echo View::forge('example/progress', array('value' => $value)); ?>
</div>
