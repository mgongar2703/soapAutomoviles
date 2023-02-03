<?php
class client
{
    public function __construct()
    {
        $client = 
            array(
                'uri' => 'http://localhost/soapAutomoviles/',
                'location' => 'http://localhost/soapAutomoviles/service-automoviles.php',
                'trace' => 1
            );  
        $this->instance = new SoapClient(null, $client);

        // set the header 
        // https://www.php.net/manual/en/reserved.classes.php
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('http://localhost/soapAutomoviles/GestionAutomoviles.php', 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));
    }

    public function __call($name, $arguments){
        return $this->instance->{$name}($arguments);
    }

}
$client = new client();
?>
