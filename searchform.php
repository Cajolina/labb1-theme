<!-- Formulärmall som används för att skapa en sökfunktion som definieras med HTML-taggen "form" med rollattributet "search" för att ge sökfunktionen ett semantiskt korrekt syfte. "Method" attributet sätts till "get" för att sökfunktionen ska skicka en GET-förfrågan till servern.

"Action" attributet anger URL:en där sökresultaten ska visas och sätts till startsidan genom att använda funktionen "home_url ()".

Inuti formuläret finns en textinmatningsruta som har värdet av sökfrågan från användaren, hämtad med funktionen "get_search_query ()".
Textinmatningsrutan har namnet "s" så att det kan användas för att skicka sökfrågan till servern.

Submit-knappen värde sätts till "Sök" med hjälp av funktionen "esc_attr_x ()" för att översätta texten till den aktuella webbplatsens språk. -->

<form role="search" method="get" id="searchform" class="searchform" action="<? echo esc_url(home_url('/')); ?>">
    <div>

        <label class="screen-reader-text">Sök efter:</label>

        <input type="text" value="<? echo get_search_query(); ?> " name="s" />

        <input type="submit" value="<? echo esc_attr_x('Sök', 'submit button'); ?>" />

    </div>

</form>