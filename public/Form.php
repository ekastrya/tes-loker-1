<?php
class Form {
    private $message;

    public function __construct()
    {
        $this->message = '';
    }

    public function run(array $request, array $rules, $callback)
    {
        $errors = [];
        foreach($request as $key => $value)
        {
            $key = trim($key);
            $value = trim($value);
            // echo sprintf("<div>%s: %s</div>",$key,$value);
            if(isset($rules[$key]))
            {
                // print_r($rules[$key]);
                foreach(explode(',',$rules[$key]) as $rule)
                {
                    $rule = trim($rule);
                    switch($rule)
                    {
                        case 'required':
                            if($value == ""){
                                $this->invalid_message($rule, $key);
                                $callback([]);
                                die;
                            }
                            break;
                        case 'email':
                            if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                                $this->invalid_message($rule, $key);
                                $callback([]);
                                die;
                            }
                            break;
                        case 'min7':
                            if(strlen($value) < 7){
                                $this->invalid_message($rule, $key);
                                $callback([]);
                                die;
                            }
                            break;
                        default: break;
                    }
                }
            }
        }
        $callback([
            'email' => $request['email'],
            'id' => rand(1,9)
        ]);
    }

    private function invalid_message($rule, $key)
    {
        $message = [
            'required' => [
                'email' => 'Alamat email harus diisi',
                'password' => 'Password harus diisi'
            ],
            'email' => [
                'email' => 'Alamat email harus valid',
                'password' => 'Password harus valid'
            ],
            'min7' => [
                'email' => '',
                'password' => 'Password minimum 7 karakter'
            ]
        ];
        $this->message = $message[$rule][$key];
    }

    public function response($error, $message, $response)
    {
        echo json_encode([
            'error' => $error,
            'message' => $this->message,
            'details' => $response
        ]);
    }
}
?>