<?php

namespace App\Models;

class Job {
    public static function all(): array {
        return [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "escription" => "As a Software Engineer at Algorix, you will be responsible for designing, developing, and maintaining high-quality software applications. You will work closely with cross-functional teams to deliver scalable and efficient"
            ],
            
            [
                "id" => 2,
                "title" => "Backend Developer",
                "escription" => "As a Software Engineer at Algorix, you will be responsible for designing, developing, and maintaining high-quality software applications. You will work closely with cross-functional teams to deliver scalable and efficient"
            ],

            [
                "id" => 3,
                "title" => "Data Scientist",
                "escription" => "As a Software Engineer at Algorix, you will be responsible for designing, developing, and maintaining high-quality software applications. You will work closely with cross-functional teams to deliver scalable and efficient"
            ],
        ];
    }
}