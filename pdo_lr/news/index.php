<?php
require($_SERVER["DOCUMENT_ROOT"]."/db.php");
require($_SERVER["DOCUMENT_ROOT"]."/news.php");
$newsList=news::getList();
?>
<html>
    <head>
        <style>
            #content {
                width: 100% !important;
                height: 100vh;
            }
            #news-block {
                border: 1px solid black;
                padding: 15px;
                border-radius: 5px;
                width: 75%;
                margin-left: 50%;
                transform: translate(-50%, 10px);
                height: 80vh;
                overflow-y: scroll;
            }
            #news-block::-webkit-scrollbar {
                width: 10px;
                border-radius: 5px;
            }

            #news-block::-webkit-scrollbar-track {
                box-shadow: inset 0 0 3px gray;
            }

            #news-block::-webkit-scrollbar-thumb {
                border: 1px solid black;
                border-radius: 5px;
                background: white;
                box-shadow: 0 0 3px gray;
            }
            body {
                font-family: "Century Gothic" !important;
                margin: 0 !important;
                width: 100% !important;
            }
            .del-button {
                background-image: url("img/del1.png");
            }
            .del-button:hover {
                background-image: url("img/del2.png");
            }
            .news-buttons {
                padding: 12px;
                margin: 5px;
                transition: 0.5s;
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                opacity: 0;
            }
            .buttons-panel {
                padding-top: 20px;
                width: 10%;
                height: 40px;
            }
            .news-single {
                margin: 10px;
                border-bottom: 1px solid black;
            }
            .news-single:hover .news-buttons {
                opacity: 1;
            }
            a {
                text-decoration: none;
                color: #000;
            }
            .news-header-block {
                display: flex;
            }
            .news-description {
                overflow: hidden;
            }
            .news-header {
                width: 90%;
                display: inline-block;
            }
            .show-button {
                border: none;
                border-bottom: 1px dashed black;
                margin: 5px 0 15px 0;
                padding: 0;
                background: transparent;
                cursor: pointer;
            }
            .show-button:focus {
                outline: none;
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
            //style="height: 5.5em;"
        </script>
    </head>
    <body onload="onload()">
    <div class="">
        <div id="content">
            <div id="news-block">
                <h1>Новости</h1>
                <?php foreach($newsList as $arNews):?>
                    <div class="news-single">
                        <div class="news-header-block">
                            <h3 class="news-header"><?=$arNews["name"];?></h3>
                            <div class="buttons-panel">
                                <a title="удалить" class="del-button news-buttons" href="/delete.php?id=<?=$arNews["id"];?>"></a>
                            </div>
                        </div>
                        <div class="news-description"  id="news-num-<?=$arNews["id"];?>">
                            <?=$arNews["description"];?>
                        </div>
                        <button class="show-button" onclick="switch_text('news-num-<?=$arNews["id"];?>', this)">Читать далее...</button>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    </body>
</html>
