@extends ('cms.cms_master')
@section('cms_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Are you sure you whant to DELETE this content?</h1>
    </div>
  <div class="row">
    <div class="col-6">
        <form action="{{ url('cms/content/' . $item_id) }}" method="POST">
        @csrf()
        {{ method_field('DELETE') }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE" name="submit" class="btn btn-danger">
        <a class="btn btn-secondary" href="{{ url('cms/content') }}">Cancel</a>
        </form>
    </div>
  </div>
@endsection