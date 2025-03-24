@extends('dashboard.master')

@section('content')
    <title>Live Video Feed & Attendance Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
        }

        .video-container, .attendance-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 22px;
            margin-bottom: 15px;
        }

        #videoFeed {
            width: 100%;
            border-radius: 8px;
            display: none;
            border: 2px solid #007bff;
        }

        .controls {
            display: flex;
            gap: 15px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .controls input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 150px;
            text-align: center;
        }

        .controls button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .controls button:hover {
            background: #0056b3;
        }

        .controls button:active {
            background: #004080;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background: #007bff;
            color: white;
            text-transform: uppercase;
        }

        tbody tr:hover {
            background: #f1f1f1;
        }
    </style>

    <div class="container">
        <div class="video-container">
            <h1>Live Video Feed</h1>
            <img id="videoFeed" src="" alt="Live Video Feed">
        </div>

        <div class="controls">
            <input type="hidden" id="courseId" name="course_id" value="{{ $course->course_id }}">
            <button id="startButton">Start</button>
            <a href="{{route('instructor.subject.attendance', $course->course_id ?? 0)}}">
                <button id="stopButton">Stop & Save</button>
            </a>
            <button id="refreshAttendance">Refresh Attendance</button>

            <select id="weekSelect" name="week"
                    style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="">Select Week</option>
                @foreach($weeks as $week)
                    <option value="{{ $week->id }}">{{ $week->week_number }}</option>
                @endforeach
            </select>
        </div>

        <div class="attendance-container">
            <h1>Attendance Records</h1>
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody id="attendanceTable">
                <tr>
                    <td colspan="2">Click "Refresh Attendance" to load data</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const videoFeed = document.getElementById('videoFeed');
        const startButton = document.getElementById('startButton');
        const stopButton = document.getElementById('stopButton');
        const refreshButton = document.getElementById('refreshAttendance');
        const courseIdInput = document.getElementById('courseId');
        const weekSelect = document.getElementById('weekSelect');
        const tableBody = document.getElementById("attendanceTable");

        // Start camera
        startButton.addEventListener('click', () => {
            const courseId = courseIdInput.value.trim();
            const weekId = weekSelect.value;

            // تحقق من أن الأسبوع تم اختياره
            if (!courseId) {
                alert("Please enter a Course ID before starting.");
                return;
            }

            if (!weekId) {
                alert("Please select a Week before starting.");
                return;
            }

            videoFeed.src = "http://localhost:5000/video_feed?course_id=" + courseId;
            videoFeed.style.display = "block";
            startButton.disabled = true;
            stopButton.disabled = false;
        });

        // Stop camera and save attendance
        stopButton.addEventListener('click', async () => {
            const courseId = courseIdInput.value.trim();
            const weekId = weekSelect.value;

            if (!courseId || !weekId) {
                alert("Please select both Course ID and Week before saving.");
                return;
            }

            try {
                // Stop camera first
                videoFeed.src = "";
                videoFeed.style.display = "none";
                startButton.disabled = false;
                stopButton.disabled = true;

                // Then save attendance
                const response = await fetch("{{ route('instructor.subject.addAttendanceToDatabase') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        course_id: courseId,
                        week_id: weekId
                    })
                });

                const result = await response.json();

                if (response.ok) {
                    alert(result.message || "Attendance saved successfully!");
                    fetchAttendance(); // Refresh the table
                } else {
                    alert(result.message || "Failed to save attendance.");
                }
            } catch (error) {
                console.error("Error:", error);
                alert("An error occurred while saving attendance.");
            }
        });

        // Fetch attendance data
        async function fetchAttendance() {
            const courseId = courseIdInput.value.trim();
            const weekId = weekSelect.value;

            if (!courseId || !weekId) {
                tableBody.innerHTML = '<tr><td colspan="2">Please select a week</td></tr>';
                return;
            }

            try {
                const response = await fetch(`http://localhost:5000/api/get_attendance?course_id=${courseId}&week_id=${weekId}`);
                const data = await response.json();

                if (data.attendance && data.attendance.length > 0) {
                    let html = '';
                    data.attendance.forEach(entry => {
                        html += `
                        <tr>
                            <td>${entry.name || 'N/A'}</td>
                            <td>${entry.time || 'N/A'}</td>
                        </tr>`;
                    });
                    tableBody.innerHTML = html;
                } else {
                    tableBody.innerHTML = '<tr><td colspan="2">No attendance records found</td></tr>';
                }
            } catch (error) {
                console.error("Error:", error);
                tableBody.innerHTML = '<tr><td colspan="2">Error loading data</td></tr>';
            }
        }

        // Manual refresh
        refreshButton.addEventListener('click', fetchAttendance);

        // Auto-refresh when week changes
        weekSelect.addEventListener('change', fetchAttendance);

        // Initial load if week is selected
        if (weekSelect.value) {
            fetchAttendance();
        }

        // Auto-refresh every 5 seconds
        setInterval(fetchAttendance, 5000);
    </script>

@endsection
