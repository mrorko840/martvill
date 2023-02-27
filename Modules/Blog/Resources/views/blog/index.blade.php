@extends('admin.layouts.app')
@section('page_title', __('Blogs'))
@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/Blog/Resources/assets/css/blog.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<div class="col-sm-12 list-container" id="blog-list-container">
  <div class="card">
    <div class="card-header d-md-flex justify-content-between align-items-center">
      <h5><a href="{{ route('blog.index') }}">{{ __('Blogs') }}</a></h5>
        <div class="d-flex mt-2 mt-md-0">
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                <span class="feather icon-trash-2 me-1"></span>
                {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
            </a>
            @if (in_array('Modules\Blog\Http\Controllers\BlogController@create', $prms))
                <a href="{{ route('blog.create') }}" class="btn mb-0 btn-outline-primary custom-btn-small"><span class="fa fa-plus"> &nbsp;</span>{{ __('Add Blog') }}</a>
            @endif
        <button class="btn btn-outline-primary custom-btn-small mb-0 me-0 collapsed filterbtn" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
    </div>
    </div>
     <div class="card-header collapse p-0" id="filterPanel">
      <div class="row mx-2 my-2">
        <div class="col-md-3">
         <select class="select2 filter" name="category_id">
            <option value="">{{ __('All Category') }}</option>
            @foreach ($categorize as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
      </div>
      <div class="col-md-3">
          <select class="select2 filter" name="author_id">
            <option value="">{{ __('All Author') }}</option>
            @foreach ($authors as $author)
              <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
          </select>
      </div>
       <div class="col-md-3">
          <select class="select2-hide-search filter" name="status">
            <option value="">{{ __('All Status') }}</option>
            <option value="Active">{{ __('Active') }}</option>
            <option value="Inactive">{{ __('Inactive') }}</option>
          </select>
      </div>
      </div>
    </div>
    <div class="card-body px-4 blog-table need-batch-operation"
        data-namespace="\Modules\Blog\Http\Models\Blog" data-column="id">
      <div class="card-block pt-2 px-0">
        <div class="col-sm-12">
          @include('admin.layouts.includes.yajra-data-table')
        </div>
    </div>
      </div>
     </div>
    @include('admin.layouts.includes.delete-modal')
  </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('Modules/Blog/Resources/assets/js/blog.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/yajra-export.min.js') }}"></script>
@endsection
