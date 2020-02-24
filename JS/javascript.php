<!DOCTYPE html>
<html lang="sk">

    <head>
        ...
    </head>

    <body>
        ...

        <script>
            //vráti pole všetkých elementov DOMu s hľadaným názvom
            //divy[0] ... 
            var divy = document.getElementsByTagName("div");
            //vráti iba prvý element DOMu s hľadaným názvom
            var div1 = document.getElementsByTagName("div")[0];
            //vráti celkový počet nájdených elementov v DOMe
            var pocet = document.getElementsByTagName("li").length;
            //zmení obsah prvého elementu p
            document.getElementsByTagName("p")[0].innerHTML = "Ahoj Webový dizajn!";
            //vráti pole všetkých elementov v DOMe
            //all[0] ...
            var all = document.getElementsByTagName("*");
        </script>
    </body>

</html>