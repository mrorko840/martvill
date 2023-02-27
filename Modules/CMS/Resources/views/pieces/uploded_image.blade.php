<div class="d-flex flex-wrap mt-2">
    @if (!empty($files))
        @foreach ($files as $file)
            <div class="position-relative border boder-1 p-1 mr-2 rounded mt-2">
                <div class="position-absolute rounded-circle text-center img-delete-icon"><i class="fa fa-times"></i>
                </div>
                <img class="upl-img" class="p-1"
                    src="{{ is_object($file) ? $file->fileUrlNew(['id' => $file->id]) : '' }}" alt="{{ __('Image') }}">
                <input type="hidden" name="file_id[]" value="{{ is_object($file) ? $file->id : $file }}">
                <div class="img-text pl-2">
                    {{ isset($file->params) && !empty($file->params['type']) ? $file->params['type'] : '' }}</div>
                <small
                    class="img-size pl-2">{{ isset($file->params) && !empty($file->params['size']) ? $file->params['size'] : '' }}
                    {{ __('kb') }}</small>
            </div>
        @endforeach
    @endif
</div>
