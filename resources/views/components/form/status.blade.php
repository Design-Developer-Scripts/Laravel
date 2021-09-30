<div>
  <label class="switch">
    @if(isset($status) && $status == true)
      <input type="checkbox" id="togBtn" name="{{$name}}" checked>
    @else
      <input type="checkbox" id="togBtn" name="{{$name}}">
    @endif
  
    <div class="slider round">
      <!--ADDED HTML -->
      <span class="on">ON</span>
      <span class="off">OFF</span>
      <!--END-->
    </div>
  </label>
</div>