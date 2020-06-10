@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="border-bottom">
                            <h1>{{__('strings.moaid')}}&nbsp;{{ $appointment->id }}</h1>
                        </div>
                        <h4 class="pt-3 pb-2">{{ __('strings.user_details') }}</h4>
                        <ul class="list-unstyled marginalized-list">
                            <li>{{__('strings.name')}}:&nbsp;{{$appointment->user->name}}</li>
                            <li>{{__('strings.identity')}}:&nbsp;{{$appointment->user->identity}}</li>
                            <li>{{__('strings.nationality')}}:&nbsp;{{__('strings.' . $appointment->user->nationality)}}</li>
                            <li>{{__('strings.phone')}}:&nbsp;{{$appointment->user->phone}}</li>
                        </ul>
                        <h4 class="pt-3 pb-2">{{ __('strings.appointment_details') }}</h4>
                        <ul class="list-unstyled marginalized-list">
                            <li>{{__('strings.appointment_date')}}:&nbsp;{{$appointment->date}}</li>
                            <li>{{__('strings.appointment_time')}}:&nbsp;{{$appointment->time}}</li>
                            <li>{{__('strings.appointment_branch')}}:&nbsp;{{__('strings.' . $appointment->branch)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
