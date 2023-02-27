@extends('admin.layouts.app')
@section('page_title', __('SSO Service'))
@section('content')
    <!-- Main content -->
    <div class="col-sm-12" id="sso-settings-container">
        <div class="card">
            <div class="card-body row">
                <div class="col-lg-3 col-12 z-index-10 pe-0 ps-0 ps-md-3">
                    @include('admin.layouts.includes.account_settings_menu')
                </div>
                <div class="col-lg-9 col-12 ps-0">
                    <div class="card card-info shadow-none mb-0">
                        @if(session('errorMgs'))
                            <div class="alert alert-warning fade in alert-dismissable">
                                <strong>{{ __('Warning') }}!</strong> {{ session('errorMgs') }}. <a class="close" href="#" data-dismiss="alert" aria-label="close" title="close">×</a>
                            </div>
                        @endif
                        <span id="smtp_head">
                            <div class="card-header p-t-20 border-bottom">
                                <h5>{{ __('SSO Service') }}</h5>
                            </div>
                        </span>
                        <div class="card-body">
                            <form action="{{ route('sso.index') }}" method="post" id="myform1" class="form-horizontal">
                                @csrf
                                @php
                                $requiredData = !empty($preference) ? json_decode($preference) : [];
                                 $msg = __('This field is required.');
                                @endphp
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div id="#headingOne">
                                            <h5 class="text-btn">{{ __('Google') }}</h5>
                                        </div>
                                        <div class="mr-3">
                                            <div class="switch switch-bg d-inline">
                                                <input type="checkbox" name="sso_service[]" id="sso_google" value="Google" {{ !empty(preference('sso_service')) && in_array('Google', json_decode(preference('sso_service'))) ? 'checked' : '' }}>
                                                <label for="sso_google" class="cr top-2p"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label align-left {{ in_array("Google", $requiredData) ? 'require' : '' }}">{{ __('Client ID') }}</label>

                                        <div class="col-sm-8">
                                            @if(in_array("Google", $requiredData))
                                            <input type="text" value="{{ env('GOOGLE_CLIENT_ID') }}" class="form-control removeSpace inputFieldDesign" name="data[google][client_id]" required oninvalid="this.setCustomValidity($msg)">
                                            @else
                                                <input type="text" value="{{ env('GOOGLE_CLIENT_ID') }}" class="form-control removeSpace inputFieldDesign" name="data[google][client_id]">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label align-left {{ in_array("Google", $requiredData) ? 'require' : '' }}">{{ __('Client Secret') }}</label>

                                        <div class="col-sm-8">
                                            @if(in_array("Google", $requiredData))
                                            <input type="text" value="{{ env('GOOGLE_CLIENT_SECRET') }}" class="form-control removeSpace inputFieldDesign" name="data[google][client_secret]" required oninvalid="this.setCustomValidity($msg)">
                                            @else
                                                <input type="text" value="{{ env('GOOGLE_CLIENT_SECRET') }}" class="form-control removeSpace" inputFieldDesign name="data[google][client_secret]">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mt-37p">
                                        <div id="#headingOne">
                                            <h5 class="text-btn">{{ __('Facebook') }}</h5>
                                        </div>
                                        <div class="mr-3">
                                            <div class="switch switch-bg d-inline">
                                                <input type="checkbox" name="sso_service[]" id="sso_facebook" value="Facebook" {{ !empty(preference('sso_service')) && in_array('Facebook', json_decode(preference('sso_service'))) ? 'checked' : '' }}>
                                                <label for="sso_facebook" class="cr top-2p"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-2">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label align-left {{ in_array("Facebook", $requiredData) ? 'require' : '' }}">{{ __('Client ID') }}</label>

                                        <div class="col-sm-8">
                                            @if(in_array("Facebook", $requiredData))
                                                <input type="text" value="{{ env('FACEBOOK_CLIENT_ID') }}" class="form-control removeSpace inputFieldDesign" name="data[facebook][client_id]" required oninvalid="this.setCustomValidity($msg)">
                                            @else
                                            <input type="text" value="{{ env('FACEBOOK_CLIENT_ID') }}" class="form-control removeSpace inputFieldDesign" name="data[facebook][client_id]">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label align-left {{ in_array("Facebook", $requiredData) ? 'require' : '' }}">{{ __('Client Secret') }}</label>

                                        <div class="col-sm-8">
                                            @if(in_array("Facebook", $requiredData))
                                                <input type="text" value="{{ env('FACEBOOK_CLIENT_SECRET') }}" class="form-control removeSpace inputFieldDesign" name="data[facebook][client_secret]" required oninvalid="this.setCustomValidity($msg)">
                                            @else
                                            <input type="text" value="{{ env('FACEBOOK_CLIENT_SECRET') }}" class="form-control removeSpace inputFieldDesign" name="data[facebook][client_secret]">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer p-0">
                                    <div class="form-group row">
                                        <label for="btn_save" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn form-submit custom-btn-submit float-right" id="footer-btn">
                                                {{ __('Save') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/settings.min.js') }}"></script>
@endsection
