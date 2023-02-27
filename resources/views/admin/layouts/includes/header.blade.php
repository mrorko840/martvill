<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header header-background-color">
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        <a href="{{ route('dashboard') }}" class="b-brand text-decoration-none">
            <span class="b-title">{{ trimWords(preference('company_name'), 17) }}</span>
        </a>
    </div>
    <a class="mobile-menu text-decoration-none" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto d-flex flex-row flex-wrap float-left nav-menu ms-2">
            <li><a href="javascript:" class="full-screen text-decoration-none ps-2" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            <li class="nav-menu-home nav-parent">
                <a class="d-flex align-items-center hover_line text-decoration-none" href="{{ route('site.index') }}" target="_blank">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="#f00" class="external-link">
                            <path class="outer" fill-rule="evenodd" clip-rule="evenodd" d="M9.76378 0.251172C9.74165 0.254334 9.71944 0.257508 9.69716 0.260691L5.60205 0.845706C4.49632 1.00364 3.57928 1.13462 2.8568 1.33266C2.09566 1.5413 1.4357 1.85254 0.921633 2.44526C0.40757 3.03798 0.192799 3.73532 0.093895 4.51832C1.43051e-05 5.26155 3.8147e-05 6.18789 6.77109e-05 7.30485V12.6952C3.8147e-05 13.8121 1.43051e-05 14.7385 0.093895 15.4817C0.192799 16.2647 0.40757 16.962 0.921633 17.5547C1.4357 18.1475 2.09566 18.4587 2.8568 18.6673C3.57928 18.8654 4.49631 18.9964 5.60203 19.1543L9.76372 19.7488C10.7075 19.8837 11.5131 19.9988 12.1614 20C12.8516 20.0012 13.5304 19.8772 14.0994 19.3838C14.6683 18.8903 14.8871 18.2359 14.9835 17.5525C15.074 16.9105 15.074 16.0967 15.0739 15.1434L15.0739 14.7727H13.1897V15.0761C13.1897 16.1154 13.1875 16.7947 13.1177 17.2893C13.0517 17.7576 12.9456 17.8903 12.8648 17.9603C12.7841 18.0303 12.6377 18.1166 12.1648 18.1158C11.6653 18.1149 10.9925 18.021 9.96363 17.874L5.9287 17.2976C4.74742 17.1288 3.94915 17.013 3.35493 16.8501C2.7863 16.6943 2.52219 16.5244 2.34508 16.3202C2.16797 16.116 2.03716 15.8305 1.96327 15.2456C1.88605 14.6343 1.8843 13.8276 1.8843 12.6344V7.36563C1.8843 6.17236 1.88605 5.36574 1.96327 4.75445C2.03716 4.16949 2.16797 3.88401 2.34508 3.67981C2.52219 3.4756 2.7863 3.30573 3.35493 3.14985C3.94915 2.98697 4.74741 2.87116 5.92869 2.7024L9.96363 2.12598C10.9925 1.979 11.6653 1.88513 12.1648 1.88424C12.6377 1.88339 12.7841 1.96965 12.8648 2.03966C12.9456 2.10967 13.0517 2.24237 13.1177 2.71066C13.1875 3.20534 13.1897 3.88457 13.1897 4.92392V5.41372H15.0739V4.92392C15.0739 4.90141 15.0739 4.87898 15.0739 4.85663C15.074 3.90333 15.074 3.08951 14.9835 2.44754C14.8871 1.76412 14.6683 1.10967 14.0994 0.616213C13.5304 0.122757 12.8516 -0.0012301 12.1614 9.16871e-06C11.5131 0.00117325 10.7075 0.116306 9.76378 0.251172Z" fill="#888" />
                            <path class="inner" fill-rule="evenodd" clip-rule="evenodd" d="M8.6857 4.7002L10.157 5.87726L7.61309 9.05719H16.9583C17.4786 9.05719 17.9004 9.47899 17.9004 9.9993C17.9004 10.5196 17.4786 10.9414 16.9583 10.9414H7.61309L10.157 14.1213L8.6857 15.2984L4.44641 9.9993L8.6857 4.7002Z" fill="#2c2c2c" />
                        </svg>
                    </span>
                    <span class="ms-2 list-curent-color">{{ __('Visit Site') }}</span>
                </a>
            </li>
            <li class="ms-3 nav-parent">
                <a class="d-flex hover_line align-items-center text-decoration-none" href="{{ route('site.dashboard') }}" target="_blank">
                    <span>
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="external-link">
                            <path class="outer" fill-rule="evenodd" clip-rule="evenodd" d="M3.90036 3.04616C4.39908 3.00096 5.04698 3 6 3C6.55229 3 7 2.55229 7 2C7 1.44772 6.55229 1 6 1L5.95396 1C5.05849 0.999985 4.31952 0.999972 3.71983 1.05432C3.09615 1.11085 2.52564 1.23242 2 1.5359C1.39192 1.88697 0.886973 2.39192 0.535898 3C0.232418 3.52564 0.11085 4.09615 0.0543234 4.71983C-2.83718e-05 5.31953 -1.50204e-05 6.05851 2.38419e-07 6.95399V12.0705C-3.60012e-05 13.4247 -6.65188e-05 14.5413 0.118752 15.4251C0.243496 16.3529 0.515463 17.1723 1.17157 17.8284C1.82768 18.4845 2.64711 18.7565 3.57494 18.8812C4.4587 19.0001 5.57532 19 6.92946 19H12.046C12.9415 19 13.6805 19 14.2802 18.9457C14.9039 18.8892 15.4744 18.7676 16 18.4641C16.6081 18.113 17.113 17.6081 17.4641 17C17.7676 16.4744 17.8891 15.9039 17.9457 15.2802C18 14.6805 18 13.9415 18 13.046L18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13C16 13.953 15.999 14.6009 15.9538 15.0996C15.9099 15.5846 15.8305 15.8295 15.732 16C15.5565 16.304 15.304 16.5565 15 16.732C14.8295 16.8305 14.5846 16.9099 14.0996 16.9538C13.6009 16.999 12.953 17 12 17H7C5.55752 17 4.57625 16.9979 3.84143 16.8991C3.13538 16.8042 2.80836 16.6368 2.58579 16.4142C2.36322 16.1916 2.19584 15.8646 2.10092 15.1586C2.00212 14.4237 2 13.4425 2 12V7C2 6.04698 2.00096 5.39908 2.04616 4.90036C2.09011 4.41539 2.16951 4.17051 2.26795 4C2.44349 3.69596 2.69596 3.44349 3 3.26795C3.17051 3.16951 3.41539 3.09011 3.90036 3.04616Z" fill="#888" />
                            <path class="inner" fill-rule="evenodd" clip-rule="evenodd" d="M19 0H10V2H15.5858L7.2929 10.2929C6.90237 10.6834 6.90237 11.3166 7.2929 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L17 3.41421V9H19V0Z" fill="#2c2c2c" />
                        </svg>
                    </span>
                    <span class="ms-2 list-curent-color">{{ __('Customer Panel') }}</span>
                </a>
            </li>
            @if (auth()->user()->role()->slug == 'super-admin' || auth()->user()->role()->slug == 'vendor-admin')
                <li class="ms-lg-3 nav-parent">
                    <a class="d-flex align-items-center text-decoration-none hover_line" href="{{ route('vendor-dashboard') }}" target="_blank">
                        <span>
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="external-link">
                                <path class="outer" fill-rule="evenodd" clip-rule="evenodd" d="M3.90036 3.04616C4.39908 3.00096 5.04698 3 6 3C6.55229 3 7 2.55229 7 2C7 1.44772 6.55229 1 6 1L5.95396 1C5.05849 0.999985 4.31952 0.999972 3.71983 1.05432C3.09615 1.11085 2.52564 1.23242 2 1.5359C1.39192 1.88697 0.886973 2.39192 0.535898 3C0.232418 3.52564 0.11085 4.09615 0.0543234 4.71983C-2.83718e-05 5.31953 -1.50204e-05 6.05851 2.38419e-07 6.95399V12.0705C-3.60012e-05 13.4247 -6.65188e-05 14.5413 0.118752 15.4251C0.243496 16.3529 0.515463 17.1723 1.17157 17.8284C1.82768 18.4845 2.64711 18.7565 3.57494 18.8812C4.4587 19.0001 5.57532 19 6.92946 19H12.046C12.9415 19 13.6805 19 14.2802 18.9457C14.9039 18.8892 15.4744 18.7676 16 18.4641C16.6081 18.113 17.113 17.6081 17.4641 17C17.7676 16.4744 17.8891 15.9039 17.9457 15.2802C18 14.6805 18 13.9415 18 13.046L18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13C16 13.953 15.999 14.6009 15.9538 15.0996C15.9099 15.5846 15.8305 15.8295 15.732 16C15.5565 16.304 15.304 16.5565 15 16.732C14.8295 16.8305 14.5846 16.9099 14.0996 16.9538C13.6009 16.999 12.953 17 12 17H7C5.55752 17 4.57625 16.9979 3.84143 16.8991C3.13538 16.8042 2.80836 16.6368 2.58579 16.4142C2.36322 16.1916 2.19584 15.8646 2.10092 15.1586C2.00212 14.4237 2 13.4425 2 12V7C2 6.04698 2.00096 5.39908 2.04616 4.90036C2.09011 4.41539 2.16951 4.17051 2.26795 4C2.44349 3.69596 2.69596 3.44349 3 3.26795C3.17051 3.16951 3.41539 3.09011 3.90036 3.04616Z" fill="#888" />
                                <path class="inner" fill-rule="evenodd" clip-rule="evenodd" d="M19 0H10V2H15.5858L7.2929 10.2929C6.90237 10.6834 6.90237 11.3166 7.2929 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L17 3.41421V9H19V0Z" fill="#2c2c2c" />
                            </svg>
                        </span>
                        <span class="ms-2 list-curent-color">{{ __('Vendor Panel') }}</span>
                    </a>
                </li>
            @endif
        </ul>
        @php
            $flag = config('app.locale');
        @endphp
        <ul class="navbar-nav ms-lg-auto ms-2 nav-icon me-lg-2">
            @php
                $languages = \App\Models\Language::getAll()->where('status', 'Active');
            @endphp

            @if (in_array('App\Http\Controllers\DashboardController@switchLanguage', $prms) && $languages->isNotEmpty())
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle flag flag-icon-background flag-icon-{{ getSVGFlag($flag) }}" id="dropdown-flag" data-bs-toggle="dropdown" href="javascript:" ></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">{{ __('Select Language') }}</h6>
                            </div>
                            <ul class="noti-body scroll-noti">
                                @foreach ($languages as $language)
                                    <li class="notification">
                                        <div class="media lang d-flex" id="{{ $language->short_name }}" data-shortname="{{ $language->short_name }}">
                                            <img class="img-radius" src='{{ url("public/datta-able/fonts/flag/flags/4x3/" . getSVGFlag($language->short_name) . ".svg") }}' alt="{{ $language->flag }}">
                                            <div class="media-body">
                                                <p><span>{{ $language->name }}</span></p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endif
            <li class="me-2">
                <div class="dropdown drp-user">
                    <a href="javascript:void(0)" class="dropdown-toggle text-decoration-none" data-bs-toggle="dropdown">
                        <i class="icon feather icon-settings f-20"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{ Auth::user()->fileUrl() }}" class="img-radius" alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            @if (in_array('App\Http\Controllers\LoginController@logout', $prms))
                                <a href="{{ route('users.logout') }}" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            @endif
                        </div>
                        <ul class="pro-body">
                            <li><a href="{{ route('users.profile') }}" class="dropdown-item text-decoration-none"><i class="feather icon-user"></i> {{ __('Profile') }}</a></li>
                            <li><a href="{{ route('users.activity') . '?userId=' . \Auth::id() }}" class="dropdown-item text-decoration-none"><i class="feather icon-activity"></i> {{ __('Login Activities') }}</a></li>
                            @if (in_array('App\Http\Controllers\LoginController@logout', $prms))
                                <li><a href="{{ route('users.logout') }}" class="dropdown-item text-decoration-none"><i class="feather icon-lock"></i> {{ __('Sign Out') }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
