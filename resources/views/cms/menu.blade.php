@extends ('cms.cms_master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Menu</h1>   
</div>
  <p><a href="{{ url('cms/menu/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i >Add new menu link</a></p>
  @if($menus )
    <table class="table table-bordered mt-6">
      <thead>
        <tr>
            <th>Links</th>
            <th>Updated at</th>
            <th>Created at</th>
            <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
        <tr>
           <td>{{ $menu['link'] }}</td>
           <td>{{ date('d/m/Y H:i:s', strToTime($menu['updated_at'])) }}</td>

           <td>
             <a href="{{ url('cms/menu/' . $menu['id'] . '/edit') }}"><i class="fas fa-pencil-alt"></i> Edit |</a>
             <a href="{{ url('cms/menu/' . $menu['id']) }}"><i class="fas fa-eraser"></i> Delete</a>
           </td>
        </tr>
        @endforeach        
      </tbody>
    </table>
    @endif
      @endsection