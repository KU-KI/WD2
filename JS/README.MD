JAVASCRIPT:
===========
<body>
    <h1>Kód v HTML</h1>
    <script>
        //kód v jazyku JavaScript
    </script>
</body>


EVENT:
======
    <body>

        <div>
            echo '<a href="index.php?id_user='.$data[$i]['id'].'" onclick="showConfirm()">Vymazať záznam</a>';
        </div>

        <script>
            function showConfirm(){
                var answer = confirm("Naozaj chcete vymazať daný záznam?");

                if(answer){
                    //vykonanie, ak používateľ potvrdí confirm okno - odkaz sa vykoná
                    return true;
                }else{
                    //vykonanie, ak používateľ zruší confirm okno - odkaz sa nevykoná
                    return false;
                }
            }
        </script>

    </body>
</html>


PRESMEROVANIE:
==============
…
if($result){
    echo '<p class="success">Položka bola úspešne uložená.</p>';
    ?>

    <script>
    window.location.href = "/MyProject Coding/5-Projekt2/index.php";
    </script>

    <?php
}else{
    echo '<p class="error">Pri ukladaní dát do databázy sa vyskytla chyba!</p>';
}
...


GETELEMENT:
====================================
<script>
    function showNumbers(id){
        alert(id);
        //document.getElementById('numbers_'+id).style.display = 'block';
    }
</script>

