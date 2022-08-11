<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'What is an algorithm?',
                'choices' => [
                    'a flow chart',
                    'step by step instructions used to solve a problem',
                    'pseudocode',
                    'a decision',
                ],
                'correct_option' => 'step by step instructions used to solve a problem',
                'subject_id' => 1,
            ],
            [
                'question' => 'Time required to merge two sorted lists of size m and n, is',
                'choices' => [
                    'O(m | n)',
                    'O(m + n)',
                    'O(m log n)',
                    'O(n log m',
                ],
                'correct_option' => 'O(m + n)',
                'subject_id' => 1,
            ],
            [
                'question' => 'If queue is implemented using arrays, what would be the worst run time complexity of queue and dequeue operations?',
                'choices' => [
                    'O(n), O(n)',
                    'O(n), O(1)',
                    'O(1), O(n)',
                    'O(1), O(1)',
                ],
                'correct_option' => 'O(1), O(1)',
                'subject_id' => 1,
            ],
            [
                'question' => 'Which of the following is not a stable sorting algorithm in its typical implementation.',
                'choices' => [
                    'insertion sort',
                    'merge sort',
                    'quick sort',
                    'bubble sort',
                ],
                'correct_option' => 'merge sort',
                'subject_id' => 1,
            ],
            [
                'question' => 'Which of the following sorting algorithms in its typical implementation gives best performance when applied on an array which is sorted or almost sorted (maximum 1 or two elements are misplaced).',
                'choices' => [
                    'heap sort',
                    'merge sort',
                    'quick sort',
                    'insertion sort',
                ],
                'correct_option' => 'merge sort',
                'subject_id' => 1,
            ],
            [
                'question' => 'What is the best time complexity of bubble sort?',
                
                'choices' => [
                    'n^2',
                    'nlogn',
                    'n',
                    'n(logn)^2',
                ],
                'correct_option' => 'n^2',
                'subject_id' => 1,
            ],
            [
                'question' => 'You have to sort 1 GB of data with only 100 MB of available main memory. Which sorting technique will be most appropriate?',
                'choices' => [
                    'heap sort',
                    'merge sort',
                    'quick sort',
                    'insertion sort',
                ],
                'correct_option' => 'merge sort',
                'subject_id' => 1,
            ],
            [
                'question' => 'What is the worst case time complexity of insertion sort where position of the data to be inserted is calculated using binary search?',
                'choices' => [
                    'n',
                    'nlogn',
                    'n^2',
                    'n(logn)^2',
                ],
                'correct_option' => 'n^2',
                'subject_id' => 1,
            ],
            [
                'question' => 'Which of the following is true about merge sort?
                a. Merge Sort works better than quick sort if data is accessed from slow sequential memory.',
                'choices' => [
                    'Merge Sort works better than quick sort if data is accessed from slow sequential memory.',
                    'Merge Sort is stable sort by nature.',
                    'Merge sort outperforms heap sort in most of the practical situations.',
                    'All of the above',
                ],
                'correct_option' => 'All of the above',
                'subject_id' => 1,
            ],
            [
                'question' => 'What is time complexity of fun()? int fun(int n)
                {
                  int count = 0;
                  for (int i = n; i > 0; i /= 2)
                     for (int j = 0; j < i; j++)
                        count += 1;
                  return count;
                }',
                'choices' => [
                    'O(n^2)',
                    'O(nlogn)',
                    'O(n)',
                    'O(nlognlogn)',
                ],
                'correct_option' => 'O(n)',
                'subject_id' => 1,
            ],
            [
                'question' => 'Which term describes the text that appears inside the angle brackets, such as <title>?',
                'choices' => [
                    'Element',
                    'Value',
                    'Attribute',
                    'HTML tags',
                ],
                'correct_option' => 'Element',
                'subject_id' => 2,
            ],
            [
                'question' => 'Which HTML attribute should you add to the <img> tag to describe the image in case a site visitor cannot view the image on your Web page?',
                'choices' => [
                    'alt',
                    'src',
                    'href',
                    'name',
                ],
                'correct_option' => 'alt',
                'subject_id' => 2,
            ],
            [
                'question' => 'Which element surrounds the HTML document content that will display in the browser window?',
                'choices' => [
                    '<title> </body>',
                    '<head> </head>',
                    '<table> </table>',
                    '<body> </body>',
                ],
                'correct_option' => '<body> </body>',
                'subject_id' => 2,
            ],
            [
                'question' => "Consider the following Web address: 'http://www.thewebstore.com/products/chairs'. Which portion of this address indicates the top-level domain?",
                'choices' => [
                    'thewebstore',
                    'com',
                    'www',
                    'http://',
                ],
                'correct_option' => 'com',
                'subject_id' => 2,
            ],
            [
                'question' => 'Which of these tags would display the largest text?',
                'choices' => [
                    '<p>',
                    '<h6>',
                    '<h2>',
                    '<h4>',
                ],
                'correct_option' => '<h2>',
                'subject_id' => 2,
            ],
            [
                'question' => 'What is the purpose of <!DOCTYPE html>?',
                'choices' => [
                    'provides the web browser with security information',
                    'instructs the browser where to look for your CSS files',
                    'Allows programmers to link to files in-line',
                    'Tells the web browser what language to expect',
                ],
                'correct_option' => 'Tells the web browser what language to expect',
                'subject_id' => 2,
            ],
            [
                'question' => 'What is the difference between HTML and CSS?',
                'choices' => [
                    'CSS is one type of HTML',
                    'HTML gives a webpage structure. CSS provides styling.',
                    'CSS structures a webpage. HTML strictly provides styling.',
                    'There is no difference.',
                ],
                'correct_option' => 'HTML gives a webpage structure. CSS provides styling.',
                'subject_id' => 2,
            ],
            [
                'question' => 'What is the function of a title tag?',
                'choices' => [
                    'stores webpage title for browser and search engine results',
                    'show server how to index the website',
                    'shows meta information about the title',
                    'shows server how to title the website',
                ],
                'correct_option' => 'stores webpage title for browser and search engine results',
                'subject_id' => 2,
            ],
            [
                'question' => 'How can you make a numbered list',
                'choices' => [
                    '<list>',
                    '<ol>',
                    '<dl>',
                    '<ul>',
                ],
                'correct_option' => '<ol>',
                'subject_id' => 2,
            ],
            [
                'question' => 'How can you make a bulleted list?',
                'choices' => [
                    '<ol>',
                    '<ul>',
                    '<list>',
                    '<dl>',
                ],
                'correct_option' => '<ul>',
                'subject_id' => 2,
            ],
            [
                'question' => 'Which syntax is wrong for initializing a List in Dart?',
                'choices' => [
                    'List<dynamic> x = [1, true, 2.5, Text(“Hello”)];',
                    'List x = [1, true, 2.5, Text(“Hello”)];',
                    'List<Widget> x = [1, true, 2.5, Text(“Hello”)];',
                ],
                'correct_option' => 'List<Widget> x = [1, true, 2.5, Text(“Hello”)];',
                'subject_id' => 3,
            ],
            [
                'question' => 'When Container has a child, its size become as small as its child. How to make the Container as big as its parent?',
                'choices' => [
                    'Add alignment',
                    'Add color',
                    'Add padding',
                ],
                'correct_option' => 'Add alignment',
                'subject_id' => 3,
            ],
            [
                'question' => 'Which syntax is wrong for declaring a function in Dart?',
                'choices' => [
                    'var sum(a, b) => a + b;',
                    'sum(a, b) => a + b;',
                    'dynamic sum(a, b) => a + b;',
                ],
                'correct_option' => 'var sum(a, b) => a + b;',
                'subject_id' => 3,
            ],
            [
                'question' => 'Which code is correct to disable the scroll of a SingleChildScrollView?',
                'choices' => [
                    'Add physics: NeverScrollableScrollPhysics()',
                    'Add disable : true',
                    'Add scrollable : false',
                ],
                'correct_option' => 'Add physics: NeverScrollableScrollPhysics()',
                'subject_id' => 3,
            ],
            [
                'question' => 'When using “await” keyword, which another keyword is required?',
                'choices' => [
                    'async',
                    'try catch',
                    'var',
                ],
                'correct_option' => 'async',
                'subject_id' => 3,
            ],
            [
                'question' => 'Software is defined as ',
                'choices' => [
                    'set of programs, documentation & configuration of data',
                    'set of programs',
                    'documentation and configuration of data',
                    'None of the mentioned',
                ],
                'correct_option' => 'set of programs, documentation & configuration of data',
                'subject_id' => 4,
            ],
            [
                'question' => 'What is Software Engineering?',
                'choices' => [
                    'Designing a software',
                    'Testing a software',
                    'Application of engineering principles to the design a software',
                    'None of the above',
                ],
                'correct_option' => 'Application of engineering principles to the design a software',
                'subject_id' => 4,
            ],
            [
                'question' => 'Who is the father of Software Engineering?',
                'choices' => [
                    'Margaret Hamilton',
                    'Watts S. Humphrey',
                    'Alan Turing',
                    'Boris Beizer'
                ],
                'correct_option' => 'Watts S. Humphrey',
                'subject_id' => 4,
            ],
            [
                'question' => 'What are the features of Software Code?',
                'choices' => [
                    'Simplicity',
                    'Accessibility',
                    'Modularity',
                    'All of the above'
                ],
                'correct_option' => 'Modularity',
                'subject_id' => 4,
            ],
            [
                'question' => '______ is a software development activity that is not a part of software processes.',
                'choices' => [
                    'Validation',
                    'Specification',
                    'Development',
                    'Dependence',
                ],
                'correct_option' => 'Dependence',
                'subject_id' => 4,
            ],
            [
                'question' => 'every computer looking to access the Internet would be known as this',
                'choices' => [
                    'client',
                    'desktop',
                    'hub',
                    'server',
                ],
                'correct_option' => 'client',
                'subject_id' => 5,
            ],
            [
                'question' => 'network that allows information to be shared between devices over LAN',
                'choices' => [
                    'wifi',
                    'hotspots',
                    'ethernet',
                    'server',
                ],
                'correct_option' => 'ethernet',
                'subject_id' => 5,
            ],
            [
                'question' => 'the acronym for file transfer protocol
                ',
                'choices' => [
                    'http',
                    'https',
                    'ftp',
                    'pdf',
                ],
                'correct_option' => 'ftp',
                'subject_id' => 5,
            ],
            [
                'question' => 'many businesses use this Wi-Fi technology to allow the public an access point to a wireless network',
                'choices' => [
                    'hotspots',
                    'coldspot',
                    'satellites',
                    'bluetooth',
                ],
                'correct_option' => 'hotspots',
                'subject_id' => 5,
            ],
            [
                'question' => 'used for government sites ',
                'choices' => [
                    '.edu',
                    '.gov',
                    '.com',
                    '.net',
                ],
                'correct_option' => '.gov',
                'subject_id' => 5,
            ],



        ];
        foreach($questions as $key=>$value) {
            Question::create($value);
        }
    }
}
