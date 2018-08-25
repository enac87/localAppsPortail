<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Projet Test</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- <link href="css/style.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="css/main.css">

  </head>

  <body onload="startTime()">

    <!-- Bootstrap NavBar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <a href="#" data-toggle="sidebar-colapse" class="sidebar-toggle">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABdSURBVFhHYxgFo+D///8uA4X//ftnAnLAgAGgAw4PvAOAxLsBxNugKWEUjIKRDIBZYfcA4v7RkhAUBeUDiKOhKWEUjIIBBMDcYDxQGJgL1EcLooF3wCgYBQMLGBgAFiKqUTgye98AAAAASUVORK5CYII=">
      </a>
      <a  id="logo" class="navbar-brand" href="index.php">Accueil</a>

        <div class="list-group-item d-flex align-items-center menu-collapsed" style="margin-left : 124px; padding : 0px; border : none; background-color:transparent">
            <span style="float: left; min-width: 50%; cursor: pointer;">
                <button id="previous" type="button" class="nav-button btn btn-clear btn-icon"><i class="fa fa-arrow-left"></i></button>
            </span>
            <span style="float: left; min-width: 50%; cursor: pointer;">
                <button id="refresh" type="button" class="nav-button btn btn-clear btn-icon"><i class="fa fa-refresh"></i></button>
            </span>
            <span style="min-width: 50%; cursor: pointer;">
                <button id="forward" type="button" class="nav-button btn btn-clear btn-icon"><i class="fa fa-arrow-right"></i></button>
            </span>
        </div>

      <div id="dateHolder" class="text-center hidden-xs-down">
        <?= date("F j"); ?> | <span id="date_day"></span>
      </div>
<?php
if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
else
{?>
      <span id='user_welcome' class="hidden-xs-down">Salut !&nbsp;&nbsp; <?php echo $_SERVER['PHP_AUTH_USER']; ?></span>
<?php } ?>

    </nav><!-- NavBar END -->


    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <!-- Separator with title -->

                <!-- /END Separator -->
                <!-- Etude & Formation -->
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMTSURBVFhH7VdJaBRBFG0X3ED04EEvHiReAhLS3ZMEFXJSRBQ3chcjLkEMijcD8SaBKEbjVLUI8aAiwaMoXjIiImJcQY1d1TIajQqCC/FiJI7v19ToTHVNZJwFBB88Zqq66v1Xv6r+9Dj/NFoH0nOcTGaabtYOLcdG53pMHADf+1w8TrBoS02MUGCfiU6Pi3c+l5l8ekw+BDdVxQil2uXhfgQaMwPHyMR9ZGVjRYzU9YnZWNU+j8s31mBTENsz7CbFBi1VGuoHn8zCSjoQ/LVNvBTCyF2PReu19NSgwNjfPeCoTawsMnknweU6HaoQasU82oW9e2mdXEEiI7ddLtbq0I6TYOF27HHaNri6FLewNaucJibq0ZD2QdUhFvwdPO0FzxepLGB/rsBEqjZGRMrl0QoVOAdlgMmj+todxsDx+MQyycQrVTFtyBnQTcflz5YgRecx6YdVrBQy+ZUWRVVUy8dhGsgBhaSFCopV+E/Mmr/oBS+WarnisBlQNSGQbW2DmRl+UuzA87exIEWI7D1A4NXqRyuQm7VkcdgMuFzuVGJM3oCBRgguwKp6Me6bGfAXmfyAjLU73ZnpPg+30r7j0E029ss6LWuHzQDaI7/FxSSEA7o2JIbv14zAE2SuYSC9sImFDdkblfeci1Na1g7TgJ8MlxUKaDLxCek92NqdmkllFUZCMkO1hMypu407bs5DX1pLW4CfTQgPYdAJ3YP0i72mSD4x9ikZoPNBZjC/A6v8aBubYzOLlmv5QlBqIaCum8fC3dSHbCRNATvFPVqd/ZnBpNimAprAw3GYaKd9wveb1If21YLJlSCTh1RAE3hwHau4jE86dD3Uh/ajmEC5ZLJPBTRB95W2AEG/JPrTi6kPbVwfi0gZpK1WAW3AC8gZOni6WRUDyMAFLR+HF4zNy3+JpMOIAnQERk7SRLgfxmfxAmSSic/gEHgO7eMeD7ugsUbL/x2orNJLJoQuwcxELChdQxQjvD03UyXU06oDqoYImK12dIVxwFaeHZmvH9cGVICyt0d06q7aQ/03/I+y4Dg/ARNtknf9NSHVAAAAAElFTkSuQmCC">
                        <span class="menu-collapsed dots" title="Education & Formation">Education & Formation</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu Etude & Formation -->
                <div id='submenu1' class="collapse sidebar-submenu">
                    <a href="#" data-target-container="ciscoHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Cours Cisco</span>
                    </a>
                    <a href="#" data-target-container="linuxHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Cours Linux</span>
                    </a>
                    <a href="#" data-target-container="biblioHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Bibliothèque</span>
                    </a>
                </div>
                <!-- Messagerie -->
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOWSURBVFhH7VZpT1NBFK1f/Et+139DAMNm2ASj4tKHFKIJitLX0oddoK+lyBooUBZrK1RkXyVgZJEtsSJF4Th32ves5YEIJfqBm5xO5s6de07vzJ1Wd2H/lZWmiNf0WSZXaboYfpQqQrgubgtZoiykVF+JhZyPFRc7LgsZ5ucPc0zhQsl2kN3tRKbfBRpvsjn5SzNMldDhUmxLck3IEKtL7lrC2f0yMgOuQ8gakEHr+kxTRWxL8kxINV7V54hhx3gPXDN9Kqlpogs5QfcvEX0yynItB3Q0yYAh3XRguuMUdQI7cyrzs7FOTC2PqITBxSEMLYV+E1Ek2eEWvUiGffsa4SJ0+nRjOKfLiWxGNLs8iu6FAIoHX3FiEhAvguKeFFiB77tnwv7uDnzya14JHX3QhSOCgkEPfAtBrK9PIbI1r+LlZE+0CiyuPKuGyd8+NbaWPkJ6IMP52BMVQK1G30wpswKlAqH4CnhZBfJrNROfBGP9w6jMlRBs6cXe5nxMALsD1HqJAugOxJMTiiw2uI3tmsmPQ2R7Hc1sn3jbgU8TI9hjVSVEBbBHhvo8sQVrWdnjyakLyvMt+DQ1r0lyFJan5/Gi2I42cyt21mZUclUAb8UM8Rn1OfV7vAgFJE64XwtJ78bBzpYmUSIoLtDs5yWf6Av8RnxIAL1w+kxzRekN816RZMMNuhPswtFIrWfIs6DF0gqrIKOuohHhtRVNUgXh1RUW5+HxmwsTmuQEVYBi5HBVNbJWk1CebcbjPAkNxmYsjrzjGyIbc+iVvXiaV4u50KQm+dzgOF+nOIpPJI2HpgCtQAXhlRmM9vix8C6EqkIrvNYu/PiywYlppDn5P4SG+E3/sjytmUfBXwkY8/nxNP8lOqR2Pqfk7spGmO/V421bEOaSej4nf2RzDu01bTx+lO1LzKXgRALWZkbhMLhRU1KHxffRo4jHuO8NWsQWPiauLY0Mo4YJdJS5sMryJK4fK2Dn8yx8dZ3qw7H7h/M8CnQPaD/l6XF08rzK2pECpv1BfpavqprY0zmpbjgLKA/lo7yUn3yaAuQnHhhv2dltHjqUJBmgvJRf/S2IN3IMNHTj2/rpyn1SUH7i0RQw2NaHQJOPBz4vsvHxvHyaAt64mtFrd2Nr0ouqAgsfX9c1oNeWRF99A/qdTYcFGNJM+yvDHTzovEE8hjRxP0YdNetDu4c5k/a/7zgQj3TPWh+jvrAL+1em0/0ECQ+c6xR87UcAAAAASUVORK5CYII=">
                        <span class="menu-collapsed dots" title="Messagerie">Messagerie</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu Messagerie -->
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="#" data-target-container="zimbraHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">service</span>
                    </a>
                    <a href="#" data-target-container="supportHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Support</span>
                    </a>
                </div>
                <!-- Système d'information -->
                <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALASURBVFhH7Zc9aBRBGIYX/9BGMbndMxr/QPwDewsb0eBfq4WCKAqCgo1NrFzIzVyOgJUkGtCb3cQLmEKxsFALAyKpbFQQBVFRE7CIOVQQROPz7U0Cya7e6WUDwr3wMnMz3877znyzN7POJNxQ7XEDdc8zuuwFeiIVGj0Cw+arHZusbAU0XvCM+omBkmvUIS/M7U6DmaI64QZ6GI0vXlG3ReIy80gc4aghbfj+PCbczYp8ain5GWav7uLquu2eE6w1/mJW+zVsd7xAjWPgoO2bM6B52TX6Jgb0RMaoA7bdWRF2bKmsivpIOTZLfIfOtaZ+f6mVkYl3koqH0w0MDs5H+BX74bYX5A7LvpgVhvljCD7HSDHSAYkGMmF+o/xuCtSq1hsXl4gJAk/Vw0yg9snYGDmO4IjUBfTFDXjFjm3ye3lvYRllFwHlaEXqIGN8zxTz+3ntjiA6HqmDqgZ4uMSS9UTRdYCZv2XDnW4YaBhoGGgY+A8NGKUx8Q0TSadb7Qz0D4R21WTA7ctvkN8tYWGN88Bf4Jr8Xowkn3A1EhPbZeys0ScRfC91QaIBuS5xSXjGQ0Nc1c4QlHjC/TXD3DnS8AbBS5EOoD3BAMiaznWYGMDEC1IQP90CNSrLOqPtg4xDXa5Z0+Ir1E/o75Ij3sr83kA1SCwPT+VS4Ia5HTKO7B3bVBU1G1hZzK0m+M7kbKhXXQHqL8n/Fae3d6EdJoaaDdBv4GMeSM5vAknhWQb/zCY+aoeJgThrgG+CPxogSEz+CzFy3g4TQ8WAGpLKqFwabXsM2UDvnPlq1cpmozfbYWIgVSWhzDBklw7Ljdj2pY6m/kIruuVo4uISA19p6JYvFhuTGuTGTXoeyas5tUn5m2wjH2Oyiyl7MFNIg6Sln7JM+TTbl1sfiU9CPhQx0A5vsXnup8QBWfatg/6iiqrj/AKwzzkT7NtrvQAAAABJRU5ErkJggg==">
                        <span class="menu-collapsed dots" title="Système d'information">Système d'information</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu Système d'information -->
                <div id='submenu3' class="collapse sidebar-submenu">
                    <a href="#" data-target-container="dashboardHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">dashboard</span>
                    </a>
                    <a href="#" data-target-container="morpheusHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Morpheus</span>
                    </a>
                </div>
                <!-- Service aux étudiants -->
                <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANRSURBVFhH1VdbSxVRFJ4uREVR0QW6PBQEQUFBoh1n72F6ELSz92iWB4oe6qULVARFZRBF9BhEEARG1EMZRQ89KL70F7qAKEKU4mVmzjmKYKVRmqdvbZeYoXZ0jgN9sJiZtfbs9e211r5Zc0G23NnoayGDpDgUauGFyinJpNwVbJ4f9FbaK0MlrkHeB1qOhlrmAiW/hEoO0TuePwIt3qQ9eTR301rIvxUGvpIn4aAPDn08bwe6tLjDdZey2eqoclcHyk4iGnWGkBKtaU8k2Dx35FKpRYESTzDin+i8tqsmsYxN0wKR2gSi9fRPoO0zrJ49cpa1AKF9BsfZtLZLWZ038N9ZEPkVes4JVs0OGPklhHMwTMp9rJo1xkiIEV87e1mVH8IqdysK6hucn2fVnIF6eA15l3Pdxaz6N5C/eyDQXIhq7q5wt3ANeayaGVTdaNwfqYD+Avp7hVQ08OfMoOlj5nV16QZWRQZq6QillGYVq6YH5R056+LPgiDjJbabQXliF6umhq9ENS0ktNKB8XVWRwLVEfps4pXTx7TcxqYJ+LpoOZzeN0srVjO8X4QMsDkS0GcROae9A88PFF3IOTZPMESRtKNxBgRqw6Sj6CduEgnsONdfVrYKUW2ErzbIIOSKaZD2nCp8DPHcb553Alo88JV9jHz62l2HOS8aMfJH1DguAhR1vH8OtXOZltwO2u2ocVwESA+/zyGPaY4OpZVdaZQxEkAh3oXvJlp2P8FwmpTxRkC+xPtDs1ng44VRxlUD2Jjw7Dabna+cchiGcZTaHRcBDPgU8v+VTlLm4AFFPQxZSP98E6CiR+7p/GjSbtCS2rkEtXAD6eg1ZJS4hUZ9bI6EjBJ7iMDYMi9aSeCjhs2TAVYHKDR4DlOYWB0ZiOpTIoFBtdGRntVTgw6edATnz4KgSyU2jxFwSlgVLxDV47Te5HOqzgvmkkKFqmRqXHoq7R1snoSgQq5HOn2koY5V0UBXMNTIR3T4nWcNjm9yAKMcCbRzuFPJNSREiI51INcJAi00C7iLaEAV74fDURoZqwxAoMHk+U/BrAKBOwWtqZ6DxWvRKa5poh1O3hox90UxTLsbRltEQtt7we+I46DO00pcCJPi6rgESVnB5v8JlvUbGcpdvMMPeyIAAAAASUVORK5CYII=">
                        <span class="menu-collapsed" title="Cloud et Stockage">Cloud et Stockage</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu Service aux étudiants -->
                <div id='submenu4' class="collapse sidebar-submenu">
                    <a href="#" data-target-container="cloudHolder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed dots">Cloud local</span>
                    </a>
                    <a href="#" id="office365" data-target-container="service2Holder" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Cloud Office 365</span>
                    </a>
                </div>
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- MAIN -->
        <div id="main_container" class="col">
            <div id="mainHolder" class="container-fluid holder visible text-center">
                <h1 id="welcome">Bienvenu(e) sur l'intranet de l'IUC</h1>
            </div>
            <!-- FIRST CAT (Etude & Formation) - 16:9 aspect ratio -->
            <div id="ciscoHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="ciscoFrame" id="ciscoFrame" class="embed-responsive-item" src="http://192.168.0.36/cisco"></iframe>
            </div>
            <div id="linuxHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="linuxFrame" id="linuxFrame" class="embed-responsive-item" src="http://192.168.0.36/eof/index/"></iframe>
            </div>
            <div id="biblioHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="biblioFrame" id="biblioFrame" class="embed-responsive-item" src="http://192.168.0.27"></iframe>
            </div>
            <!-- SECOND CAT (Messagerie) - 16:9 aspect ratio -->
            <div id="zimbraHolder" class="embed-responsive embed-responsive-16by9 holder">
                <iframe id="zimbraFrame" name="zimbraFrame" class="embed-responsive-item" src="http://192.168.0.119"></iframe>
            </div>
            <div id="supportHolder" class="embed-responsive embed-responsive-16by9 holder">
                <iframe name="supportFrame" id="supportFrame" class="embed-responsive-item" src="http://support.myiuc.lan"></iframe>
            </div>
            <!-- THIRD CAT (Système d'information) - 16:9 aspect ratio -->
            <div id="dashboardHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="dashboardFrame" id="dashboardFrame" class="embed-responsive-item" src="http://192.168.0.25/Dashboard/index.php"></iframe>
            </div>
            <div id="morpheusHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="morpheusFrame" id="morpheusFrame" class="embed-responsive-item" src="http://support.myiuc.lan"></iframe>
            </div>
            <!-- FOURTH CAT (Service aux Etudiants) - 16:9 aspect ratio -->
            <div id="cloudHolder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="cloudFrame" id="cloudFrame" class="embed-responsive-item" src="https://web.testons.net"></iframe>
            </div>
            <div id="service2Holder" class="embed-responsive embed-responsive-16by9 holder">
              <iframe name="service2Frame" id="service2Frame" class="embed-responsive-item" src="http://support.myiuc.lan"></iframe>
            </div>

        </div><!-- Main Col END -->
    </div><!-- body-row END -->
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            setInterval(function(){
              document.getElementById("date_day").innerHTML = (new Date()).toLocaleTimeString();
            }, 1000);
        });


    </script>
  </body>
</html>
