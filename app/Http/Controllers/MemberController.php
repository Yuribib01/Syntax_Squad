<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

     public function index()
    {
        $members = [
            'eidref' => [
                'name' => 'Eidref Jake S. Manalansan',
                'role' => 'Team Leader / Full Stack Developer',
                'image' => 'images/prof1.jpg',
                'email' => 'edrfjk@gmail.com',
            ],
            'yuri' => [
                'name' => 'Member name',
                'role' => 'Researcher',
                'image' => 'images/prof2.jpg',
                'email' => 'yuri@email.com',
            ],
            'sheran' => [
                'name' => 'Sheran S. Leal',
                'role' => 'Documentation Writer',
                'image' => 'images/prof3.jpg',
                'email' => 'sheran.leal1024@gmail.com',
            ],
            'rayver' => [
                'name' => 'Rayver John B. Leal',
                'role' => 'Resource Manager',
                'image' => 'images/prof4.jpg',
                'email' => 'rayverleal21@gmail.com',
            ],
        ];

        return view('index', compact('members'));
    }

    public function show($slug)
    {
        // Demo data – replace with your own later
        $members = [
            'eidref' => [
                'name' => 'Eidref Jake S. Manalansan',
                'role' => 'Team Leader / Full Stack Developer',
                'description' => 'I’m Eidref, passionate about creativity and technology. I enjoy designing and building simple websites and love exploring new things in the tech world.',
                'birthdate' => 'April 3, 2005',
                'birthplace' => 'Mabalacat City, Pampanga',
                'address' => 'Luna, La Union',
                'email' => 'edrfjk@gmail.com',
                'image' => 'images/prof1.jpg',

                'education' => [
                    [
                        'level' => 'College',
                        'school' => 'ISPSC - Tagudin Campus',
                        'desc' => 'Currently studying BSIT',
                        'logo' => 'images/school/ispsc.png'
                    ],
                    [
                        'level' => 'Senior High School',
                        'school' => 'OANARI NHS',
                        'desc' => 'Finished Strand: GAS',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'High School',
                        'school' => 'OANARI NHS',
                        'desc' => 'Studied here',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'Elementary School',
                        'school' => 'Oaqui Elementary School',
                        'desc' => 'Graduated',
                        'logo' => 'images/school/oaqui.jpg'
                    ],
                ],

                'skills' => [
                    ['name' => 'Frontend Development', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/html-5.png'],
                    ['name' => 'Backend Development', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/server.png'],
                    ['name' => 'Networking', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/network-card.png'],
                    ['name' => 'Writing Stories', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/pen.png'],
                    ['name' => 'Time Management', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/time-management.png'],
                    ['name' => 'Adaptability', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/change.png'],
                ],

                'projects' => [
                    ['title' => 'Anney Perfume Shop', 'desc' => 'An online shop for Anney Perfume customers.', 'image' => 'images/proj1.png'],
                    ['title' => 'TravELYU', 'desc' => 'An online booking system for vacations in La Union.', 'image' => 'images/proj2.png'],
                    ['title' => 'SipNServe', 'desc' => 'A web-based coffee shop for coffee lovers.', 'image' => 'images/proj3.png'],
                ]
            ],

            'yuri' => [
                'name' => 'Eidref Jake S. Manalansan',
                'role' => 'Researcher',
                'description' => 'I’m Eidref, passionate about creativity and technology. I enjoy designing and building simple websites and love exploring new things in the tech world.',
                'birthdate' => 'April 3, 2005',
                'birthplace' => 'Mabalacat City, Pampanga',
                'address' => 'Luna, La Union',
                'email' => 'edrfjk@gmail.com',
                'image' => 'images/prof2.jpg',

                'education' => [
                    [
                        'level' => 'College',
                        'school' => 'ISPSC - Tagudin Campus',
                        'desc' => 'Currently studying BSIT',
                        'logo' => 'images/school/ispsc.png'
                    ],
                    [
                        'level' => 'Senior High School',
                        'school' => 'OANARI NHS',
                        'desc' => 'Finished Strand: GAS',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'High School',
                        'school' => 'OANARI NHS',
                        'desc' => 'Studied here',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'Elementary School',
                        'school' => 'Oaqui Elementary School',
                        'desc' => 'Graduated',
                        'logo' => 'images/school/oaqui.jpg'
                    ],
                ],

                'skills' => [
                    ['name' => 'Frontend Development', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/html-5.png'],
                    ['name' => 'Backend Development', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/server.png'],
                    ['name' => 'Networking', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/network-card.png'],
                    ['name' => 'Writing Stories', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/pen.png'],
                    ['name' => 'Time Management', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/time-management.png'],
                    ['name' => 'Adaptability', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/change.png'],
                ],

                'projects' => [
                    ['title' => 'Anney Perfume Shop', 'desc' => 'An online shop for Anney Perfume customers.', 'image' => 'images/proj1.png'],
                    ['title' => 'TravELYU', 'desc' => 'An online booking system for vacations in La Union.', 'image' => 'images/proj2.png'],
                    ['title' => 'SipNServe', 'desc' => 'A web-based coffee shop for coffee lovers.', 'image' => 'images/proj3.png'],
                ]
            ],

            'sheran' => [
                'name' => 'Sheran S. Leal',
                'role' => 'Documentation Writer',
                'description' => 'I’m Sheran, passionate about learning and discovering new skills. My goal is to improve myself day by day.',
                'birthdate' => 'October 24, 2005',
                'birthplace' => 'Tagudin, Ilocos Sur',
                'address' => 'Ambalayat Tagudin, Ilocos Sur',
                'email' => 'sheran.leal1024@gmail.com',
                'image' => 'images/prof2.jpg',

                'education' => [
                    [
                        'level' => 'College',
                        'school' => 'ISPSC - Tagudin Campus',
                        'desc' => 'Currently studying BSIT',
                        'logo' => 'images/school/ispsc.png'
                    ],
                    [
                        'level' => 'Senior High School',
                        'school' => 'Ambalayat Integrated School',
                        'desc' => 'Finished Strand: TVL-ICT',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'High School',
                        'school' => 'Ambalayat Integrated School',
                        'desc' => 'Studied here',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'Elementary School',
                        'school' => 'Ambalayat Integrated School',
                        'desc' => 'Graduated',
                        'logo' => 'images/school/oaqui.jpg'
                    ],
                ],

                'skills' => [
                    ['name' => 'Creativity'],
                    ['name' => 'Multitasking'],
                    ['name' => 'Networking'],
                    ['name' => 'Critical Thinking'],
                    ['name' => 'Time Management'],
                    ['name' => 'Teamwork'],
                ],

                'projects' => [
                    ['title' => 'TravELYU', 'desc' => 'An online booking system for vacations in La Union.', 'image' => 'images/proj2.png'],
                    ['title' => 'SipNServe', 'desc' => 'A web-based coffee shop for coffee lovers.', 'image' => 'images/proj3.png'],
                ]
            ],

            'rayver' => [
                'name' => 'Rayver John B. Leal',
                'role' => 'Resource Manager',
                'description' => 'I’m Rayver, I enjoy and willing to Learn new ideas and taking on challenges. Each day, I work on learning and becoming a better version of myself.',
                'birthdate' => 'December 22, 2004',
                'birthplace' => 'Sam Manuel, Tarlac',
                'address' => 'Pallogan Tagudin, Ilocos Sur',
                'email' => 'rayverleal21@gmail.com',
                'image' => 'images/prof4.jpg',

                'education' => [
                    [
                        'level' => 'College',
                        'school' => 'ISPSC - Tagudin Campus',
                        'desc' => 'Currently studying BSIT',
                        'logo' => 'images/school/ispsc.png'
                    ],
                    [
                       'level' => 'Senior High School',
                        'school' => 'Ambalayat Integrated School',
                        'desc' => 'Finished Strand: TVL-ICT',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'High School',
                        'school' => 'Ambalayat Integrated School',
                        'desc' => 'Studied here',
                        'logo' => 'images/school/oanari.jpg'
                    ],
                    [
                        'level' => 'Elementary School',
                        'school' => 'Pallogan Elementary School',
                        'desc' => 'Graduated',
                        'logo' => 'images/school/oaqui.jpg'
                    ],
                ],

                'skills' => [
                    ['name' => 'Frontend Development 40%', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/html-5.png'],
                    ['name' => 'Backend Development 40%', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/server.png'],
                    ['name' => 'Active Listening', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/network-card.png'],
                    ['name' => 'TeamWork', 'icon' => 'https://img.icons8.com/ios-filled/50/000000/time-management.png'],
                   ],

                'projects' => [
                    ['title' => 'Teyvat Wiki', 'desc' =>  'A website that explores and explains the world of Teyvat from the game Genshin Impact. ', 'image' => 'images/proj1.png'],
                   ]
            ],
        ];

        // If slug is not found, show 404 page
        if (!isset($members[$slug])) {
            abort(404);
        }

return view('member', ['member' => $members[$slug]]);

    }
}
