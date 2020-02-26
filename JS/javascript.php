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
    </body>

</html>