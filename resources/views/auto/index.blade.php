@extends('template.base')

@section('title', 'Index Auto')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model Name</th>
                <th scope="col">Cubic Capacity</th>
                <th scope="col">Max Speed</th>
                <th scope="col">Pic</th>
                <th scope="col">Inserito il</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auto as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->model_name }}</a></td>
                    <td>{{ $car->cubic_capacity }}</td>
                    <td>{{ $car->max_speed }}</td>
                    <td><img src="{{ $car->pic }}" width="150" /></td>
                    <td>{{ $car->created_at }}</td>
                    <td>

                        <a href="{{ route('public.auto.show', ['auto' => $car]) }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>


                        @if(Auth::check())
                            <a href="{{ route('auto.edit', ['auto' => $car]) }}">
                                <button class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <form action="{{ route('auto.destroy', ['auto' => $car]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-meteor"></i>
                                </button>

                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
