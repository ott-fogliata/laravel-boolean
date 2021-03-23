@php

// edit.
// se la variabile edit è instanziata e piena (ovvero NON false)
if(isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $url = route('auto.update', compact('auto'));
} else {
    // create.
    $method = 'POST';
    $url = route('auto.store');
}

@endphp


<form action="{{ $url }}" method="post">

    @csrf
    @method($method)

    <div class="form-group">

        <label for="model_name">Model Name</label>
        <input class="form-control {{ $errors->has('model_name') ? 'is-invalid' : '' }}" type="text" name="model_name"
            placeholder="Model Name" value="{{ isset($auto) ? $auto->model_name : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('model_name') }}
        </div>
    </div>

    <div class="form-group">

        <label for="cubic_capacity">Cubic Capacity</label>
        <input class="form-control {{ $errors->has('cubic_capacity') ? 'is-invalid' : '' }}" type="text" name="cubic_capacity"
            placeholder="Cubic Capacity" value="{{ isset($auto) ? $auto->cubic_capacity : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('cubic_capacity') }}
        </div>
    </div>

    <div class="form-group">

        <label for="max_speed">Max Speed</label>
        <input class="form-control {{ $errors->has('max_speed') ? 'is-invalid' : '' }}" type="text" name="max_speed"
            placeholder="Max Speed" value="{{ isset($auto) ? $auto->max_speed : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('max_speed') }}
        </div>
    </div>

    <div class="form-group">

        <label for="pic">Pic</label>
        <input class="form-control {{ $errors->has('pic') ? 'is-invalid' : '' }}" type="text" name="pic"
            placeholder="PIC" value="{{ isset($auto) ? $auto->pic : ''}}">
        <div class="invalid-feedback">
            {{ $errors->first('pic') }}
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        Fatto
    </button>

</form>
