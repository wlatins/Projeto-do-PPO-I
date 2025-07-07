   <?php
    if ($_SESSION['logado']) {
    ?>
       <nav>
           <ul>
               <li style="list-style: none;" class="nav-item"><a href="index.php"
                       style="text-decoration: none;">Home</a></li>
               <li style="list-style: none;" class="nav-item"><a href="quem_somos.php"
                       style="text-decoration: none;">Quem Somos?</a></li>
               <li style="list-style: none;" class="nav-item"><a href="projetospg.php"
                       style="text-decoration: none;">Projetos</a></li>
           </ul>
       </nav>
       <div class="dropdown">
           <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               Dropdown button
           </button>
           <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
               <li><a class="dropdown-item" href="logout.php" id="deslogar">Deslogar</a></li>
           </ul>
       </div>
   <?php
    } else {
    ?>
       <nav>
           <ul>
               <li style="list-style: none;" class="nav-item"><a href="index.php"
                       style="text-decoration: none;">Home</a></li>
               <li style="list-style: none;" class="nav-item"><a href="quem_somos.php"
                       style="text-decoration: none;">Quem Somos?</a></li>
               <li style="list-style: none;" class="nav-item"><a href="projetospg.php"
                       style="text-decoration: none;">Projetos</a></li>
           </ul>
       </nav>
       <div>
           <ul>
               <li style="list-style: none;" class="log-in"><a href="loginpg.php"
                       style="text-decoration: none;">Clique aqui para logar!</a></li>
           </ul>
    </div>
   <?php
    }
    ?>