@extends('student.master')

@section('content')
    <style>
        .toggle-switch {
            width: 20px;
            height: 20px;
            appearance: none;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
            position: relative;
            cursor: not-allowed;
            transition: all 0.3s ease-in-out;
        }

        .toggle-switch:checked {
            background-color: #007bff;
            border-color: #0056b3;
        }

        .toggle-switch:checked::after {
            content: '✔';
            color: white;
            font-size: 14px;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
    </style>

    <div class="site-section courses-title py-5" id="courses-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center" data-aos="fade-up">
                    <h2 class="section-title fs-3 mt-4">Attendance of</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                    <tr>
                        <th>Week</th>
                        <th>Attendance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 1; $i <= 13; $i++)
                        @php
                            // البحث عن سجل الحضور للأسبوع الحالي
                            $attendanceRecord = $attendance->where('week_id', $i)->first();
                        @endphp
                        <tr>
                            <td>Week {{ $i }}</td>
                            <td>
                                <input type="checkbox" class="toggle-switch" disabled {{ $attendanceRecord ? 'checked' : '' }}>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
