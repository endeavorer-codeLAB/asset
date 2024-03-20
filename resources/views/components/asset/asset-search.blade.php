<form action="/search" method="GET">

<div class="input-group">
      <input type="text" class="form-control" name="search" placeholder="Search for..." value="{{ isset($search) ? $search : '' }}">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default btn-sm">Go!</button>
      </span>
    </div>
</form>