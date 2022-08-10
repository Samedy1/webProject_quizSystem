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
                'question' => 'int fun(int n)
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
                'question' => '',
                'choices' => [
                    '',
                    '',
                    '',
                    '',
                ],
                'correct_option' => '',
                'subject_id' => 2,
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

        ];
        foreach($questions as $key=>$value) {
            Question::create($value);
        }
    }
}
