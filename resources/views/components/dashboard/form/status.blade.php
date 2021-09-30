<div>
  <label class="switch">
    @if($status)
        <input type="checkbox" id="togBtn" name="{{$name}}" checked wire:click="statusFalse({{$id}})">
    @else
        <input type="checkbox" id="togBtn" name="{{$name}}" wire:click="statusTrue({{$id}})">
    @endif
  
    <div class="slider round">
      <!--ADDED HTML -->
      <span class="on">ON</span>
      <span class="off">OFF</span>
      <!--END-->
    </div>
  </label>
</div>