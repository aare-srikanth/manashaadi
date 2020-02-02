<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
$config = array(
    //***** Customer forms validation *****//

    'contactus' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[3]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1}[a-zA-Z0-9-]{1,23}/]|valid_email'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'trim|required|numeric|min_length[10]|max_length[10]|regex_match[/^[7-9][0-9]{9}$/]'
        ),
        array(
            'field' => 'message',
            'label' => 'Message',
            'rules' => 'trim|required|min_length[5]|max_length[150]'
        ),
    ),
    
    
    'careers' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[3]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1}[a-zA-Z0-9-]{1,23}/]|valid_email'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'trim|required|numeric|min_length[10]|max_length[10]|regex_match[/^[7-9][0-9]{9}$/]'
        ),
        array(
            'field' => 'message',
            'label' => 'Address',
            'rules' => 'trim|required|min_length[5]|max_length[150]'
        ),
        array(
            'field' => 'image',
            'label' => 'File',
            'rules' => 'trim|required'
        ),
    ),
        /* 'register' => array(
          array(
          'field' => 'name',
          //'label' => 'Your Name',
          'rules' => 'trim|required|min_length[3]'
          ),
          array(
          'field' => 'email',
          //'label' => 'Email',
          'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1}[a-zA-Z0-9-]{1,23}/]|valid_email'
          ),
          array(
          'field' => 'username',
          //'label' => 'User Name',
          'rules' => 'trim|required|min_length[1]'
          ),
          array(
          'field' => 'password',
          //'label' => 'Password',
          'rules' => 'trim|required'
          ),
          array(
          'field' => 'confirm',
          //'label' => 'Confirm Password',
          'rules' => 'trim|required'
          ),
          ),
          'login' => array(
          array(
          'field' => 'email',
          //'label' => 'Email',
          'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1}[a-zA-Z0-9-]{1,23}/]|valid_email'
          ),
          array(
          'field' => 'password',
          //'label' => 'Password',
          'rules' => 'trim|required'
          )
          ),
          'forget_password' => array(
          array(
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'trim|required|regex_match[/^[a-zA-Z]{1}[a-zA-Z0-9-]{1,23}/]|valid_email'
          ),
          ),
          'new_password' => array(
          array(
          'field' => 'password',
          'label' => 'Password',
          'rules' => 'trim|required'
          ),
          array(
          'field' => 'confirm_password',
          'label' => 'confirm Password',
          'rules' => 'trim|required'
          )
          ),
          'welcome' => array(
          array(
          'field' => 'name',
          'label' => 'Name',
          'rules' => 'trim|required'
          ),

          array(
          'field' => 'type',
          'label' => 'Type',
          'rules' => 'trim|required'
          ),


          array(
          'field' => 'posted',
          'label' => 'Posted',
          'rules' => 'trim|required|min_length[3]'
          ),

          array(
          'field' => 'message',
          'label' => 'Message',
          'rules' => 'trim|required|min_length[5]|max_length[150]'
          ),


          array(
          'field' => 'image',
          'label' => 'Image',
          'rules' => 'trim|required|xss_clean'
          ),

          ), */
);
?>				
