@extends('formbuilder::layout')

@section('page_title', __('Form Submissions'))

@section('content')
    <div class="col-md-12 list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('formbuilder::submissions.all') }}">{{ __('Submissions') }}</a></h5>
                <div class="mt-2 mt-md-0">
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group" role="group">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                                <span class="feather icon-trash-2 me-1"></span>
                                {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                            </a>
                            <a href="{{ route('formbuilder::forms.index') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-arrow-left"></i> {{ __('Back To Forms') }}
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm ml-2" data-bs-toggle="collapse"
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
                        <select class="select2-hide-search filter" name="form">
                            <option value="">{{ __('All Forms') }}</option>
                            @foreach ($forms as $form)
                                <option value="{{ $form->id }}">{{ $form->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 product-table need-batch-operation"
                data-namespace="\Modules\FormBuilder\Entities\Submission" data-column="id">
                <div class="card-block pt-2 px-0">
                    <div class="col-sm-12 hide-export">
                        @include('admin.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.includes.delete-modal')
@endsection
