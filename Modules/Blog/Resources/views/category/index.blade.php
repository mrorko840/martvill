@extends('admin.layouts.app')
@section('page_title', __('Blog Category'))
@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/Blog/Resources/assets/css/blog.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="item-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('blog.category.index') }}">{{ __('Blog Category') }}</a></h5>
                <div class="d-flex mt-2 mt-md-0">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    @if (in_array('Modules\Blog\Http\Controllers\BlogCategoryController@store', $prms))
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add-category-name"
                            class="add-payment-term btn btn-outline-primary mb-0 custom-btn-small"><span class="fa fa-plus">
                                &nbsp;</span>{{ __('Add :x', ['x' => __('Category')]) }}</a>
                    @endif
                    <button class="btn btn-outline-primary custom-btn-small mb-0 me-0 collapsed filterbtn" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true"
                        aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
                </div>
            </div>
             <div class="card-header collapse p-0" id="filterPanel">
              <div class="row mx-2 my-2">
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
                data-namespace="Modules\Blog\Http\Models\BlogCategory" data-column="id">
                <div class="card-block pt-2 px-0">
                    <div class="col-sm-12">
                        @include('admin.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
            @include('admin.layouts.includes.delete-modal')
        </div>
    </div>
    <div id="add-category-name" class="modal fade display_none" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add :x', ['x' => __('Category')]) }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('blog.category.store') }}" method="post" id="addPaymentForm"
                    class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label require"
                                for="store-term">{{ __('Category Name') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control inputFieldDesign" name="name" placeholder="{{ __('Name') }}"
                                    id="store-term" required minlength="3"
                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">{{ __('Status') }}</label>
                            <div class="col-sm-7">
                                <input type="hidden" name="status" value="Inactive">
                                <div class="switch switch-bg d-inline m-r-10">
                                    <input class="is_default" type="checkbox" name="status" value="Active" id="is_default"
                                        checked>
                                    <label for="is_default" class="cr"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-0">
                        <div class="form-group row">
                            <label for="btn_save" class="col-sm-3 control-label"></label>
                            <div class="col-sm-12 margin-bottom-8px">
                                <button type="submit"
                                    class="py-2 custom-btn-submit ms-2 float-right">{{ __('Create') }}</button>
                                <button type="button" class="py-2 custom-btn-cancel float-right"
                                    data-bs-dismiss="modal">{{ __('Close') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="edit-payment" class="modal fade display_none" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit :x', ['x' => __('Category Name')]) }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('blog.category.update') }}" method="post" id="edit-payment-form"
                    class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="edit-id" id="edit-id" name="id">

                        <div class="form-group row">
                            <label class="col-sm-4 control-label require"
                                for="store-term">{{ __('Category Name') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control inputFieldDesign" name="name"
                                    placeholder="{{ __('Name') }}" id="name" required
                                    minlength="3"
                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">{{ __('Status') }}</label>
                            <div class="col-sm-7">
                                <input type="hidden" name="status" value="Inactive">
                                <div class="switch switch-bg d-inline m-r-10">
                                    <input class="is_default" type="checkbox" name="status"
                                        id="edit_status">
                                    <label for="is_default" class="cr"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-0">
                        <div class="form-group row">
                            <label for="btn_save" class="col-sm-3 control-label"></label>
                            <div class="col-sm-12 margin-bottom-8px">
                                <button type="submit"
                                    class="py-2 ms-2 custom-btn-submit float-right">{{ __('Update') }}</button>
                                <button type="button" class="py-2 custom-btn-cancel float-right"
                                    data-bs-dismiss="modal">{{ __('Close') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('Modules/Blog/Resources/assets/js/blog-category.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/yajra-export.min.js') }}"></script>
@endsection
