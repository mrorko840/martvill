<div id="add-tax-class" class="modal fade display_none" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Add :x', ['x' => __('Tax Class')]) }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('tax.store') }}" method="post" id="addTaxClass"
                  class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label require" for="name">{{ __('Name') }}</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control inputFieldDesign" name="name" placeholder="{{ __('Name') }}" id="name" required oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label require" for="slug">{{ __('Slug') }}</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control inputFieldDesign" name="slug" placeholder="{{ __('Slug') }}" id="slug" required oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                        </div>
                    </div>
                </div>
                <div class="modal-footer py-0">
                    <div class="form-group row">
                        <label for="btn_save" class="col-sm-3 control-label"></label>
                        <div class="col-sm-12">
                            <button type="submit"
                                class="btn py-2 custom-btn-submit float-right tax-class-submit">{{ __('Save') }}</button>
                            <button type="button" class="py-2 custom-btn-cancel float-right me-2"
                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
