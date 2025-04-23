<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NG4GQuXUMNvaqfk3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/students/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::keYeL8jybH6Mevyu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/students/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DFTVAQgWXT7bM95Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NckX2FkpgTP3e9QM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'profile.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qy33Qg4mAbSiqMU5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9nY7OGTXPeCVy8n2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zqqAkMZLQxesKNFA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XQgpFWHrXLmjN2V6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KHtD1l9wrYV7twvG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9UyBeNwEA7iagH2H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMuGJj1d1XLzcbtd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.subject.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/subject/update-attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateAttendance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instructor/subjectAttendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.instructor.subjectAttendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.courses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/instructors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/instructors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/instructors/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subject/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subject/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/students/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/students/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/location/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/period/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/period/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule_subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule_subject/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/schedule_subject/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/search-student' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search.student',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/registration/search-course' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search.course',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/students/attendance/([^/]++)(*:43)|dmin/(?|r(?|oles/([^/]++)(?|(*:78)|/edit(*:90)|(*:97))|egistration/(?|edit/([^/]++)(*:133)|update/([^/]++)(*:156)|delete/([^/]++)(*:179)))|instructor(?|s/(?|([^/]++)(?|(*:218))|delete/([^/]++)(*:242))|/profile/([^/]++)(*:268))|s(?|ubject/(?|profile/([^/]++)(*:307)|edit/([^/]++)(*:328)|update/([^/]++)(*:351)|delete/([^/]++)(*:374))|tudent(?|s/(?|edit/([^/]++)(*:410)|update/([^/]++)(*:433)|delete/([^/]++)(*:456))|/profile/([^/]++)(*:482))|chedule(?|/(?|edit/([^/]++)/([^/]++)(*:527)|update/([^/]++)/([^/]++)(*:559)|delete/([^/]++)/([^/]++)(*:591))|_subject/(?|edit/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:661)|update/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:720)|delete/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:779))))|location/(?|edit/([^/]++)(*:815)|update/([^/]++)(*:838)|delete/([^/]++)(*:861))|period/(?|show/([^/]++)(*:893)|edit/([^/]++)(*:914)|update/([^/]++)(*:937)|delete/([^/]++)(*:960))))|/reset\\-password/([^/]++)(*:996)|/verify\\-email/([^/]++)/([^/]++)(*:1036)|/instructor/subject/(?|attendance/([^/]++)(*:1087)|takeAttendance/(?|([^/]++)(*:1122)|showAttendance(*:1145)))|/st(?|udent/attendance/([^/]++)(*:1187)|orage/(.*)(*:1206)))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QRpyj7iChXvijcAv',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      78 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      97 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.registrations.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.instructors.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.instructors',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.subjects',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subjects.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.edit',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.update',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.delete',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects.edit',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
            2 => 'location_name',
            3 => 'course_id',
            4 => 'instructor_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects.update',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
            2 => 'location_name',
            3 => 'course_id',
            4 => 'instructor_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.schedules.subjects.delete',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'period_id',
            2 => 'location_name',
            3 => 'course_id',
            4 => 'instructor_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.edit',
          ),
          1 => 
          array (
            0 => 'location_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.update',
          ),
          1 => 
          array (
            0 => 'location_name',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.delete',
          ),
          1 => 
          array (
            0 => 'location_name',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.edit',
          ),
          1 => 
          array (
            0 => 'period_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.update',
          ),
          1 => 
          array (
            0 => 'period_number',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.periods.delete',
          ),
          1 => 
          array (
            0 => 'period_number',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.subject.attendance',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.subject.takeAttendance',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'instructor.subject.addAttendanceToDatabase',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.attendance',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1206 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NG4GQuXUMNvaqfk3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function () {
    return \\response()->json([\'message\' => \'API is working!\']);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005000000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NG4GQuXUMNvaqfk3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::keYeL8jybH6Mevyu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/students/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Students\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Students\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api/students',
        'where' => 
        array (
        ),
        'as' => 'generated::keYeL8jybH6Mevyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DFTVAQgWXT7bM95Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/students/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Students\\CourseController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Students\\CourseController@index',
        'namespace' => NULL,
        'prefix' => 'api/students',
        'where' => 
        array (
        ),
        'as' => 'generated::DFTVAQgWXT7bM95Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QRpyj7iChXvijcAv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/students/attendance/{course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Students\\AttendanceController@show.blade.php',
        'controller' => 'App\\Http\\Controllers\\API\\Students\\AttendanceController@show.blade.php',
        'namespace' => NULL,
        'prefix' => 'api/students',
        'where' => 
        array (
        ),
        'as' => 'generated::QRpyj7iChXvijcAv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NckX2FkpgTP3e9QM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:882:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'K:\\\\Programmig\\\\back_end\\\\PHP\\\\Projects\\\\Grad_project\\\\Back_end\\\\smart_attendance\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Foundation\\\\Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000004fe0000000000000000";}}',
        'as' => 'generated::NckX2FkpgTP3e9QM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfileController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qy33Qg4mAbSiqMU5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () {
    return \\view(\'dashboard.home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005080000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qy33Qg4mAbSiqMU5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Student\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9nY7OGTXPeCVy8n2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Student\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9nY7OGTXPeCVy8n2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zqqAkMZLQxesKNFA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:63:"function () {
        return \\redirect()->route(\'login\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005110000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zqqAkMZLQxesKNFA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XQgpFWHrXLmjN2V6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XQgpFWHrXLmjN2V6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\EmailVerificationPromptController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\VerifyEmailController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KHtD1l9wrYV7twvG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KHtD1l9wrYV7twvG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\PasswordController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Student\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\RegisteredInstructorController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\RegisteredInstructorController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'instructor.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9UyBeNwEA7iagH2H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\RegisteredInstructorController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\RegisteredInstructorController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9UyBeNwEA7iagH2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '/instructor',
        'where' => 
        array (
        ),
        'as' => 'instructor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NMuGJj1d1XLzcbtd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '/instructor',
        'where' => 
        array (
        ),
        'as' => 'generated::NMuGJj1d1XLzcbtd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '/instructor',
        'where' => 
        array (
        ),
        'as' => 'instructor.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.subject.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\SubjectController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\SubjectController@index',
        'namespace' => NULL,
        'prefix' => '/instructor/subject',
        'where' => 
        array (
        ),
        'as' => 'instructor.subject.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.subject.attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/subject/attendance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\AttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\AttendanceController@show',
        'namespace' => NULL,
        'prefix' => '/instructor/subject',
        'where' => 
        array (
        ),
        'as' => 'instructor.subject.attendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateAttendance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor/subject/update-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\AttendanceController@updateAttendance',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\AttendanceController@updateAttendance',
        'namespace' => NULL,
        'prefix' => '/instructor/subject',
        'where' => 
        array (
        ),
        'as' => 'updateAttendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.instructor.subjectAttendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/subjectAttendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function () {
    return \\view(\'dashboard.instructor.subjectAttendance\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005200000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard.instructor.subjectAttendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.subject.takeAttendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instructor/subject/takeAttendance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\TakeAttendanceController@takeAttendance',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\TakeAttendanceController@takeAttendance',
        'namespace' => NULL,
        'prefix' => '/instructor/subject/takeAttendance',
        'where' => 
        array (
        ),
        'as' => 'instructor.subject.takeAttendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'instructor.subject.addAttendanceToDatabase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'instructor/subject/takeAttendance/showAttendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\TakeAttendanceController@showAttendance',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Instructor\\Subject\\TakeAttendanceController@showAttendance',
        'namespace' => NULL,
        'prefix' => '/instructor/subject/takeAttendance',
        'where' => 
        array (
        ),
        'as' => 'instructor.subject.addAttendanceToDatabase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
        ),
        'as' => 'roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\RoleAndPremitionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.courses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Courses\\CourseController@index',
        'controller' => 'App\\Http\\Controllers\\Student\\Courses\\CourseController@index',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'student.courses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/attendance/{course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Student\\Attendance\\AttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\Student\\Attendance\\AttendanceController@show',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'student.attendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/instructors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/instructors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/instructors/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/instructors/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/instructors/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.instructors.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/instructors/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.instructors.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.instructors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/instructor/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorProfileController@show.blade.php',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Instructor\\InstructorProfileController@show.blade.php',
        'namespace' => NULL,
        'prefix' => '/admin/instructor',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.instructors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectProfileController@show',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@index',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@create',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subject/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@store',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subject/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/subject/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@update',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subjects.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/subject/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Subject\\SubjectController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/subject',
        'where' => 
        array (
        ),
        'as' => 'admin.subjects.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@index',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/students/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@create',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/students/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@store',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/students/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/students/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@update',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/students/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/students',
        'where' => 
        array (
        ),
        'as' => 'admin.students.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/student/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Student\\StudentProfileController@show',
        'namespace' => NULL,
        'prefix' => '/admin/student',
        'where' => 
        array (
        ),
        'as' => 'admin.students.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@index',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@create',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/location/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@store',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/location/edit/{location_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/location/update/{location_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@update',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/location/delete/{location_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin-only',
          2 => 'auth:instructors',
          3 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Location\\LocationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/location',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@index',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/period/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@create',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/period/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@store',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/period/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@show',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/period/edit/{period_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/period/update/{period_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@update',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.periods.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/period/delete/{period_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Period\\PeriodController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/period',
        'where' => 
        array (
        ),
        'as' => 'admin.periods.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@index',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@create',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/schedule/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@store',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule/edit/{day}/{period_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/schedule/update/{day}/{period_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@update',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/schedule/delete/{day}/{period_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule\\ScheduleController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/schedule',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule_subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@index',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule_subject/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@create',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/schedule_subject/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@store',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/schedule_subject/edit/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/schedule_subject/update/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@update',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.schedules.subjects.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/schedule_subject/delete/{day}/{period_id}/{location_name}/{course_id}/{instructor_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Schedule_subject\\Schedule_subjectController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/schedule_subject',
        'where' => 
        array (
        ),
        'as' => 'admin.schedules.subjects.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@create',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/registration/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/registration/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@update',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.registrations.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/registration/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@delete',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'admin.registrations.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.student' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/search-student',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@searchStudent',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@searchStudent',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'search.student',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.course' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/registration/search-course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:instructors',
          2 => 'admin-only',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@searchCourse',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Admin\\Registration\\RegistrationController@searchCourse',
        'namespace' => NULL,
        'prefix' => '/admin/registration',
        'where' => 
        array (
        ),
        'as' => 'search.course',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:5:{s:6:"driver";s:5:"local";s:4:"root";s:94:"K:\\Programmig\\back_end\\PHP\\Projects\\Grad_project\\Back_end\\smart_attendance\\storage\\app/private";s:5:"serve";b:1;s:5:"throw";b:0;s:6:"report";b:0;}s:12:"isProduction";b:0;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000005290000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
