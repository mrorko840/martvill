@extends('formbuilder::layout')

@section('page_title', __('KYC Submissions'))

@section('content')
    <div class="col-md-12 list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('formbuilder::kyc.index') }}">{{ __('KYC Submissions') }}</a></h5>
                <div class="mt-2 mt-md-0">
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group d-block" role="group">
                            <a href="{{ route('formbuilder::kyc.edit', ['form' => $form->id]) }}"
                                class="btn btn-primary btn-sm">
                                <i class="feather icon-edit"></i> {{ __('Edit KYC From') }}
                            </a>
                        </div>
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
