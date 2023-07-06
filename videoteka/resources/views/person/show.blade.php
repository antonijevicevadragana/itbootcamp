
@extends('layouts.app')

@section('content')





<div class="row">
  <div class="col-12 mb-3">
    <p class="mb-0">{{ __('Information')}}</p>
    <p><strong>Name: </strong> {{$person->name}}</p>
    <p><strong>Surname: </strong> {{$person->surname}}</p>
    <p><strong>Date of birth: </strong> {{$person->b_date}}</p>
  </div>
</div>


<div class="row">
  <div class="col-12 mb-3">
    <p class="mb-0">{{ __('Director')}}</p>
    <p class="text-muted">
       @foreach($person->directors->sortByDesc('NameYear') as $w)
       {{ $w->NameYear}}<br>
      @endforeach

    
    </p>
  </div>

  <div class="row">
    <div class="col-12 mb-3">
      <p class="mb-0">{{ __('Writer')}}</p>
      <p class="text-muted">
        @foreach($person->writers->sortByDesc('NameYear') as $w)
       {{$w->NameYear}}<br>
        @endforeach
      </p>
    </div>

    <div class="row">
      <div class="col-12 mb-3">
        <p class="mb-0">{{ __('Stars')}}</p>
        <p class="text-muted">
          @foreach($person->stars->sortByDesc('NameYear') as $w)
          {{ $w->NameYear}}<br>
          @endforeach
        </p>
      </div>


    </div>
  </div>
</div>


@endsection