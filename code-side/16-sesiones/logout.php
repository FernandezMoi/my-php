<?php

session_start();

/*Si hacemos logout y volvemos a otra página que cargue una variable persistente
 sin haber creado la sesión previamente, dará error
*/

session_destroy();
