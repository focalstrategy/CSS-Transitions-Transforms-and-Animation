<?

$test_server = $_SERVER['SERVER_NAME'] == "127.0.0.1" || $_SERVER['SERVER_NAME'] == "localhost" || substr($_SERVER['SERVER_NAME'],0,3) == "192"; //Update in caching/combined as well.

ini_set('register_globals',"Off");

ini_set('display_errors',$test_server);
ini_set('display_startup_errors',$test_server);

error_reporting(E_ALL|E_STRICT);

$titles = array(
	"accordions" => "CSS3 Accordions | CSS3 transitions, transforms and animations",
	"animations" => "CSS3 Animations | CSS3 transitions, transforms and animations",
	"cfimg" => "Crossfading Images | CSS3 transitions, transforms and animations",
	"cfimg1" => "Crossfading Images on hover | CSS3 transitions, transforms and animations",
	"cfimg2" => "Crossfading Images on button press | CSS3 transitions, transforms and animations",
	"cfimg3" => "Crossfading Images with a timer | CSS3 transitions, transforms and animations",
	"cfimg4" => "Crossfading Images with fancy effects | CSS3 transitions, transforms and animations",
	"cfimg5" => "Animating background-image to get a fade | CSS3 transitions, transforms and animations",	
	"flip" => "3D card flipping | CSS3 transitions, transforms and animations",
	"index" => "Using CSS3 Transitions, Transforms and Animation",
	"legacy" => "How do transitions, transforms and animation look in older browsers | CSS3 transitions, transforms and animations",
	"references" => "Further Reading | CSS3 transitions, transforms and animations",
	"slide1" => "Sliding by changing position | CSS3 transitions, transforms and animations",
	"slide2" => "Sliding with transfoms | CSS3 transitions, transforms and animations",
	"sliding" => "Sliding content | CSS3 transitions, transforms and animations",
	"support" => "Which browsers support transitions, transforms and animations | CSS3 transitions, transforms and animations",
	"transforms" => "CSS3 transforms | CSS3 transitions, transforms and animations",
	"transitions" => "CSS3 transitions | CSS3 transitions, transforms and animations"
);

$descriptions = array(
	"accordions" => "How to use CSS3 transitions to make an animated accordion",
	"animations" => "How to use CSS3 Animations with keyframes that work in Webkit and Firefox 5+",
	"cfimg" => "How to use CSS3 transitions to cross fade an image",
	"cfimg1" => "How to use CSS3 transitions to cross fade an image on hover without javascript",
	"cfimg2" => "How to use CSS3 transitions to cross fade an image by pressing a button",
	"cfimg3" => "How to use CSS3 transitions to cross fade an image using webkit animations",
	"cfimg4" => "How to use CSS3 transitions to make a fancy image transition",
	"cfimg5" => "Animating background-image with CSS3 transitions",	
	"flip" => "How to use CSS3 3D transforms to make a element flip in 3D",
	"index" => "A practical guide with demos to using CSS transitions, transforms and animations. Examples work in Safari, Chrome, Firefox, Opera and IE10",
	"legacy" => "How to make CSS3 transitions work in older browsers using jQuery",
	"references" => "Further reading",
	"slide1" => "How to use CSS3 transitions to make an animated slider",
	"slide2" => "How to use CSS3 transitions to make a hardware accelerated animated slider using transforms",
	"sliding" => "How to use CSS3 transitions and transforms to animate content in Safari, Chrome, Firefox, Opera and Internet Explorer 10",
	"support" => "Where do CSS3 transitions, transforms, 3d transforms and animation work?",
	"transforms" => "How to use CSS3 transforms in Safari, Chrome, Firefox, Opera and Internet Explorer 10",
	"transitions" => "How to use CSS3 transitions to animate content in Safari, Chrome, Firefox, Opera and Internet Explorer 10"
);

function prefix($prop, $value, $tabs=2) {

$t = "";

for($i=0;$i<$tabs;$i++) {
	$t .= "\t";
}
	
$string=<<<CSS
-webkit-$prop: $value;
$t-moz-$prop: $value;
$t-o-$prop: $value;
$t-ms-$prop: $value;
{$t}$prop: $value;
CSS;

return $string;
}
?>