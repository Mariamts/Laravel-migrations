@extends('home-page')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Make</th>
            <th>Model</th>
            <th>License number</th>
            <th>Weight</th>
            <th>Registration year</th>
            <th>Car Age</th>
            <th>button</th>
        </thead>
        <tbody>
            <form action="{{ route('cars.save') }}" method="post">
                @csrf
                <tr>
                    <td></td>
                    <td><input type="text" name="name" class="form-control"></td>
                    <td><input type="text" name="make" class="form-control"></td>
                    <td><input type="text" name="model" class="form-control"></td>
                    <td><input type="text" name="license_number" class="form-control"></td>
                    <td><input type="text" name="weigth" class="form-control"></td>
                    <td><input type="text" name="registration_year" class="form-control"></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-danger">add</button></td>
                </tr>
            </form>
            <?php foreach ($cars as $car): ?>
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->license_number }}</td>
                <td>{{ $car->weigth }}</td>
                <td>{{ $car->registration_year }}</td>
                <td>{{ now()->year - $car->registration_year }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('cars.edit', ['id' => $car->id]) }}">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
@endsection