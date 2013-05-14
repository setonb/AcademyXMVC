<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreateController extends CI_Controller {

  public function create($name) {
		$handle = fopen(".\\application\\controllers\\".$name. ".php", 'x');
		fwrite($handle, "<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');\n");
		fwrite($handle, "class " .ucfirst($name). " extends CI_Controller {\n");
		fwrite($handle, "\tpublic function index()\n");
		fwrite($handle, "\t{\n");
		fwrite($handle, "\t\t".'$this->load->view("'.$name.'");'."\n");
		fwrite($handle, "\t}\n");
		fwrite($handle, "}");
		fclose($handle);

		$handle = fopen(".\\application\\views\\".$name. ".php", 'x');
		fwrite($handle, "<!DOCTYPE html>\n");
		fwrite($handle, "<html lang='en'>\n");
		fwrite($handle, "<head>\n");
		fwrite($handle, "\t<meta charset='utf-8'>\n");
		fwrite($handle, "\t<title>Welcome to Your Controller!</title>\n");
		fwrite($handle, "</head>\n");
		fwrite($handle, "<body>\n");
		fwrite($handle, "<div id='container'>\n");
		fwrite($handle, "\t<h1>This is your new controller's view!</h1>\n");
		fwrite($handle, "\t<div id='body'>\n");
		fwrite($handle, "\t\t<p>Change this information in 'application/views/".$name.".php'</p>\n");
		fwrite($handle, "\t\t<p>Change your controller in 'application/controllers/".$name.".php'</p>\n");
		fwrite($handle, "\t</div>\n");
		fwrite($handle, "</div>\n");
		fwrite($handle, "</body>\n");
		fwrite($handle, "</html>\n");
		fclose($handle);

		header("Location: http://localhost/CodeIgniter/index.php/$name");
	}
}
