@extends('formbuilder::layout')

@section('page_title', __('Forms'))

@section('content')
    <div class="col-md-12 list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('formbuilder::forms.index') }}">{{ __('Forms') }}</a></h5>
                <div class="d-md-flex mt-2 mt-md-0">
                    <div role="toolbar">
                        <div class="btn-group d-flex flex-wrap" role="group">
                            <a href="{{ route('formbuilder::forms.create') }}" class="btn mt-2 mt-sm-0 btn-primary btn-sm mb-0">
                                <i class="fa fa-plus"></i> {{ __('Add New Form') }}
                            </a>

                            <a href="{{ route('formbuilder::submissions.all') }}" class="btn mt-2 mt-sm-0 btn-primary mb-0 btn-sm ms-2">
                                <i class="fa fa-th-list"></i> {{ __('Submissions') }}
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary mt-2 mt-sm-0 btn-sm ms-2" data-bs-toggle="collapse"
                                data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel">
                                <i class="fas fa-filter"></i>{{ __('Filter') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header p-0 collapse" id="filterPanel">
                <div class="row mx-2 my-3">
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="visibility">
                            <option value="">{{ __('All Visibility') }}</option>
                            <option value="PUBLIC">{{ __('Public') }}</option>
                            <option value="PUBLIC">{{ __('Private') }}</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="type">
                            <option value="">{{ __('All Types') }}</option>
                            <option value="Survey">{{ __('Survey') }}</option>
                            <option value="contact_form">{{ __('Contact Form') }}</option>
                            <option value="others">{{ __('Others') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 product-table">
                <div class="card-block pt-2 px-0">
                    <div class="col-sm-12 hide-export">
                        @include('admin.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.includes.delete-modal')
    </div>
@endsection
