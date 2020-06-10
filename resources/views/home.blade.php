@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="border-bottom d-flex justify-content-between my-4">
                <h1>{{__('strings.appointments')}}</h1>
                <button class="btn btn-primary h-25 my-1" data-toggle="modal" data-target="#new-appointment-modal">{{__('strings.new_appointment')}}</button>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="new-appointment-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{__('strings.new_appointment')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('appointments.store') }}" method="post" id="new-appointment-form">
                                @csrf
                                <div class="form-group"><label for="branch">{{__('strings.branch')}}</label>
                                    <select name="branch" id="branch" class="form-control">
                                        <option value="">{{__('strings.choose')}}</option>
                                        <option value="al quwaiiyah" @if(old('branch') === 'al quwaiiyah') selected @endif>{{__('strings.al quwaiiyah')}}</option>
                                        <option value="al-muzahmiya" @if(old('branch') === 'al-muzahmiya') selected @endif> {{__('strings.al-muzahmiya')}}</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="appointment-date">{{__('strings.appointment_date')}}</label>
                                        <input type="text" id="appointment-date" name="date" class="form-control" value="{{old('date')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="appointment-time">{{__('strings.appointment_time')}}</label>
                                        <select name="time" class="form-control" id="appointment-time">
                                            <option value="">{{__('strings.choose')}}</option>
                                            <option value="07:00" @if(old('time') === "7:00") selected @endif>07:00</option>
                                            <option value="07:30" @if(old('time') === "7:30") selected @endif>07:30</option>
                                            <option value="08:00" @if(old('time') === "8:00") selected @endif>08:00</option>
                                            <option value="08:30" @if(old('time') === "8:30") selected @endif>08:30</option>
                                            <option value="09:00" @if(old('time') === "9:00") selected @endif>09:00</option>
                                            <option value="09:30" @if(old('time') === "9:30") selected @endif>09:30</option>
                                            <option value="10:00" @if(old('time') === "10:00") selected @endif>10:00</option>
                                            <option value="10:30" @if(old('time') === "10:30") selected @endif>10:30</option>
                                            <option value="11:30" @if(old('time') === "11:00") selected @endif>11:00</option>
                                            <option value="11:00" @if(old('time') === "11:30") selected @endif>11:30</option>
                                            <option value="12:30" @if(old('time') === "12:00") selected @endif>12:00</option>
                                            <option value="12:30" @if(old('time') === "12:30") selected @endif>12:30</option>
                                            <option value="01:00" @if(old('time') === "1:00") selected @endif>01:00</option>
                                            <option value="01:30" @if(old('time') === "1:30") selected @endif>01:30</option>
                                            <option value="02:00" @if(old('time') === "2:00") selected @endif>02:00</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('strings.close')}}</button>
                            <button type="button" id="new-appointment-form-submit" class="btn btn-primary">{{__('strings.save_changes')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group">
                @forelse($appointments as $appointment)
                    <a href="{{ route('appointments.show', $appointment->id) }}" class="list-group-item list-group-item-action shadow border-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ __('strings.moaid') }}&nbsp;{{$appointment->id}}</h5>
                            <small>{{ $appointment->created_at->format('Y-m-d') }}</small>
                        </div>
                        <small>{{ __('strings.show_details') }}</small>
                    </a>
                @empty
                    <div class="list-group-item list-group-item-action py-4 shadow border-0">
                        <h4 class="text-center">{{ __('strings.no_appointments') }}</h4>
                    </div>
                @endforelse
            </div>

        </div>
        <div class="col-md-8">
            {{ $appointments->links() }}
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $( "#appointment-date" ).datepicker({
                beforeShowDay: noMondays,
                dateFormat: 'y-m-d'
            });
            function noMondays(date){
                if (date.getDay() === 5 || date.getDay() === 6)
                    return [ false, "مغلق", "مغلق ايام الجمعة والسبت" ]
                else
                    return [ true, "", "" ]
            }

            $("#new-appointment-form-submit").click(function(){
                $("#new-appointment-form").submit();
            })
        })
    </script>
@endsection
