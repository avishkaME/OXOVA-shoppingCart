<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course([
            'course_name' => 'Test course 1',
            'lecturer_name' => 'Test name 2',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card',
            'imagePath' => 'https://www.bhilvatechsolutions.com/wp-content/uploads/2019/07/Google-Cloud-concept-730x403-590x326.png',
            'course_fee' => '$10',
            'batch_type' => 'beginner',
            'course_duration' => '30days'
        ]);

        $course->save();

        $course = new Course([
            'course_name' => 'Test course 2',
            'lecturer_name' => 'Test name 2',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card',
            'imagePath' => 'https://www.bhilvatechsolutions.com/wp-content/uploads/2019/07/Google-Cloud-concept-730x403-590x326.png',
            'course_fee' => '$10',
            'batch_type' => 'beginner',
            'course_duration' => '30days'
        ]);

        $course->save();

        $course = new Course([
            'course_name' => 'Test course 3',
            'lecturer_name' => 'Test name 3',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card',
            'imagePath' => 'https://www.bhilvatechsolutions.com/wp-content/uploads/2019/07/Google-Cloud-concept-730x403-590x326.png',
            'course_fee' => '$10',
            'batch_type' => 'beginner',
            'course_duration' => '30days'
        ]);

        $course->save();

        $course = new Course([
            'course_name' => 'Test course 3',
            'lecturer_name' => 'Test name 3',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card',
            'imagePath' => 'https://www.bhilvatechsolutions.com/wp-content/uploads/2019/07/Google-Cloud-concept-730x403-590x326.png',
            'course_fee' => '$10',
            'batch_type' => 'beginner',
            'course_duration' => '30days'
        ]);

        $course->save();

        $course = new Course([
            'course_name' => 'Test course 3',
            'lecturer_name' => 'Test name 3',
            'description' => 'Some quick example text to build on the card title and make up the bulk of the card',
            'imagePath' => 'https://www.bhilvatechsolutions.com/wp-content/uploads/2019/07/Google-Cloud-concept-730x403-590x326.png',
            'course_fee' => '$10',
            'batch_type' => 'beginner',
            'course_duration' => '30days'
        ]);

        $course->save();


    }
}
