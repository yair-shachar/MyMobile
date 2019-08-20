@extends ('cms.cms_master')
@section('cms_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Product</h1>
   </div>
  <div class="row">
    <div class="col-6">
        <form action="{{ url('cms/products') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate"
         autocomplate="off">
        @csrf()
        <div class="form-group">
          <label for="categorie_id">Category:</label>
          <select class="form-control" name="categorie_id" id="categorie-id">
          <option value="">Choose Category...</option>
          @foreach($categories as $category)
          <option @if( old('categorie_id') == $category['id']) selected="selected" @endif  value="{{ $category['id'] }}">
          {{ $category['cname'] }}</option>
          @endforeach
          </select>
          <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
        </div>        
        <div class="form-group">
              <label for="categorie-id">Product Title:</label>
              <input class="form-control source-text" type="text" name="title" id="title" value="{{ old('title') }}">
              <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group">
              <label for="url">Product URL:</label>
              <input class="form-control target-text" type="text" name="url" id="url" value="{{ old('url') }}">
              <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <div class="form-group">
              <label for="price">Product Price:</label>
              <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}"> <!-- Orininaly was: class="form-control target-text" -->
              <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>            
            <div class="form-gruop">
            <label for="">Article:</label>
            <textarea class="form-control" name="article" id="article" cols="30" rows="10" value="{{ old('article') }}"></textarea>
            <span class="text-danger">{{ $errors->first('article') }}</span>
            </div>   
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
              </div>
              <div class="custom-file">
               <input name="image" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
               <label class="custom-file-label" for="inputGroupFile01">Choose Product Image</label>
              </div>
            </div>             
            <div class="form-group">
            <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>      
            <input type="submit" value="Save Product" name="submit" class="btn btn-primary">
            <a class="btn btn-secondary" href="{{ url('cms/products') }}">Cancel</a>
        </form>
    </div>
  </div>
@endsection