<?php 

$config=[

       'add_articles_rules' =>[

                  [ 
                  	'field'=>'title',
                    'label'=>"Title",
                    'rules'=>'required|alpha_numeric_spaces'
                  ],
                  [
                    'field'=>'article',
                    'label'=>'Article Body',
                    'rules'=>'required'
                  ],

                  [
                    'field' =>'desc',
                    'label' =>'Description',
                    'rules' =>'required'
                  
                  ],

                  [
                    'field' =>'author',
                    'label' =>'Author Name',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'category',
                    'label' =>'Category',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'slug',
                    'label' =>'Slug',
                    'rules' =>'required|alpha_numeric'

                  ]
       ],
      
       'update_articles_rules' =>[

                  [ 
                    'field'=>'title',
                    'label'=>"Title",
                    'rules'=>'required|alpha_numeric_spaces'
                  ],
                  [
                    'field'=>'article',
                    'label'=>'Article Body',
                    'rules'=>'required'
                  ],

                  [
                    'field' =>'desc',
                    'label' =>'Description',
                    'rules' =>'required'
                  
                  ],

                  [
                    'field' =>'author',
                    'label' =>'Author Name',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'category',
                    'label' =>'Category',
                    'rules' =>'required',
                  ],
                 
       ],


       'login_form_rules' =>[

                   [
                    'field'=>'username',
                    'label'=>'Username',
                    'rules'=>'required|alpha_numeric'
                   ],

                   [
                    'field'=>'password',
                    'label'=>'Password',
                    'rules'=>'required'
                   ]
       ],

        'author_form_rules' =>[

             [
              'field'=>'name',
              'label'=>'Name',
              'rules'=>'required|alpha_numeric_spaces'
             ],


             [
              'field'=>'bio',
              'label'=>'Bio',
              'rules'=>'required'
             ]                   
      ],
       

      'category_form_rules' =>[

             [
              'field'=>'title',
              'label'=>'Title',
              'rules'=>'required|alpha_numeric_spaces'
             ],

             [
              'field'=>'desc',
              'label'=>'Description',
              'rules'=>'required'
             ]                   
      ],

      'comment_form_rules' =>[

             [
              'field'=>'name',
              'label'=>'Name',
              'rules'=>'required|alpha_numeric_spaces'
             ],

             [
              'field'=>'comment',
              'label'=>'Comment',
              'rules'=>'required|min_length[5]|max_length[5000]'
             ]                   
      ],

     'subscribe_form_rules'=>[
             [              
              'field'=>'email',
              'label'=>"Email",
              'rules'=>"required|valid_email|is_unique[subscribers.email]",
              'errors' => array(
                    'is_unique' => 'Email already Subsribed.'
                )
             ]
     ],
     'review_form_rules'=>[
             [              
              'field'=>'name',
              'label'=>"Name",
              'rules'=>"required"
             ],
             [
              'field'=>'position',
              'label'=>"Position",
              'rules'=>'required'
             ],
             [
              'field'=>'comment',
              'label'=>'Comment',
              'rules'=>'required'
             ]
     ],
     'contact_form_rules'=>[
             [              
              'field'=>'name',
              'label'=>"Name",
              'rules'=>"required"
             ],
             [
              'field'=>'email',
              'label'=>"Email",
              'rules'=>'required|valid_email'
             ],
             [
              'field'=>'message',
              'label'=>'Message',
              'rules'=>'required'
             ]
     ] ,



       'add_work_rules' =>[

                  [ 
                    'field'=>'name',
                    'label'=>"Name",
                    'rules'=>'required|alpha_numeric_spaces'
                  ],
                  [
                    'field'=>'email',
                    'label'=>'Email',
                    'rules'=>'valid_email'
                  ],

                  [
                    'field' =>'mobile',
                    'label' =>'Mobile',
                    'rules' =>'required'     
                  ],

                  [
                    'field' =>'type',
                    'label' =>'Work Type',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'desc',
                    'label' =>'Work Description',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'status',
                    'label' =>'Work status',
                    'rules' =>'required'

                  ]
       ],

       'edit_work_rules' =>[

                  [ 
                    'field'=>'name',
                    'label'=>"Name",
                    'rules'=>'required|alpha_numeric_spaces'
                  ],
                  [
                    'field'=>'email',
                    'label'=>'Email',
                    'rules'=>'valid_email'
                  ],

                  [
                    'field' =>'mobile',
                    'label' =>'Mobile',
                    'rules' =>'required'     
                  ],

                  [
                    'field' =>'type',
                    'label' =>'Work Type',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'desc',
                    'label' =>'Work Description',
                    'rules' =>'required',
                  ],

                  [
                    'field' =>'status',
                    'label' =>'Work status',
                    'rules' =>'required'

                  ],
               
       ],

      'project_form_rules'=>[
                 [              
                  'field'=>'finished',
                  'label'=>"Finished",
                  'rules'=>"required|numeric"
                 ],
                 [
                  'field'=>'lines_of_code',
                  'label'=>"Code",
                  'rules'=>"required|numeric"
                 ],
                 [
                  'field'=>'cups_of_coffee',
                  'label'=>'Coffee',
                  'rules'=>"required|numeric"
                 ],
                 [
                  'field'=>'running_projects',
                  'label'=>'Running Project',
                  'rules'=>"required|numeric"
                 ],
     ] ,

     'social_form_rules'=>[

                 [              
                  'field'=>'whatsapp',
                  'label'=>"Whatsapp",
                  'rules'=>"required"
                 ],
                 [
                  'field'=>'facebook',
                  'label'=>"Facebook",
                  'rules'=>"required"
                 ],
                 [
                  'field'=>'twitter',
                  'label'=>'Twitter',
                  'rules'=>"required"
                 ],
                 [
                  'field'=>'linkedin',
                  'label'=>'Linkedin',
                  'rules'=>"required"
                 ],
                 [
                  'field'=>'instagram',
                  'label'=>'Instagram',
                  'rules'=>"required"
                 ]

     ] ,

     'workshop_form_rules'=>[
                [
                 'field'=>'name',
                 'label'=>'Name',
                 'rules'=>'required'
                ],
                [
                  'field'=>'desc',
                  'label'=>'Description',
                  'rules'=>'required'
                ],
                [
                  'field'=>'workshop_date',
                  'label'=>"workshop Date",
                  'rules'=>'required'
                ],
                [
                  'field'=>'workshop_time',
                  'label'=>"workshop time",
                  'rules'=>'required'
                ],
                [
                  'field'=>'venue',
                  'label'=>'Venue',
                  'rules'=>'required'
                ],
                [
                  'field'=>'status',
                  'label'=>'Status',
                  'rules'=>'required'
                ],
                [
                  'field'=>'price',
                  'label'=>'Price',
                  'rules'=>'required'
                ]

        ],


      'register_form_rules'=>[
                [
                  'field'=>'name',
                  'label'=>'Name',
                  'rules'=>'required|alpha_numeric_spaces'
                ],
                [ 
                  'field'=>'email',
                  'label'=>'Email',
                  'rules'=>'required|valid_email'
                ]
      ],

      'event_form_rules'=>[
                [
                  'field'=>'name',
                  'label'=>'Name',
                  'rules'=>'required|alpha_numeric_spaces'
                ],
                [
                  'field'=>'email',
                  'label'=>'Email',
                  'rules'=>'required|valid_email'
                ],
                [
                  'field'=>'bio',
                  'label'=>'Bio',
                  'rules'=>'required'
                ],
                [
                  'field'=>'categories',
                  'label'=>'Category',
                  'rules'=>'required'
                ]
        ],
      'ebook_form_rules'=>[
                [
                  'field'=>'name',
                  'label'=>'Name',
                  'rules'=>'required|alpha_numeric_spaces'
                ],
                [
                  'field'=>'desc',
                  'label'=>'Description',
                  'rules'=>'required'
                ]

      ]  
    ]
?>