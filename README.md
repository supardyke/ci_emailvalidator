this is a simple email validator libaray for codeigniter

How to use is pretty simple

Download the file and copy to the library folder of your project

load the file the codeigniter way

$this->load->library('Emailvalidator');

then use like this

$email = 'user@email.com';
$this->Emailvalidator->check($email);

it returns a bool value
which is true for allowed email registrars and false for registrars not included

you can even add or remove registrars from the library, its the $allowed_reg variable

be careful not to break the code

LIKE WHAT I DO?

FOLLOW ME ON GITHUB @SUPARDYKE AND STAR MY PROJECTS 