@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="border-bottom d-flex justify-content-between my-4">
            <h1>{{__('strings.appointments')}}</h1>
        </div>
        <div class="card shadow border-0">
            <div class="card-body">
                <table id="appointments-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('strings.name') }}</th>
                        <th>{{ __('strings.identity') }}</th>
                        <th>{{ __('strings.nationality') }}</th>
                        <th>{{ __('strings.appointment_date') }}</th>
                        <th>{{ __('strings.appointment_time') }}</th>
                        <th>{{ __('strings.appointment_branch') }}</th>
                        <th>{{ __('strings.edit') }}</th>
                        <th>{{ __('strings.delete') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->id }}</td>
                                <td>{{ $appointment->user->name }}</td>
                                <td>{{ $appointment->user->identity }}</td>
                                <td>{{ __('strings.' . $appointment->user->nationality) }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ __('strings.' . $appointment->branch) }}</td>
                                <td>
                                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-link">{{ __('strings.edit') }}</a>
                                </td>
                                <td>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">{{ __('strings.delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#appointments-table').DataTable({
                language: {
                    search: "البحث:   ",
                    paginate: {
                        first:      "الاول",
                        previous:   "السابق",
                        next:       "التالي",
                        last:       "الاخير"
                    },
                    lengthMenu:    "عرض _MENU_ مواعيد",
                    info: "عرض من _START_ الى _END_ من اصل _TOTAL_ ",
                    infoEmpty: "عرض من 0 الى 0 من اصل 0",
                    emptyTable: 'لايوجد مواعيد للعرض'
                }
            });
        } );
    </script>
@endsection
