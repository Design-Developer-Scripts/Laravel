<div>
  <label class="switch">
    @if($status)
        <input type="checkbox" id="togBtn" name="{{$name}}" checked 
        @if($id)
          wire:click="statusFalse({{$id}})"
        @endif>
    @else
        <input type="checkbox" id="togBtn" name="{{$name}}" 
        @if($id)
          wire:click="statusTrue({{$id}})"
        @endif>
    @endif
  
    <div class="slider round">
      <!--ADDED HTML -->
      <span class="on">ON</span>
      <span class="off">OFF</span>
      <!--END-->
    </div>
  </label>
</div>