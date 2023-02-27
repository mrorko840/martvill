  <div class="card card-info shadow-none" id="nav">
    <div class="card-header p-t-20 border-bottom mb-2">
        @if (in_array('App\Http\Controllers\EmailConfigurationController@index', $prms))
            <h5>{{ __('Email Settings') }}</h5>
        @endif
    </div>
    <ul class="nav flex-column nav-pills" id="mcap-tab" role="tablist">
        @if (in_array('App\Http\Controllers\EmailConfigurationController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'email_setup' ? 'active' : ''}}" href="{{ route('emailConfigurations.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Setup') }}</a>
            </li>
        @endif

        @if (in_array('App\Http\Controllers\MailTemplateController@index', $prms))
            <li class="nav-item">
                <a class="nav-link h-lightblue text-left {{ isset($list_menu) &&  $list_menu == 'email_template' ? 'active' : ''}}" href="{{ route('emailTemplates.index') }}" id="s" role="tab" aria-controls="mcap-default" aria-selected="true">{{ __('Templates') }}</a>
            </li>
        @endif
    </ul>
  </div>
