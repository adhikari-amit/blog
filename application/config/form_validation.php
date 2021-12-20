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
                  ]
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
      ]

];


 ?>