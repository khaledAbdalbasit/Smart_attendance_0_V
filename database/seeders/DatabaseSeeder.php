<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        // Define Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'manage instructors',
            'add students',
            'manage student registration',
            'take attendance',
            'remove subject from student',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'instructors']);
        }

        // Define Roles
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'instructors']);
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'instructors']);
        $instructor = Role::firstOrCreate(['name' => 'instructor', 'guard_name' => 'instructors']);

        // Assign Permissions to Roles
        $superAdmin->givePermissionTo($permissions);
        $admin->givePermissionTo(['add students', 'manage student registration']);
        $instructor->givePermissionTo(['take attendance', 'remove subject from student']);

//        // Assign Super Admin Role to First Instructor
//        $firstInstructor = Instructor::find(1); // Change ID as needed
//        if ($firstInstructor) {
//            $firstInstructor->assignRole('super-admin');
//        }
        $this->call([
//            CreateAdminSeeder::class,
//            LocationSeeder::class,
//            PermissionTableSeeder::class,
//            InstructorSeeder::class,
//            StudentSeeder::class,
//            PeriodSeeder::class,
//            CourseSeeder::class,
//            StudentInstructorSeeder::class,
//            ScheduleSeeder::class,
//            ScheduleSubjectSeeder::class,
            RegistrationsSeeder::class,
            AttendanceSeeder::class,
//            WeeksTableSeeder::class,
        ]);
    }
}
