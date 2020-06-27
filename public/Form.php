<?php
class Form {
    public function __construct()
    {

    }

    public function run(array $request, array $rules, $callback_function)
    {
        foreach($request as $key => $value)
        {
            echo sprintf("<div>%s: %s</div>",$key,$value);
            if(isset($rules[$key]))
            {
                foreach(explode(',',$rules[$key]) as $rule)
                {
                    switch(trim($rule))
                    {
                        case 'required':
                            //do something
                            break;
                        case 'email':
                            //do something
                            break;
                        case 'min7':
                            //do something
                            break;
                        default: break;
                    }
                }
            }
        }
        echo json_encode([
            'error' => 0,
            'message' => '',
            'details' => [
                'email' => $request['email'],
                'id' => rand(1,9)
            ]
        ]);
    }
}
?>