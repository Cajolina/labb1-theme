<?php
//funktion som lägger till en händelse-krok (action hook) till 'after_setup_theme' händelsen. När denna händelse utlöses kommer funktionen 'themeSupport' att köras.
//add_action()-funktionen tar två huvudargument: namnet på händelse-kroken som funktionen ska kopplas till och namnet på den funktion som ska köras när händelse-kroken utlöses.
add_action('after_setup_theme', 'themeSupport');

//En funktion där jag samlar alla theme support
function themeSupport()
{
    //this add dynamic title tag support
    add_theme_support('title-tag');
    //Ger theme support för thumbnails (utvald bild)
    add_theme_support('post-thumbnails');

    //Ger theme support för widgets
    add_theme_support('widgets');
}

//Koden lägger till en händelse-krok (action hook) på 'init' händelsen i WordPress och kopplar den till en funktion 'theme_support_menu'. När händelse-kroken utlöses kommer funktionen att köras. Det kan användas för att lägga till stöd för anpassade menyer i WordPress-temat.
add_action('init', 'theme_support_menu');

//En funktion för support för menyer
function theme_support_menu()
{
    //Koden definierar en funktion 'theme_support_menu', som skapar två menyplatser (menu locations) i WordPress-temat genom att skapa en array med två nycklar och tillhörande värden. Funktionen används tillsammans med 'register_nav_menus()' för att registrera menyplatserna i temat.
    $locations = array(
        'primary' => 'Primary',
        'sidebar-menu' => 'Sidebar Menu'
    );

    register_nav_menus($locations);
}

//En funktion där jag samlar alla registeringar för widgets
function widget_areas()
{
    //get_sidebar() får man tillgång till php filen sidebar.php    
    //Sidebar för widget för bloggsidor
    //Koden registrerar en ny widget i WordPress-temat som kallas "sidebarWidget". 
    //Parametrar:"name": En titel för widget-området som kommer att visas i WordPress adminpanel
    //"description": En kort beskrivning av widget-området som kommer att visas i WordPress adminpanel.
    //"id": En unik identifierare för widget-området. Detta används i koden för att referera till widget-området.
    //För sidor
    register_sidebar([
        'name' => 'sidebarWidgetArea1',
        'description' => 'Widget for sidebars',
        'id' => 'sidebarWidgetArea1',
        'before_widget' => '',
        'after_widget' => ''

    ]);
    //För Arkiv
    register_sidebar([
        'name' => 'sidebarWidgetArea2',
        'description' => 'Widget for sidebars',
        'id' => 'sidebarWidgetArea2',
        'before_widget' => '',
        'after_widget' => ''


    ]);
    //För Kategori
    register_sidebar([
        'name' => 'sidebarWidgetArea3',
        'description' => 'Widget for sidebars',
        'id' => 'sidebarWidgetArea3',
        'before_widget' => '',
        'after_widget' => ''


    ]);

    //för texten "sök efter" sidebaren i home.php
    register_sidebar([
        'name' => 'sidebarSearchWidget-1',
        'description' => 'Widget for sidebar search',
        'id' => 'sidebarSearchWidget-1',
        'before_widget' => '',
        'after_widget' => ''


    ]);

    //För texten "sök efter:" på söksidan
    register_sidebar([
        'name' => 'SearchWidget-2',
        'description' => 'Widget for sidebar search',
        'id' => 'SearchWidget-2',
        'before_widget' => '',
        'after_widget' => ''

    ]);



    /////Widget för footer "kort om oss"
    register_sidebar([
        'name' => 'footer1',
        'description' => 'Widget for footer1',
        'id' => 'footer1',
        'before_widget' => '',
        'after_widget' => ''

    ]);

    //Widget för footer "kontaktuppgifter"
    register_sidebar([
        'name' => 'footer2',
        'description' => 'Widget for footer2',
        'id' => 'footer2',
        'before_widget' => '',
        'after_widget' => ''
    ]);

    //widget för "social media"
    register_sidebar([
        'name' => 'footer3',
        'description' => 'Widget for footer3',
        'id' => 'footer3',
        'before_widget' => '',
        'after_widget' => ''
    ]);
}

//Denna kod lägger till en händelse-krok (action hook) på 'widgets_init' händelsen i WordPress och kopplar den till en funktion som heter 'widget_areas'. När 'widgets_init' händelse-kroken utlöses, kommer 'widget_areas' funktionen att köras.
//'widgets_init' är en WordPress-händelse som utlöses när widgetarna initialiseras.
add_action('widgets_init', 'widget_areas');




///En funktion som köar alla scripts och styles

function enqueue_styles()
{
    wp_deregister_script('jquery');
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
    wp_enqueue_style('bootstrap-style');

    wp_register_style('css-style', get_template_directory_uri() . '/assets/css/style.css', array());
    wp_enqueue_style('css-style');
    wp_register_style('fontawe', get_template_directory_uri() . '/assets/css/font-awesome.css', array());
    wp_enqueue_style('fontawe');


    wp_register_script('carro-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), true);
    wp_enqueue_script('carro-jquery');
    wp_register_script('scriptjs', get_template_directory_uri() . '/assets/js/script.js', '', false, true);
    wp_enqueue_script('scriptjs');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


//Funktionen ersätter den befintliga mallen för navigationsmarkering (navigation markup) med en egen mall och returnerar sedan den nya mallen. Eftersom wordpress skapar egna element runt med andra klasser så måste skriva denna kod för att behålla befintliga mallar och klasser för att stylingen ska fungera
function ca_pagination_output($template, $class)
{

    $template = '
	
		<nav class=" navigation %1$s" role="navigation" aria-label="%4$s">
			<h2 class="screen-reader-text">%2$s</h2>
			%3$s
		</nav>';

    return $template;
}
//Lägger till en filterkrok på 'navigation_markup_template' och kopplar den till funktionen 'ca_pagination_output'. Detta gör att funktionen körs när navigationsmarkeringen genereras och möjliggör anpassning av navigationsmallen. De två sista argumenten anger att funktionen tar två parametrar och att prioriteten för filteret är 99.
add_filter('navigation_markup_template', 'ca_pagination_output', 99, 2);
