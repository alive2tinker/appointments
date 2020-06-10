@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="border-bottom">
                    <h1>{{ __('strings.edit') }}&nbsp;{{__('strings.moaid')}}&nbsp; {{ $appointment->id }}</h1>
                </div>
                <div class="card shadow border-0">
                    <div class="card-body">
                        <form action="{{ route('appointments.update', $appointment->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group"><label for="branch">{{__('strings.branch')}}</label>
                                <select name="branch" id="branch" class="form-control">
                                    <option value="">{{__('strings.choose')}}</option>
                                    <option value="al quwaiiyah" @if(old('branch') === 'al quwaiiyah' || $appointment->branch === 'al quwaiiyah') selected @endif>{{__('strings.al quwaiiyah')}}</option>
                                    <option value="al-muzahmiya" @if(old('branch') === 'al-muzahmiya' || $appointment->branch === 'al-muzahmiya') selected @endif> {{__('strings.al-muzahmiya')}}</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="appointment-date">{{__('strings.appointment_date')}}</label>
                                    <input type="text" id="appointment-date" name="date" class="form-control" value="{{ $appointment->date }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="appointment-time">{{__('strings.appointment_time')}}</label>
                                    <select name="time" class="form-control" id="appointment-time">
                                        <option value="">{{__('strings.choose')}}</option>
                                        <option value="7:00" @if($appointment->time === "7:00:00") selected @endif>07:00</option>
                                        <option value="7:30" @if($appointment->time === "7:30:00") selected @endif>07:30</option>
                                        <option value="8:00" @if($appointment->time === "8:00:00") selected @endif>08:00</option>
                                        <option value="8:30" @if($appointment->time === "8:30:00") selected @endif>08:30</option>
                                        <option value="9:00" @if($appointment->time === "9:00:00") selected @endif>09:00</option>
                                        <option value="9:30" @if($appointment->time === "9:30:00") selected @endif>09:30</option>
                                        <option value="10:00" @if($appointment->time === "10:00:00") selected @endif>10:00</option>
                                        <option value="10:30" @if($appointment->time === "10:30:00") selected @endif>10:30</option>
                                        <option value="11:30" @if($appointment->time === "11:00:00") selected @endif>11:00</option>
                                        <option value="11:00" @if($appointment->time === "11:30:00") selected @endif>11:30</option>
                                        <option value="12:30" @if($appointment->time === "12:00:00") selected @endif>12:00</option>
                                        <option value="12:30" @if($appointment->time === "12:30:00") selected @endif>12:30</option>
                                        <option value="1:00" @if($appointment->time === "1:00:00") selected @endif>01:00</option>
                                        <option value="1:30" @if($appointment->time === "1:30:00") selected @endif>01:30</option>
                                        <option value="2:00" @if($appointment->time === "2:00:00") selected @endif>02:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mt-5">
                                <div class="col-md-5">
                                    <button class="btn btn-primary btn-block" type="submit">{{ __('strings.save_changes') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
        })
    </script>
@endsection
