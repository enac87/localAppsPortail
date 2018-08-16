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

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body onload="startTime()">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a id="prev" class="nav-link" href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFNSURBVFhH7ZZbSsNAFIazCN1BmW5A63q8Lao0vjRP9UKCYHUDVfBF8bIGUesFFLy1jHPKORjCf2qEgfNgfvieOv98k7RNTtKkSTVbrcFizxW7qSte0nbhoxD2oj27bn+BNXpSl+/BTWLg8h3W6Om5/BWWYxDuBGv0wGJEWKMHlX4jWxn6/vIB/KwKa/Sg0jyyztCPr5/9/dVTrUOwRg8qaWRBSHLJzekYrivDGj2ohKCrpauWfL1N/OHqCK4twxo9qFSlvxTklz/yCcnXjuHaKqzRg0plSH53UZK/T/3Rej05wRo9qCTM5OePrA7yjyDfqC8nWKMHlQiS3549sNr76WeQb57AtfNgjR5UIswPQJh+BYLpj1CgQ5j9DQXTB5Fg+igWTF9Ggunr+K+wRo/9SBYGR1iOQr7NGj00Os8OEXssbxeDWmN5k3+WJPkGq8jKA192mCYAAAAASUVORK5CYII="> Précédent<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a id="forw" class="nav-link" href="#">Suivant <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFRSURBVFhH7ZZbSsNAGIWziHYHMt1A1e3U26Kk8aV9qhcSCm2zARV8UWxdg2iqFRS8tOV3JvzikJ4/rTg4D+bA95Q5cw4zyWSCUqXyOljrVJsqPg5V/BzWYnKCnsvMua+6FY6RFaroBE7iAhUdcYyspopeoNkFeiU4RhY0OoRjZCFTntZ6j9qbffhsGRwjC5lsWvUepcMJjW+eqL3x8xIcIwuZbG4vUvpSVkKvBhonwTGykMlmsHVK09cZVyBKR5NsS9BYBMfIQqY8g+0zmtkl9JaYrUFj83CMLGRCJDu6xNucKxDdX69WgmNkIZNEsqtLvFslrh6XluAYWchURLJ3TvOP7xJ3lw+FJThGFjIV4bWA1y3w+hIunAV/+Rn2G54PIu9HsVlqrz8jg9ff8W/hGFn+r2T64gjNTogOOUaWuTpnJVxfy2txZ6Vreal/piD4BM/myfgnTc0uAAAAAElFTkSuQmCC"><span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
      <div id="dateHolder" class="text-center">
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
      <span id='user_welcome'>Bienvenu(e) <?php echo $_SERVER['PHP_AUTH_USER']; ?></span>
<?php } ?>

    </nav>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <aside class="main_sidebar">
              <ul>
                  <!-- first category -->
                  <li class='active'><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMTSURBVFhH7VdJaBRBFG0X3ED04EEvHiReAhLS3ZMEFXJSRBQ3chcjLkEMijcD8SaBKEbjVLUI8aAiwaMoXjIiImJcQY1d1TIajQqCC/FiJI7v19ToTHVNZJwFBB88Zqq66v1Xv6r+9Dj/NFoH0nOcTGaabtYOLcdG53pMHADf+1w8TrBoS02MUGCfiU6Pi3c+l5l8ekw+BDdVxQil2uXhfgQaMwPHyMR9ZGVjRYzU9YnZWNU+j8s31mBTENsz7CbFBi1VGuoHn8zCSjoQ/LVNvBTCyF2PReu19NSgwNjfPeCoTawsMnknweU6HaoQasU82oW9e2mdXEEiI7ddLtbq0I6TYOF27HHaNri6FLewNaucJibq0ZD2QdUhFvwdPO0FzxepLGB/rsBEqjZGRMrl0QoVOAdlgMmj+todxsDx+MQyycQrVTFtyBnQTcflz5YgRecx6YdVrBQy+ZUWRVVUy8dhGsgBhaSFCopV+E/Mmr/oBS+WarnisBlQNSGQbW2DmRl+UuzA87exIEWI7D1A4NXqRyuQm7VkcdgMuFzuVGJM3oCBRgguwKp6Me6bGfAXmfyAjLU73ZnpPg+30r7j0E029ss6LWuHzQDaI7/FxSSEA7o2JIbv14zAE2SuYSC9sImFDdkblfeci1Na1g7TgJ8MlxUKaDLxCek92NqdmkllFUZCMkO1hMypu407bs5DX1pLW4CfTQgPYdAJ3YP0i72mSD4x9ikZoPNBZjC/A6v8aBubYzOLlmv5QlBqIaCum8fC3dSHbCRNATvFPVqd/ZnBpNimAprAw3GYaKd9wveb1If21YLJlSCTh1RAE3hwHau4jE86dD3Uh/ajmEC5ZLJPBTRB95W2AEG/JPrTi6kPbVwfi0gZpK1WAW3AC8gZOni6WRUDyMAFLR+HF4zNy3+JpMOIAnQERk7SRLgfxmfxAmSSic/gEHgO7eMeD7ugsUbL/x2orNJLJoQuwcxELChdQxQjvD03UyXU06oDqoYImK12dIVxwFaeHZmvH9cGVICyt0d06q7aQ/03/I+y4Dg/ARNtknf9NSHVAAAAAElFTkSuQmCC"> Etude & Formation</li>
                  <li class="sub" data-target-container="ciscoHolder">Cours Cisco</li>
                  <li class="sub" data-target-container="linuxHolder">Cours Linux</li>
                  <li class="sub" data-target-container="biblioHolder">Bibliothèque</li>
                  <!-- Next Category : Messagerie -->
                  <li class='active'><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOWSURBVFhH7VZpT1NBFK1f/Et+139DAMNm2ASj4tKHFKIJitLX0oddoK+lyBooUBZrK1RkXyVgZJEtsSJF4Th32ves5YEIJfqBm5xO5s6de07vzJ1Wd2H/lZWmiNf0WSZXaboYfpQqQrgubgtZoiykVF+JhZyPFRc7LgsZ5ucPc0zhQsl2kN3tRKbfBRpvsjn5SzNMldDhUmxLck3IEKtL7lrC2f0yMgOuQ8gakEHr+kxTRWxL8kxINV7V54hhx3gPXDN9Kqlpogs5QfcvEX0yynItB3Q0yYAh3XRguuMUdQI7cyrzs7FOTC2PqITBxSEMLYV+E1Ek2eEWvUiGffsa4SJ0+nRjOKfLiWxGNLs8iu6FAIoHX3FiEhAvguKeFFiB77tnwv7uDnzya14JHX3QhSOCgkEPfAtBrK9PIbI1r+LlZE+0CiyuPKuGyd8+NbaWPkJ6IMP52BMVQK1G30wpswKlAqH4CnhZBfJrNROfBGP9w6jMlRBs6cXe5nxMALsD1HqJAugOxJMTiiw2uI3tmsmPQ2R7Hc1sn3jbgU8TI9hjVSVEBbBHhvo8sQVrWdnjyakLyvMt+DQ1r0lyFJan5/Gi2I42cyt21mZUclUAb8UM8Rn1OfV7vAgFJE64XwtJ78bBzpYmUSIoLtDs5yWf6Av8RnxIAL1w+kxzRekN816RZMMNuhPswtFIrWfIs6DF0gqrIKOuohHhtRVNUgXh1RUW5+HxmwsTmuQEVYBi5HBVNbJWk1CebcbjPAkNxmYsjrzjGyIbc+iVvXiaV4u50KQm+dzgOF+nOIpPJI2HpgCtQAXhlRmM9vix8C6EqkIrvNYu/PiywYlppDn5P4SG+E3/sjytmUfBXwkY8/nxNP8lOqR2Pqfk7spGmO/V421bEOaSej4nf2RzDu01bTx+lO1LzKXgRALWZkbhMLhRU1KHxffRo4jHuO8NWsQWPiauLY0Mo4YJdJS5sMryJK4fK2Dn8yx8dZ3qw7H7h/M8CnQPaD/l6XF08rzK2pECpv1BfpavqprY0zmpbjgLKA/lo7yUn3yaAuQnHhhv2dltHjqUJBmgvJRf/S2IN3IMNHTj2/rpyn1SUH7i0RQw2NaHQJOPBz4vsvHxvHyaAt64mtFrd2Nr0ouqAgsfX9c1oNeWRF99A/qdTYcFGNJM+yvDHTzovEE8hjRxP0YdNetDu4c5k/a/7zgQj3TPWh+jvrAL+1em0/0ECQ+c6xR87UcAAAAASUVORK5CYII="> Messagerie</li>
                  <li class="sub" data-target-container="zimbraHolder">Zimbra</li>
                  <li class="sub" data-target-container="supportHolder">Support</li>
                  <!-- Next Categorsy : Systeme d'information -->
                  <li class='active'><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALASURBVFhH7Zc9aBRBGIYX/9BGMbndMxr/QPwDewsb0eBfq4WCKAqCgo1NrFzIzVyOgJUkGtCb3cQLmEKxsFALAyKpbFQQBVFRE7CIOVQQROPz7U0Cya7e6WUDwr3wMnMz3877znyzN7POJNxQ7XEDdc8zuuwFeiIVGj0Cw+arHZusbAU0XvCM+omBkmvUIS/M7U6DmaI64QZ6GI0vXlG3ReIy80gc4aghbfj+PCbczYp8ain5GWav7uLquu2eE6w1/mJW+zVsd7xAjWPgoO2bM6B52TX6Jgb0RMaoA7bdWRF2bKmsivpIOTZLfIfOtaZ+f6mVkYl3koqH0w0MDs5H+BX74bYX5A7LvpgVhvljCD7HSDHSAYkGMmF+o/xuCtSq1hsXl4gJAk/Vw0yg9snYGDmO4IjUBfTFDXjFjm3ye3lvYRllFwHlaEXqIGN8zxTz+3ntjiA6HqmDqgZ4uMSS9UTRdYCZv2XDnW4YaBhoGGgY+A8NGKUx8Q0TSadb7Qz0D4R21WTA7ctvkN8tYWGN88Bf4Jr8Xowkn3A1EhPbZeys0ScRfC91QaIBuS5xSXjGQ0Nc1c4QlHjC/TXD3DnS8AbBS5EOoD3BAMiaznWYGMDEC1IQP90CNSrLOqPtg4xDXa5Z0+Ir1E/o75Ij3sr83kA1SCwPT+VS4Ia5HTKO7B3bVBU1G1hZzK0m+M7kbKhXXQHqL8n/Fae3d6EdJoaaDdBv4GMeSM5vAknhWQb/zCY+aoeJgThrgG+CPxogSEz+CzFy3g4TQ8WAGpLKqFwabXsM2UDvnPlq1cpmozfbYWIgVSWhzDBklw7Ljdj2pY6m/kIruuVo4uISA19p6JYvFhuTGuTGTXoeyas5tUn5m2wjH2Oyiyl7MFNIg6Sln7JM+TTbl1sfiU9CPhQx0A5vsXnup8QBWfatg/6iiqrj/AKwzzkT7NtrvQAAAABJRU5ErkJggg=="> Système d'information</li>
                  <li class="sub" data-target-container="dashboardHolder">Dashboard</li>
                  <li class="sub" data-target-container="morpheusHolder">Morpheus</li>
                  <!-- Next Category : Service aux etudiants -->
                  <li class='active'><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANRSURBVFhH1VdbSxVRFJ4uREVR0QW6PBQEQUFBoh1n72F6ELSz92iWB4oe6qULVARFZRBF9BhEEARG1EMZRQ89KL70F7qAKEKU4mVmzjmKYKVRmqdvbZeYoXZ0jgN9sJiZtfbs9e211r5Zc0G23NnoayGDpDgUauGFyinJpNwVbJ4f9FbaK0MlrkHeB1qOhlrmAiW/hEoO0TuePwIt3qQ9eTR301rIvxUGvpIn4aAPDn08bwe6tLjDdZey2eqoclcHyk4iGnWGkBKtaU8k2Dx35FKpRYESTzDin+i8tqsmsYxN0wKR2gSi9fRPoO0zrJ49cpa1AKF9BsfZtLZLWZ038N9ZEPkVes4JVs0OGPklhHMwTMp9rJo1xkiIEV87e1mVH8IqdysK6hucn2fVnIF6eA15l3Pdxaz6N5C/eyDQXIhq7q5wt3ANeayaGVTdaNwfqYD+Avp7hVQ08OfMoOlj5nV16QZWRQZq6QillGYVq6YH5R056+LPgiDjJbabQXliF6umhq9ENS0ktNKB8XVWRwLVEfps4pXTx7TcxqYJ+LpoOZzeN0srVjO8X4QMsDkS0GcROae9A88PFF3IOTZPMESRtKNxBgRqw6Sj6CduEgnsONdfVrYKUW2ErzbIIOSKaZD2nCp8DPHcb553Alo88JV9jHz62l2HOS8aMfJH1DguAhR1vH8OtXOZltwO2u2ocVwESA+/zyGPaY4OpZVdaZQxEkAh3oXvJlp2P8FwmpTxRkC+xPtDs1ng44VRxlUD2Jjw7Dabna+cchiGcZTaHRcBDPgU8v+VTlLm4AFFPQxZSP98E6CiR+7p/GjSbtCS2rkEtXAD6eg1ZJS4hUZ9bI6EjBJ7iMDYMi9aSeCjhs2TAVYHKDR4DlOYWB0ZiOpTIoFBtdGRntVTgw6edATnz4KgSyU2jxFwSlgVLxDV47Te5HOqzgvmkkKFqmRqXHoq7R1snoSgQq5HOn2koY5V0UBXMNTIR3T4nWcNjm9yAKMcCbRzuFPJNSREiI51INcJAi00C7iLaEAV74fDURoZqwxAoMHk+U/BrAKBOwWtqZ6DxWvRKa5poh1O3hox90UxTLsbRltEQtt7we+I46DO00pcCJPi6rgESVnB5v8JlvUbGcpdvMMPeyIAAAAASUVORK5CYII="> Service aux Etudiants</li>
                  <li class="sub" data-target-container="service1Holder">Service 1</li>
                  <li class="sub" data-target-container="service2Holder">Service 2</li>
              </ul>
          </aside>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-wrapper">

            <div class="holder-container">
              <div id="main" class="container-fluid holder visible text-center">
                  <h1 id="welcome">Bienvenue au Numérique Educatif</h1>
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
                  <iframe id="zimbraFrame" name="zimbraFrame" class="embed-responsive-item" src="https://192.168.0.110"></iframe>
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
              <div id="service1Holder" class="embed-responsive embed-responsive-16by9 holder">
                <iframe name="service1Frame" id="service1Frame" class="embed-responsive-item" src="http://support.myiuc.lan"></iframe>
              </div>
              <div id="service2Holder" class="embed-responsive embed-responsive-16by9 holder">
                <iframe name="service2Frame" id="service2Frame" class="embed-responsive-item" src="http://support.myiuc.lan"></iframe>
              </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('date_day').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }

    </script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
