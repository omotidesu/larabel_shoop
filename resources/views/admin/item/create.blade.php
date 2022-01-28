<h2>{{ __('Item Input') }}</h2>
<a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>

<form action="{{route('admin.item.add')}}" method="post">
@csrf
<div>
    <label for="">{{ __('Item Name') }}</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="">{{ __('Item Code') }}</label>
    <input type="text" name="code">
  </div>
  <div>
    <label for="">{{ __('Price') }}</label>
    <input type="number" name="price">
  </div>

  <button>{{ __('Update') }}</button>
</form>