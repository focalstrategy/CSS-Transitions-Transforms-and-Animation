<?

$post_title = "Retina Image Replacement for the New iPad";
$post_description = "Various techniques for upgrading images to work well on the new iPad and other HiRes devices.";

$post_content = <<<HTML

<h1>Retina Image Replacement for the New iPad</h1>
<p>Now that the New iPad is out, and there have been various clues that perhaps future Apple screens on other devices will have a similar resolution, handling high resolution images has become an important issue for many designers.</p>
<p>Below I'm going to outline four different ways to replace your images. I'm using PHP and jQuery for the example code as this is a good baseline for most developers. The logic of each is the key part, so porting ideas to other languages shouldn't pose much of a problem.</p>

<h2>Whats the aim?</h2>
<p>There are two types of image - ones included via an img element, and CSS background images. For ones using img, you need to specify the width and height, then provide an image that has double the size for each dimension. For CSS background images you need to use the CSS3 property background-size to scale the image correctly. This can be done simply using media queries - something like:</p>
<pre class="prettyprint lang-css">
#image { background: url(image.png); }

@media only screen and (-webkit-min-device-pixel-ratio: 2),
       only screen and (-moz-min-device-pixel-ratio: 2),
       only screen and (-o-min-device-pixel-ratio: 2/1),
       only screen and (min-device-pixel-ratio: 2) {
           #image { background: url(image_2x.png); background-size: 50%; }
}
</pre>

<p>In the way that Apple are doing this, I'm assuming that any image you want to be high res has a copy with _2x added before the file extension. To see what I mean, check out the images from the Apple site: <a href="http://images.apple.com/uk/home/images/ipad_hero.jpg">Normal</a> and <a href="http://images.apple.com/uk/home/images/ipad_hero_2x.jpg">Hi Resolution</a>.</p>

<h2>Technique 1 - everyone gets hi res!</h2>
<p>OK, so this isn't the best way, but it's very easy. Simply replace:</p>

<pre class="prettyprint lang-html">
&lt;img src="image.jpg" alt="" width="200" height="100" /&gt;
</pre>

<p>with</p>

<pre class="prettyprint lang-html">
&lt;img src="image_2x.jpg" alt="" width="200" height="100" /&gt;
</pre>

<b>Pros</b>
<ul>
<li>Simple</li>
<li>Easy control over what is hi res and what isn't.</li>
</ul>

<b>Cons</b>
<ul>
<li>Very wasteful for non retina devices</li>
<li>Page load time will be slow</li>
</ul>

<h2>Technique 2 - check the pixel ratio</h2>

<p>Rather nicely, there is a property exposed by the browser called devicePixelRatio. This tells us what's going on. On retina devices, it's got the value of 2.</p>
<p>This means that we can just insert our images like normal, like this:</p>
<pre class="prettyprint lang-html">
&lt;img src="image.jpg" alt="" width="200" height="100" /&gt;
</pre>

<p>Then we can use jQuery like this:</p>

<pre class="prettyprint lang-js">
// Set pixelRatio to 1 if the browser doesn't offer it up.
var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;

$(function() {
    if (pixelRatio > 1) {
        $('img').each(function() {

            // Very naive replacement that assumes no dots in file names.
            $(this).attr('src', $(this).attr('src').replace(".","_2x."));
        });     
    }
});
</pre>

<p>If desired, you could add a class onto the images you want to be replaced, and only replace those by modifiying the selector.</p>

<b>Pros</b>
<ul>
<li>Pretty simple</li>
<li>Only works on devices that need it</li>
<li>User gets the low res version quickly, then the high res later</li>
</ul>

<b>Cons</b>
<ul>
<li>Images load twice</li>
<li>In its current form will replace images for iPhone 4/4S and iPod Touch, which may not really be required.</li>
</ul>

<h2>Technique 3 - check the pixel ratio, then check if the files exist</h2>
<p>Apple make use of a head request for every image before they try to replace it - this seems rather wasteful though. A better way might be to write a PHP script that returns a list of all the _2x images, then only replaces them if they are in the list.</p>

<p>Write some php like this, </p>

<pre class="prettyprint lang-php">
HTML;

$post_content .= '
&lt;?
function is_in_string($haystack, $needle) { 
    if (strpos($haystack, $needle) !== false) {
        return 1;
    } else {
        return 0;
    }
}

function get_dir_contents($web_directory) {
    $directory = $_SERVER[\'DOCUMENT_ROOT\'].$web_directory;
    if(file_exists($directory)) {
        $myDirectory = opendir($directory);

        while($entryName = readdir($myDirectory)) {
            if (is_in_string($entryName, "_2x")){
                $dirArray[] = $entryName;   
            }
        }

        return $dirArray;
    }
}

header(\'Content-type: application/json\');
echo json_encode(get_dir_contents("/my/image/directory"));
?&gt;';
$post_content .= <<<HTML
</pre>

<p>Then just check if the new image source is in that json before replacing. That script will return something like:</p>

<pre class="prettyprint lang-js">
["image1_2x.jpg","image2_2x.png","image3_2x.jpeg"]
</pre>

<p>So, if we update our JS to be this:</p>

<pre class="prettyprint lang-js">
// Set pixelRatio to 1 if the browser doesn't offer it up.
var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;

$(function() {

    $.getJSON("/path/to/that/php/above.php", function(data){
        if (pixelRatio &gt; 1) {

            $('img').each(function() {

                // Very naive replacement that assumes no dots in file names.
                var newsrc = $(this).attr('src').replace(".","_2x.");

                if ($.inArray(newsrc, data)) {
                    $(this).attr('src', newsrc);
                }

            });
        }
    });
});
</pre>

<b>Pros</b>
<ul>
<li>Only replaces images that exist</li>
<li>Only one additional HTTP request, that can be cached</li>
</ul>

<b>Cons</b>
<ul>
<li>1 additional HTTP request</li>
</ul>

<h2>Conclusion</h2>
<p>After some investigation, it seems that technique 3 combines the best of everything, and is the one to use! How are you approaching this? Do you have a better technique?</p>

HTML;

include($_SERVER['DOCUMENT_ROOT']."/blog/template.php"); ?>