
        <?php

        use Phalcon\Mvc\Controller;
        
        class LoginController extends Controller 
        {
        
            public function indexAction() 
            {
        
            }
        
            public function loginAction()
            {
        
                if ($this->request->isPost()) {
                    $firstname = $this->request->getPost("firstname");
                    $password = $this->request->getPost("password");
                }
        
                $success = Users::findFirst(
                    [
                    "firstname = :firstname: AND password= :password:",
                    'bind' => [
                    'firstname' => $firstname,
                    'password' => $password,
                    ]
                    ]
                    );



                if ($success) {
                    header('Location: home/');
                 
                } else {
                    echo "Sorry, the following problems were generated:
                    wrong FIRSTNAME!!
                          PASSWORD!! ";
        
                    
                    }
                }
        
             
            }
        
        