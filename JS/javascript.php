<!DOCTYPE html>
<html lang="sk">

    <head>
        ...
    </head>

    <body>
        <div>
            Prvý div ...
        </div>
        <div>
            Druhý div ...
        </div>
        <a id="link">
            Odkaz na presmerovanie ...
        </a>

        <script>
            //nájde druhý element div
            var wd2 = document.getElementsByTagName("div")[1];
            var anchor = document.getElementById("link");
            //vytvorí nový atribút elementu
            var atribut = document.createAttribute("class");
            var atribut1 = document.createAttribute("href");
            //novému atribútu pridá hodnotu
            atribut.value = "red";
            atribut1.value = "http://www.ku.sk";
            //nový atribút pridá k nájdenému elementu
            wd2.setAttributeNode(atribut);
            anchor.setAttributeNode(atribut1);
        </script>

        <script>
            // Vytvorí nový element <p>
            var novyElement = document.createElement("P"); 
            // Priradí mu obsah
            nevyElement.innerHTML = "Webový dizajn je super!";   
            // Pridá nový element <p> do <div> s id="mojDIV"
            document.getElementById("mojDIV").appendChild(novyElement);   

            // Vytvorí nové tlačidlo
            var btn = document.createElement("BUTTON");   
            // Priradí mu nápis
            btn.innerHTML = "KLIKNI";      
            // Pridá tlačidlo do <body>
            document.body.appendChild(btn);               
        </script>

        <script>
            // Nájde <ul> element s id="mojUlList"
            var list = document.getElementById("mojUlList"); 
            // Odstráni prvý(index 0) <li> z listu <ul> 
            list.removeChild(list.childNodes[0]);           
        </script>
    </body>

</html>