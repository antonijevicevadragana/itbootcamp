<!-- @php
var_dump($data);
@endphp -->

@extends('layouts.app') <!-- ukljucen layaouts-->
@section('content')


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
                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration  }}</td>  <!-- redni broj-->
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->surname }}</td>
                    <td>{{ $person->b_date }}</td>

                    <td>
                        <!-- posto se brise podatak mora da ide kroz formu -->
                        <form method="POST" action="{{ route('person.destroy', ['person'=>$person->id]) }}">
                            @method('delete')
                            @csrf
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('person.edit', ['person'=>$person->id]) }}" class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                                <button type="sumbit" class="btn btn-sm btn-danger ">{{ __('Delete') }}</button>
                                <a href="{{ route('person.show', ['person'=>$person->id]) }}" class="btn btn-primary btn-sm">{{ __('Show') }}</a>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
       {{ $data->links() }}  <!-- link za paginaciju -->
    </div>
</div>


@endsection