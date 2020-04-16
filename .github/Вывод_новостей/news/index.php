<?php
require($_SERVER["DOCUMENT_ROOT"]."/db.php");
require($_SERVER["DOCUMENT_ROOT"]."/news.php");
$newsList=news::getList();
?>
<html>
    <head>
        <style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                text-align: left;
                border-collapse: separate;
                border-spacing: 5px;
                background: #ECE9E0;
                color: #656665;
                border: 16px solid #ECE9E0;
                border-radius: 20px;
            }
            th {
                font-size: 18px;
                padding: 10px;
            }
            td {
                background: #F5D7BF;
                padding: 10px;
            }
        </style>
        <script>
            function onload () {
                for (let child of document.getElementsByClassName("news-description")) {
                    if(child.clientHeight < 80) {
                        child.parentNode.children[child.parentNode.children.length - 1].outerHTML = "";
                        child.style.marginBottom = "10px";
                    } else {

                        child.style.height = "5.5em"
                    }
                }
            }
            function switch_text(id, button) {
                let e = document.getElementById(id);
                if (e.style.height != "auto") {
                    e.style.height = "auto";
                    button.innerText = "Свернуть";
                } else {
                    e.style.height = "5.5em";
                    button.innerText = "Читать далее...";
                }
            }

        </script>
    </head>
    <body onload="onload()">
    <table>
        <tr><td>ID</td><td>Название новости</td><td>Действия</td></tr>
        <?php foreach($newsList as $arNews):?>
            <tr>
                <td><?=$arNews["id"];?></td>
                <td><?=$arNews["name"];?></td>
                <td><a href="/delete.php?id=<?=$arNews["id"];?>">
                        Удалить
                    </a><br/>
                </td>
            </tr>
        <?php endforeach;?>
    </table>

    </body>
</html>
