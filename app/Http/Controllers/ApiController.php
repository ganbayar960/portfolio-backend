<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function information(){
        $information = [
            'name' => "Ganbayar Bat-Ulzii",
            'aboutContent' => "I am full-stack developer. I can provide clean code and solution solving coding skills. I also make software more & more interactive.",
            'age' => '27',
            'phone' => '0451962399',
            'nationality'=> 'Mongolia',
            'language' => 'English, Mongolia',
            'email' => '',
            'address' => 'Gardeners Rd, Mascot, Sydney, NSW, Australia',
            'freelanceStatus' => 'Available',
            'socialLinks' => [
                  'facebook' => 'https://www.facebook.com/ganbayr.batulzii/',
                  'twitter' => 'https://twitter.com',
                  'pinterest' => '',
                  'behance' => '',
                  'linkedin' => 'https://www.linkedin.com/in/ganbayar-bat-ulzii-61b091185/',
                  'dribbble' => '',
                  'gitlab' => 'https://gitlab.com/ganbayar'
            ],
            'brandImage' => '/images/icon.jpg',
            'aboutImage' => '/images/about-image.jpg',
            'aboutImageLg' => '/images/about-image-lg.jpg',
            'cvfile' => '/files/Resume.pdf',
        ];

        return $information;
    }

    public function services(){
        $services = [
            [
                'title' => "Web Design",
                'icon' => 'color-pallet',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
            ],
            [
                'title' => "Web Development",
                'icon' => 'code',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
            ],
            [
                'title' => "Mobile Application",
                'icon' => 'mobile',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
            ]
        ];
        return $services;
    }

    public function reviews(){
        $reviews = [
            [
                'id' => 1,
                'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit nobis tempore quaerat quibusdam, aliquid maxime tempora.",
                'author' => [
                    'name' => 'Burdette Turner',
                    'designation' => 'Web Developer, Abc Company'
                ]
            ],
            [
                'id' => 2,
                'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit nobis tempore quaerat quibusdam, aliquid maxime tempora.",
                'author' => [
                    'name' => 'Burdette Turner',
                    'designation' => 'Web Developer, Abc Company'
                ]
            ],
            [
                'id' => 3,
                'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit nobis tempore quaerat quibusdam, aliquid maxime tempora.",
                'author' => [
                    'name' => 'Burdette Turner',
                    'designation' => 'Web Developer, Abc Company'
                ]
            ]
        ];
        return $reviews;
    }

    public function skills(){
        $skills = [
            [
                'title' => "PHP",
                'value' => 95
            ],
            [
                'title' => "HTML5",
                'value' => 95
            ],
            [
                'title' => "CSS",
                'value' => 90
            ],
            [
                'title' => "Javascript",
                'value' => 70
            ],
            [
                'title' => "jQuery",
                'value' => 85
            ],
            [
                'title' => "ReactJS",
                'value' => 80
            ],
            [
                'title' => "MySQL",
                'value' => 85
            ],
            [
                'title' => "Oracle",
                'value' => 80
            ]
          ];

        return $skills;
    }blocked boltson bhiin bro


    public function experience(){
        $experience = [
            'workingExperience' => [
                [
                    'id' => 1,
                    'year' => "2016 - 2020",
                    'position' => "Full-stack Developer",
                    'company' => "Ni Tech",
                    'details' => "Australian start-up technology company that develops home automation and embedded systems solutions."
                ],
                [
                    'id' => 2,
                    'year' => "2015 - 2019",
                    'position' => "Software Developer",
                    'company' => "Mongolian National Datacenter",
                    'details' => "The Mongolian National Datacenter is the largest government-run organization that maintains public and private organizations’ databases, software and servers. The main purpose of this organization is to ensure accessibility, security and database integrity of systems. The Datacenter therefore provides information to citizens by emerging technologies."
                ]
            ],
            'educationExperience' => [
                [
                    'id' => 1,
                    'year' => "2019 - 2020",
                    'graduation' => "Advanced Level of English",
                    'university' => "Scots English College",
                    'details' => ""
                ],
                [
                    'id' => 2,
                    'year' => "2010 - 2014",
                    'graduation' => "Bachelor of Computer science ",
                    'university' => "Mongolian National University",
                    'details' => "Programming languages, Data structure, Database administrating, Embedded system programming and Mathematics I II, Statistics."
                ]
            ],
            'certifications' => [
                [
                    'id' => 1,
                    'year' => "2020",
                    'graduation' => "Amazon Web Services Cloud Practitioner",
                    'university' => "Amazon Web Services (AWS)",
                    'details' => ""
                ],
            ]
        ];

        return $experience;
    }
    public function projects(){
        $projects = [
          [
              'id' => 1,
              'title' => "Spotlight ",
              'subtitle' => "Popular news and events website",
              'imageUrl' => "/images/logo-sl.png",
              'largeImageUrl' => ["/images/logo-sl.png"],
              'url' => 'http://spotlight.mn/',
              'techStack' => 'Laravel PHP, HTML, CSS, Voyager, MySql'
          ],
            [
                'id' => 2,
                'title' => "Medulla Tech canada project",
                'subtitle' => "Home automation system",
                'imageUrl' => "/images/logo-mt.png",
                'largeImageUrl' => ["/images/logo-mt.png"],
                'url' => 'http://canada.medullatech.org',
                'techStack' => 'Laravel PHP, HTML, CSS, Javascript, Ajax, MySQL, AWS Ec2'
            ],
            [
                'id' => 1,
                'title' => "Mongolian National Datacenter",
                'subtitle' => "Popular news and events website",
                'imageUrl' => "/images/logo-dc.png",
                'largeImageUrl' => ["/images/logo-dc.png"],
                'url' => 'http://datacenter.gov.mn/',
                'techStack' => 'October CMS, HTML, CSS, Javascript'
            ],
            [
                'id' => 1,
                'title' => "LiveTV",
                'subtitle' => "Online television and news",
                'imageUrl' => "/images/logo-livetv.png",
                'largeImageUrl' => ["/images/logo-livetv.png"],
                'url' => 'http://livetv.mn/',
                'techStack' => 'Laravel PHP, HTML, CSS, Javascript, MySQL'
            ]
        ];

        return $projects;
    }

    public function blogs(){
        $blogs = [
          [
              'id' => 1,
              'title' => 'Markdown & Html supported blog.',
              'featuredImage' => '/images/blog-image-1.jpg',
              'filesource' => '../../blog/markdown-html-supported-blog.md',
              'createDay' => "20",
              'createMonth' => 'February',
              'createYear' => "2020"
          ]
        ];

        return $blogs;
    }

    public function contact(){
        $contactInfo = [
          'phoneNumbers' => ['+61451962399'],
          'emailAddress' => ['ganbayar960@gmail.com'],
          'address' => 'Gardeners RD, Mascot, Sydney 2020, NSW, Australia'
        ];

        return $contactInfo;
    }
}
