@extends('layouts.layout')
@section('content')
<form action="{{ route('municipio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="pais">{{ trans('global.municipio.fields.pais') }}</label>
        <select name="pais_id" id="pais" class="form-control">
            @foreach($paises as $id => $pais)
                <option value="{{ $id }}">
                    {{ $pais }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group {{ $errors->has('estado_id') ? 'has-error' : '' }}">
        <label for="estado">{{ trans('global.municipio.fields.estado') }}</label>
        <select name="estado_id" id="estado" class="form-control">
            <option value="">{{ trans('global.pleaseSelect') }}</option>
        </select>
        @if($errors->has('estado_id'))
            <p class="help-block">
                {{ $errors->first('estado_id') }}
            </p>
        @endif
    </div>

@section('scripts')
    <script type="text/javascript">
        $("#pais").change(function(){
            $.ajax({
                url: "{{ route('create_by_pais') }}?pais_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#estado').html(data.html);
                }
            });
        });
    </script>
@endsection
    @endsection