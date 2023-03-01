@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.percentage.title') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.percentage.check") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="input_1">Input 1*</label>
                <input type="text" id="input_1" name="input_1" class="form-control" value="{{ old('input_1', isset($percentage) ? $percentage->input_1 : '') }}" required>
                @if($errors->has('input_1'))
                    <em class="invalid-feedback">
                        {{ $errors->first('input_1') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.institution.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="input_2">Input 2*</label>
                <input type="text" id="input_2" name="input_2" class="form-control" value="{{ old('input_2', isset($percentage) ? $percentage->input_2 : '') }}" required>
                @if($errors->has('input_2'))
                    <em class="invalid-feedback">
                        {{ $errors->first('input_2') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.institution.fields.name_helper') }}
                </p>
            </div>

            @if(!empty($result) && !empty($percent))
            <div class="alert alert-success" role="alert">Result : {{ $result }} ({{ $percent }})</div>
            @endif

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.send') }}">
            </div>
        </form>


    </div>
</div>
@endsection