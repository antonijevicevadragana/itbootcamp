<!-- @php
var_dump($data);
@endphp -->

@extends('layouts.app')  <!-- ukljucen layaouts-->
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('person.create') }}" class="btn btn-primary float-end">{{ __('Add') }}</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('People') }}</div>

                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Surname') }}</th>
                        <th scope="col">{{ __('Date of birth') }}</th>
                        <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $person) <!-- $data iz person controlers -->
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->surname }}</td>
                            <td>{{ $person->b_date }}</td>
                            
                            <td>
                                <a href="{{ route('person.edit', ['person'=>$person->id]) }}" class="btn btn-success btn-sm">{{ __('Edit') }}</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection