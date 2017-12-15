 
// Enqueue scripts and styles
function accelerate_child_scripts() {
    wp_enqueue_style( ‘accelerate-child-google-fonts’, '//fonts.googleapis.com/css?family=Fontdiner+Swanky' )
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

font-family: 'Fontdiner Swanky', cursive;/*OUR SERVICES*/


//<h3><?php the_field('service1'); ?></h3>


 
.our-services ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.homepage-our-services {
    width: 100%;
}
.homepage-our-services li{
    float: left;
    display: block;
    width: 20%;
    padding: 10px;
    margin: 20px;
    text-align: center;
}
.individual-service {
	display: inline-block;
	padding-right: 10%;
}
/*Homepage Services*/

.home-our-services .site-content{
 display: block;
}
.home-our-services h4{
    font: 700 1em/1.75 'Monserrat','Open Sans', Arial, sans-serif;
    text-transform: uppercase;
    text-align: center;
} 
.home-our-services h3{
    font-size: 1em;
    text-transform: uppercase;
    text-align: center;
}
.home-our-services ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.homepage-services {
    width: 100%;
}

.homepage-services li{
    float: left;
    display: block;
    width: 20%;
    padding: 10px;
    margin: 10px;
    text-align: center;
}
 