<?php

define('CLASS_DIR', '../');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use src\SON\form\InputText;
use src\SON\form\InputEmail;
use src\SON\form\InputNumber;
use src\SON\form\InputPassword;
use src\SON\form\Submit;
use src\SON\form\Form;
use src\SON\Request;
use src\SON\Validator;
use src\SON\Assemble\Assemble;
use src\SON\Creates\createField;
use src\SON\Creates\createButton;
use src\Aura\Di\Container;
use src\Aura\Di\Factory;

$di = new Container(new Factory);

$request = new Request(5);
$validator = new Validator($request);

$di->set('form', new Form($validator));

$assemble = new Assemble($di);

$nome = new InputText("nome");
$assemble->addField(new createField($nome));
$assemble->display();

$email = new InputEmail("email");
$assemble->addField(new createField($email));
$assemble->display();

$idade = new InputNumber("idade");
$assemble->addField(new createField($idade));
$assemble->display();

$senha = new InputPassword("senha");
$assemble->addField(new createField($senha));
$assemble->display();

$submit = new Submit("enviar");
$assemble->addField(new createButton($submit));
$assemble->display();

?>