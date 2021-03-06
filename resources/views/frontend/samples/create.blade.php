@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.sample.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.samples.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ trans('cruds.sample.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="details">{{ trans('cruds.sample.fields.details') }}</label>
                            <textarea class="form-control ckeditor" name="details" id="details">{!! old('details') !!}</textarea>
                            @if($errors->has('details'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('details') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.details_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="replicate_number">{{ trans('cruds.sample.fields.replicate_number') }}</label>
                            <input class="form-control" type="number" name="replicate_number" id="replicate_number" value="{{ old('replicate_number', '') }}" step="1">
                            @if($errors->has('replicate_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('replicate_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.replicate_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="project_id">{{ trans('cruds.sample.fields.project') }}</label>
                            <select class="form-control select2" name="project_id" id="project_id">
                                @foreach($projects as $id => $entry)
                                    <option value="{{ $id }}" {{ old('project_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('project'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('project') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.project_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="channels">{{ trans('cruds.sample.fields.channel') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="channels[]" id="channels" multiple>
                                @foreach($channels as $id => $channel)
                                    <option value="{{ $id }}" {{ in_array($id, old('channels', [])) ? 'selected' : '' }}>{{ $channel }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('channels'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('channels') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.channel_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="species_id">{{ trans('cruds.sample.fields.species') }}</label>
                            <select class="form-control select2" name="species_id" id="species_id">
                                @foreach($species as $id => $entry)
                                    <option value="{{ $id }}" {{ old('species_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('species'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('species') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.species_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tissue_id">{{ trans('cruds.sample.fields.tissue') }}</label>
                            <select class="form-control select2" name="tissue_id" id="tissue_id">
                                @foreach($tissues as $id => $entry)
                                    <option value="{{ $id }}" {{ old('tissue_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tissue'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tissue') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.tissue_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="sample_condition_id">{{ trans('cruds.sample.fields.sample_condition') }}</label>
                            <select class="form-control select2" name="sample_condition_id" id="sample_condition_id">
                                @foreach($sample_conditions as $id => $entry)
                                    <option value="{{ $id }}" {{ old('sample_condition_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('sample_condition'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sample_condition') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.sample.fields.sample_condition_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('frontend.samples.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $sample->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection