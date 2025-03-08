@extends('student.master')
@section('content')
    <style>
        .toggle-switch {
            width: 40px;
            height: 20px;
            cursor: not-allowed;
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
                    <!-- Loop through weeks -->
                    <script>
                        for (let i = 1; i <= 13; i++) {
                            document.write(`
                                <tr>
                                    <td>Week ${i}</td>
                                    <td>
                                        <input type="checkbox" class="toggle-switch" disabled>
                                    </td>
                                </tr>
                            `);
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
