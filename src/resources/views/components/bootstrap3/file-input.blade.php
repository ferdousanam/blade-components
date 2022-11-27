<div class="form-group{{ $errors->has($inputName) ? ' has-error' : '' }}" id="{{ $fileId }}">
    <label>{{ $inputLabel }}</label>
    <input type="hidden" name="{{ $fileId }}_is_removed" id="{{ $fileId }}_is_removed" value="0" />
    <input type="file" class="form-control" id="{{ $fileId }}_file" name="{{ $inputName }}" {{ $multiple }} {{ $required }}>

    @error($inputName)
        <span class="help-block">{{ $message }}</span>
    @enderror

    <div id="{{ $fileId }}_file_upload_content" @if(!$filePath)style="display:none;"@endif>
        @if ( $filePath)
            <a target="_blank" href="{{ $filePath }}">{{ $filePath }}</a>
        @endif
        <a style="text-decoration: none;" class="badge label-danger" href="javascript:void(0);" onclick="spRemoveFile('{{ $fileId }}')" title="Delete">x</a>
    </div>
</div>
<script>
    function spRemoveFile(id) {
        document.getElementById(`${id}_is_removed`).value = 1;
        document.getElementById(`${id}_file`).value = null;
        document.getElementById(`${id}_file_upload_content`).style.display = 'none';
    }
</script>