@extends('admin.layouts.app')
@section('page_title', __('Menus'))
@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/MenuBuilder/Resources/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Modules/MenuBuilder/Resources/assets/css/fontawesome-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/menu-builder.min.css') }}">
@endsection
@section('content')
<!-- Main content -->
<div class="col-sm-12 list-container" id="package-list-container">
    <?php
        $currentUrl = url()->current();
    ?>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <div id="hwpwrap">
        <div class="custom-wp-admin wp-admin wp-core-ui js menu-max-depth-0 nav-menus-php auto-fold admin-bar">
            <div id="wpwrap">
                <div id="wpcontent">
                    <div id="wpbody pt-0">
                        <div id="wpbody-content">
                            <div class="wrap">
                                <div class="manage-menus">
                                    <form method="get" id="menu-from" action="{{ $currentUrl }}">
                                        <label for="menu" class="selected-menu">{{ __('Select the menu title you want to edit') }}</label>
                                        <select name="menu">
                                            @foreach ($menulist as $role)
                                            <option {{ $menuId==$role->id ? 'selected' : '' }} value="{{ $role->id }}">
                                                {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="submit-btn">
                                            <input type="submit" class="button-secondary form-submit" value="Choose">
                                        </span>
                                        <span class="add-new-menu-action"></span>
                                    </form>
                                </div>
                                <div id="nav-menus-frame">
                                    @if(request()->has('menu') && !empty(request()->input("menu")))
                                    <div id="menu-settings-column" class="metabox-holder">
                                        <div class="clear"></div>
                                        <form id="nav-menu-meta" class="nav-menu-meta" method="post"
                                            enctype="multipart/form-data">
                                            <div id="side-sortables" class="accordion-container">
                                                <ul class="outer-border">
                                                    <li class="control-section accordion-section open add-page"
                                                        id="add-page">
                                                        <h3 class="accordion-section-title hndle" tabindex="0">{{ __('Custom Link') }} <span class="screen-reader-text">{{ __('Press return or enterto expand') }}</span></h3>
                                                        <div class="accordion-section-content">
                                                            <div class="inside">
                                                                <div class="customlinkdiv" id="customlinkdiv">
                                                                    <p id="menu-item-url-wrap">
                                                                        <label class="howto" for="custom-menu-item-url">
                                                                            <span>{{ __('URL')}}</span>
                                                                            <input id="custom-menu-item-url" name="url"
                                                                                type="text" class="menu-item-textbox ms-3"
                                                                                placeholder="url">
                                                                        </label>
                                                                    </p>
                                                                    <p id="menu-item-name-wrap">
                                                                        <label class="howto"
                                                                            for="custom-menu-item-name">
                                                                            <span>{{ __('Label') }}</span><span class="text-danger pe-2">*</span>
                                                                            <input id="custom-menu-item-name"
                                                                                name="label" type="text"
                                                                                class="regular-text menu-item-textbox input-with-default-title"
                                                                                title="{{ __('Label name') }}">
                                                                        </label>
                                                                    </p>
                                                                    <p class="button-controls">
                                                                        <a href="#" onclick="addcustommenuToDb()"
                                                                            class="btn btn-primary custom-btn-small submit-add-to-menu right">{{ __('Add menu item') }}
                                                                        </a>
                                                                        <span class="spinner" id="spincustomu"></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                        <div id="side-sortables" class="accordion-container">
                                            <ul class="outer-border menu ui-sortable">
                                                <li class="control-section accordion-section open add-page"
                                                    id="add-page">
                                                    <h3 class="accordion-section-title hndle" tabindex="0"> {{
                                                        isset($menuName) && !empty($menuName->name) ?
                                                        ucfirst($menuName->name) : ''}}
                                                        <span
                                                            class="screen-reader-text">{{ __('Press return or enter to expand') }}
                                                        </span>
                                                    </h3>
                                                    @if(!empty($adminMenus) && $adminMenus->count() > 0)
                                                    <div class="accordion-section-content">
                                                        <div class="inside">
                                                            @foreach ($adminMenus as $key => $value)
                                                            @if($value->getModuleName($value->permission))
                                                            <div class="customlinkdiv customlinkDropdown" id="customlinkdiv">
                                                                <input type="checkbox" class="menu"
                                                                    id="{{ $value->slug }}" name="menu[]"
                                                                    data-name="{{ $value->slug }}"
                                                                    data-url="{{ $value->url }}"
                                                                    data-permission="{{ $value->permission }}"
                                                                    data-delete="{{ $value->is_default }}"
                                                                    value="{{ $value->id }}">
                                                                    <label for="{{ $value->slug }}"> {{ $value->name }}</label>
                                                                    <br>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            <p class="button-controls">
                                                                <a href="#" onclick="addcustommenu()"
                                                                    class="btn btn-primary custom-btn-small submit-add-to-menu right">{{ __('Add menu item') }}
                                                                </a>
                                                                <span class="spinner" id="customMenuSpinner"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @elseif (!empty($pages) && $pages->count() > 0)
                                                    <div class="accordion-section-content">
                                                        <div class="inside">
                                                            @foreach ($pages as $key => $page)
                                                            <div class="customlinkdiv d-flex mb-2 align-items-center" id="customlinkdiv">
                                                                <input type="checkbox" class="menu m-0 me-2"
                                                                    id="{{ $page->name }}" name="menu[]"
                                                                    data-name="{{ $page->name }}"
                                                                    data-url="{{ $page->slug }}"
                                                                    data-permission=""
                                                                    data-delete="1"
                                                                    value="{{ $page->id }}">
                                                                <label class="mb-0" for="{{ $page->name }}"> {{ $page->name }}</label>
                                                                <br>
                                                            </div>
                                                            @endforeach
                                                            <p class="button-controls">
                                                                <a href="#" onclick="addcustommenu()"
                                                                    class="btn btn-primary custom-btn-small submit-add-to-menu right">{{ __('Add menu item') }}
                                                                </a>
                                                                <span class="spinner" id="customMenuSpinner"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    <div id="menu-management-liquid">
                                        <div id="menu-management">
                                            <form id="update-nav-menu" method="post"
                                                enctype="multipart/form-data">
                                                <div class="menu-edit ">
                                                    <div id="nav-menu-header">
                                                        <div class="major-publishing-actions">
                                                            <label class="menu-name-label howto open-label"
                                                                for="menu-name"> <span>{{ __('Name') }}</span>
                                                                <input name="menu-name" id="menu-name" type="text"
                                                                    class="menu-name regular-text menu-item-textbox"
                                                                    title="Enter menu name"
                                                                    value="@if(isset($menuName)){{$menuName->name }}@endif">
                                                                <input type="hidden" id="idmenu"
                                                                    value="@if(isset($indmenu)){{$indmenu->id }}@endif" />
                                                            </label>
                                                            @if(request()->has('action'))
                                                            <div class="publishing-action">
                                                                <a onclick="createnewmenu()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Create Title') }}
                                                                </a>
                                                            </div>
                                                            @elseif(request()->has("menu"))
                                                            <div class="publishing-action">
                                                                <a onclick="getmenus1()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Save menu') }}
                                                                </a>
                                                                <span class="spinner spincustomu2"></span>
                                                            </div>
                                                            @else
                                                            <div class="publishing-action">
                                                                <a onclick="createnewmenu()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Create Title') }}
                                                                </a>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="post-body">
                                                        <div id="post-body-content">
                                                            @if(request()->has("menu"))
                                                            <h3>{{ __('Menu Structure') }}</h3>
                                                            <div class="drag-instructions post-body-plain">
                                                                <p>{{ __('Place each item in the order you prefer. Click on the arrow to the right of the item to display more configuration options') }}</p>
                                                            </div>
                                                            @else
                                                            <h3>{{ __('Menu Creation') }}</h3>
                                                            <div class="drag-instructions post-body-plain">
                                                                <p>
                                                                    {{ __('Please enter the name and select Create menu button') }}
                                                                </p>
                                                            </div>
                                                            @endif
                                                            <ul class="menu ui-sortable" id="menu-to-edit">
                                                                @if(isset($menus))
                                                                @foreach ($menus as $m)
                                                                @if($m->getModuleName())
                                                                <li id="menu-item-{{ $m->id }}"
                                                                    class="menu-item display-list-item menu-item-depth-{{ $m->depth }} menu-item-page menu-item-edit-inactive pending list-item" id="{{ $m->id }}" data-val="{{ $m->depth }}">
                                                                    <dl class="menu-item-bar" id="{{ $m->id }}">
                                                                        <dt class="menu-item-handle">
                                                                            <span class="item-title"><i class="feather feather icon-move"></i> <span class="menu-item-title"> <span
                                                                                        id="menutitletemp_{{ $m->id }}">{{ $m->label }}</span>
                                                                                    <span class="color-transparent">|{{ $m->id }}|</span>
                                                                                </span> <span class="is-submenu"
                                                                                    style="@if($m->depth==0)display: none;@endif">{{ __('Subelement') }}
                                                                                </span>
                                                                            </span>
                                                                            <span class="item-controls"> <span
                                                                                    class="item-type">{{ __('Link') }}</span> <span
                                                                                    class="item-order hide-if-js">
                                                                                    <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{ $m->id }}&_wpnonce=8b3eb7ac44"
                                                                                        class="item-move-up"><abbr
                                                                                            title="Move Up">↑</abbr>
                                                                                    </a>
                                                                                    | <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{ $m->id }}&_wpnonce=8b3eb7ac44"
                                                                                        class="item-move-down"><abbr
                                                                                            title="Move Down">↓</abbr>
                                                                                        </a>
                                                                                </span>
                                                                                <a class="item-edit"
                                                                                    id="edit-{{ $m->id }}"
                                                                                    href="{{ $currentUrl }}?edit-menu-item={{ $m->id }}#menu-item-settings-{{ $m->id }}">
                                                                                </a>
                                                                            </span>
                                                                        </dt>
                                                                    </dl>
                                                                    <div class="menu-item-settings"
                                                                        id="menu-item-settings-{{ $m->id }}">
                                                                        <input type="hidden" class="edit-menu-item-id"
                                                                            name="menuid_{{ $m->id }}"
                                                                            value="{{ $m->id }}" />
                                                                        <input type="hidden" class="edit-menu-depth"
                                                                            id="depthlabelmenu_{{ $m->id }}"
                                                                            name="depth_{{ $m->id }}"
                                                                            value="{{ $m->depth }}" />
                                                                        <p class="description description-thin">
                                                                            <label
                                                                                for="edit-menu-item-title-{{ $m->id }}">
                                                                                {{ __('Label') }}
                                                                                <br>
                                                                                <input type="text"
                                                                                    id="idlabelmenu_{{ $m->id }}"
                                                                                    class="widefat edit-menu-item-title custom-input-field"
                                                                                    name="idlabelmenu_{{ $m->id }}"
                                                                                    value="{{ $m->label }}">
                                                                            </label>
                                                                        </p>
                                                                        <p class="field-css-classes description description-thin">
                                                                            <label
                                                                                for="edit-menu-item-classes-{{ $m->id }}">
                                                                                {{ __('Class CSS (optional)') }}
                                                                                <br>
                                                                                <input type="text"
                                                                                    id="clases_menu_{{ $m->id }}"
                                                                                    class="widefat edit-menu-item-classes custom-input-field"
                                                                                    name="clases_menu_{{ $m->id }}"
                                                                                    value="{{ $m->class }}">
                                                                            </label>
                                                                        </p>

                                                                        <p class="field-css-classes description description-thin">
                                                                            <label for="edit-menu-item-icon-{{ $m->id }}">
                                                                                {{ __('Icon (optional)') }}
                                                                                <br>
                                                                                <input type="text"
                                                                                    id="clases_icon_{{ $m->id }}"
                                                                                    class="form-control icp icp-auto iconpicker-component iconpicker-input edit-menu-item-icon custom-input-field"
                                                                                    name="icon_menu_{{ $m->id }}" id="{{ $m->id }}"
                                                                                    value="{{ $m->icon }}">
                                                                            </label>
                                                                        </p>
                                                                        <p class="field-css-url description description-wide">
                                                                            <label for="edit-menu-item-url-{{ $m->id }}">
                                                                               {{ __('URL') }}
                                                                                <br>
                                                                                <input type="text"
                                                                                    id="url_menu_{{ $m->id }}"
                                                                                    class="widefat edit-menu-item-url custom-input-field"
                                                                                    id="url_menu_{{ $m->id }}"
                                                                                    value="{{ $m->link }}">
                                                                            </label>
                                                                        </p>
                                                                        <p class="field-css-classes description description-thin">
                                                                            <label
                                                                                for="edit-menu-item-attribute-{{ $m->id }}">
                                                                                {{ __('Permission (optional)') }}
                                                                                <?php
                                                                                $jsonDecode = isset($m->params) && !empty($m->params) ? json_decode(json_encode($m->params),true) : '';
                                                                                $perm = '';
                                                                                $fullArray = '';
                                                                               if ($jsonDecode) {
                                                                                   $fullArray = json_encode($m->params);
                                                                                   $perm = $jsonDecode['permission'];
                                                                               }
                                                                                ?>
                                                                                <br>
                                                                                <input type="text"
                                                                                    id="attribute_menu_{{ $m->id }}"
                                                                                    class="widefat custom-input-field"
                                                                                    name="attribute_menu_{{ $m->id }}"
                                                                                    value="{{ $perm }}" readonly>
                                                                                <input type="hidden"
                                                                                    id="attribute_menu_{{ $m->id }}"
                                                                                    class="widefat code edit-menu-item-attribute"
                                                                                    name="attribute_menu_{{ $m->id }}"
                                                                                    value="{{ $fullArray }}" readonly>
                                                                            </label>
                                                                        </p>
                                                                        <div
                                                                            class="menu-item-actions description-wide submitbox">
                                                                            <a onclick="deleteitem({{ $m->id }})"
                                                                                class="item-delete submitdelete text-danger deletion delete-{{ $m->id }}"
                                                                                id="{{ $m->id }}" href="#">{{ __('Delete') }}
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="menu-item-transport"></ul>
                                                                </li>
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                            </ul>
                                                            <div class="menu-settings">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="nav-menu-footer">
                                                        <div class="major-publishing-actions">
                                                            @if(request()->has('action'))
                                                            <div class="publishing-action">
                                                                <a onclick="createnewmenu()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Create menu') }}
                                                                </a>
                                                            </div>
                                                            @elseif(request()->has("menu"))
                                                            @if(!$adminMenus->isEmpty())
                                                            <span class="delete-action">
                                                                <a
                                                                    class="submitdelete deletion text-danger menu-delete"
                                                                    class="submitdelete deletion text-danger menu-delete"
                                                                    onclick="deletemenu()"
                                                                    href="javascript:void(9)">{{ __('Delete All Menu') }}
                                                                </a>
                                                            </span>
                                                            @endif
                                                            <div class="publishing-action">
                                                                <a onclick="getmenus1()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Save menu') }}
                                                                </a>
                                                                <span class="spinner spincustomu2"></span>
                                                            </div>
                                                            @else
                                                            <div class="publishing-action">
                                                                <a onclick="createnewmenu()" name="save_menu"
                                                                    id="save_menu_header"
                                                                    class="btn btn-primary custom-btn-small menu-save">{{ __('Create menu') }}
                                                                </a>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    var menus = {
		"oneThemeLocationNoMenus" : "",
		"moveUp" : "Move up",
		"moveDown" : "Mover down",
		"moveToTop" : "Move top",
		"moveUnder" : "Move under of %s",
		"moveOutFrom" : "Out from under  %s",
		"under" : "Under %s",
		"outFrom" : "Out from %s",
		"menuFocus" : "%1$s. Element menu %2$d of %3$d.",
		"subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
	};
	var arraydata = [];
	var addCustomMenu= '{{ route("menu.custom") }}';
	var updateProduct = '{{ route("menu.update")}}';
	var generateMenuControl = '{{ route("menu.control") }}';
	var deleteItemMenu = '{{ route("menu.item.delete") }}';
	var deleteMenu = '{{ route("menu.delete") }}';
	var createNewMenu = '{{ route("menu.create") }}';
	var updateItem = '{{ route("menu.update") }}';
	var csrftoken="{{ csrf_token() }}";
	var menuwr = "{{ url()->current() }}";
    var menuId = new URL(window.location.href).searchParams.get("menu");
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});
</script>
<script src="{{ asset('public/datta-able/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('Modules/MenuBuilder/Resources/assets/js/scripts.min.js') }}"></script>
<script src="{{ asset('Modules/MenuBuilder/Resources/assets/js/scripts2.min.js') }}"></script>
<script src="{{ asset('Modules/MenuBuilder/Resources/assets/js/menu.min.js') }}"></script>
<script src="{{ asset('Modules/MenuBuilder/Resources/assets/js/fontawesome-iconpicker.min.js') }}"></script>
@endsection
