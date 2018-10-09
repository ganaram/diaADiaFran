<?php 
  $name = "Guillermo";
  $surname = "Cano";
  $age = "19";

  $trabajos = [
    "PHP Developer",
    "Python Developer",
    "DevOps"
  ];
  $skillsAndTools =[
    "Backend" => ["PHP"],
    "Frontend" => ["HTML","CSS"],
    "Frameworks" => ["Laravel","Boostrap"],
    "Languajes" => ["Spanish","English"]
  ];

  $ciudades = [
    "Spain" => ["Sevilla","Madrid","Barcelona"],
    "Germany" => ["Berlin","Munich","Hamburgo"],
    "USA" => ["Los Ángeles", "Houston", "Seattle"]
  ];

  foreach($ciudades as $pais => $cities){
    echo "<h1>{$pais}</h1>";
    echo "<ul>";
    foreach($cities as $ciudad){
      echo "<li>{$ciudad}</li>";
    }
    echo "</ul>";
  }


?>
<!-- Vardump muestra valores de PHP y die lo muestra y detiene la ejecucion del script. Tambien
se puede usar die solo, para terminar el script. -->
<!-- Si quiero imprimir las ciudades de, solamente españa, seria con var_dump($ciudades["Spain"]) -->
<!-- Con el for each se puede anidar otro for each, haciendo dos bucles donde imprimimos paises
con sus ciudades correspondientes, ademas de sus ciudades en una lista -->
<!doctype html>

<html lang="en">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"

    crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">



  <title>Resume</title>

</head>



<body>

  <div class="container">

    <div id="resume-header" class="row">

      <div class="col-3">

        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">

      </div>

      <div class="col">

        <h1> <?php echo "$name $surname"; ?> </h1>
        <!-- Para imprimir varias variables,se puede poner entre comillas dobles, donde
        se interpretará como un string, pero pillará las variables con sus valores, además de lo que
        queramos añadir, en este caso, el espacio entre nombre y apellido -->

        <h2>PHP Developer</h2>

        <ul>

          <li>Mail: hector@mail.com</li>

          <li>Phone: 1234567890</li>

          <li>LinkedIn: https://linkedin.com</li>

          <li>Twitter: @hectorbenitez</li>

        </ul>

      </div>

    </div>

    <div class="row">

      <div class="col">

        <h2 class="border-bottom-gray" >Carrer Summary</h2>

        <p>

          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </p>

      </div>

    </div>

    <div class="row">

      <div class="col">

        <div>

          <h3 class="border-bottom-gray" >Work Experience</h3>

          <ul>

            <li class="work-position">

              <h5><?=$trabajos[0]?></h5>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>

              <strong>Achievements:</strong>

              <ul>

                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

              </ul>

            </li>

            <li class="work-position">

                <h5><?=$trabajos[1]?></h5>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>

                <strong>Achievements:</strong>

                <ul>

                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                </ul>

              </li>

              <li class="work-position">

                  <h5><?=$trabajos[2]?></h5>

                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>

                  <strong>Achievements:</strong>

                  <ul>

                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>

                  </ul>

                </li>

          </ul>

        </div>

        <div>

            <h3 class="border-bottom-gray">Projects</h3>

            <div class="project">

                <h5>Project X</h5>

                <div class="row">

                    <div class="col-3">

                        <img class="img-fluid" id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">

                      </div>

                      <div class="col">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>

                        <strong>Technologies used:</strong>

                        <span class="badge badge-secondary">PHP</span>

                        <span class="badge badge-secondary">HTML</span>

                        <span class="badge badge-secondary">CSS</span>

                      </div>

                </div>

            </div>

            <div class="project">

                <h5>Project X</h5>

                <div class="row">

                    <div class="col-3">

                        <img class="img-fluid" id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">

                    </div>

                    <div class="col">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>

                        <strong>Technologies used:</strong>

                        <span class="badge badge-secondary">PHP</span>

                        <span class="badge badge-secondary">HTML</span>

                        <span class="badge badge-secondary">CSS</span>

                    </div>

                </div>

            </div>

          </div>

      </div>

      <div class="col-3">

        <h3 class="border-bottom-gray" >Skills & Tools</h3>

        <?php
        foreach ($skillsAndTools as $skill => $skillList) : ?>
          <h4><?=$skill?></h4>
          <ul>
          <?php foreach ($skillList as $name) : ?>
           <li><?=$name?></li>
            <?php endforeach;?>
          </ul>
            <?php endforeach;?>
        
        

      </div>

    </div>

    <div id="resume-footer" class="row">

      <div class="col">

          Designed by @frandelgado

      </div>

    </div>

  </div>



  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"

    crossorigin="anonymous"></script>

</body>



</html>