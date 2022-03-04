<?php

if ($_POST['index']) {
    session_start();
    $_SESSION['index']='check';
    header('Location: ../view/pagina1.php');
} elseif (isset($_POST['pag1'])) {
        $res1=$_POST['binario'];
        switch ($res1) {
            case '1':
            case '3':
                
                header('Location: ../view/pagina1.php?fallo=true');
                break;   
            case '2':
                session_start();
                $_SESSION['pag1']='check';
                header('Location: ../view/pagina2.php');
                break;
    }
} elseif ($_POST['pag2']) {
    $res21=$_POST['ip1'];
    $res22=$_POST['ip2'];
        if ($res21 == "192.168.15.255" && $res22 == "192.168.15.0") {
            session_start();
            $_SESSION['pag2']='check';
            header('Location: ../view/pagina3.php');
        } else {
            header('Location: ../view/pagina2.php?fallo=true');
        }
} elseif ($_POST['pag3']) {
    $res31=$_POST['PuPri1'];
    $res32=$_POST['PuPri2'];
    $res33=$_POST['PuPri3'];
    $res34=$_POST['PuPri4'];
        switch ($res31) {
            case '1':
                header('Location: ../view/pagina3.php?fallo=true');
                break;
            case '2':
            switch ($res32) {
                case '1':
                    switch ($res33) {
                        case '1':
                            header('Location: ../view/pagina3.php?fallo=true');
                            break;
                        case '2':
                            switch ($res34) {
                                case '1':
                                    header('Location: ../view/pagina3.php?fallo=true');
                                    break;
                                
                                case '2':
                                    session_start();
                                    $_SESSION['pag3']='check';
                                    header('Location: ../view/pagina4.php');
                                    break;
                            }
                            break;
                    }
                    break;
                case '2':
                    header('Location: ../view/pagina3.php?fallo=true');
                    break;
            }
                break;
    }

} elseif ($_POST['pag4']) {
    $res41=$_POST['IP1'];
    $res42=$_POST['IP2'];
    $res43=$_POST['IP3'];
    $res44=$_POST['IP4'];
    $res45=$_POST['IP5'];
        switch ($res41) {
            case '1':
            case '2':
            case '4':
            case '5':
                header('Location: ../view/pagina4.php?fallo=true');
                break;
            case '3':
                switch ($res42) {
                    case '1':
                    case '3':
                    case '4':
                    case '5':
                        header('Location: ../view/pagina4.php?fallo=true');
                        break;
                    case '2':
                        switch ($res43) {
                            case '2':
                            case '3':
                            case '4':
                            case '5':
                                    header('Location: ../view/pagina4.php?fallo=true');
                                    break;
                            case '1':
                                switch ($res44) {
                                    case '1':
                                    case '2':
                                    case '3':
                                    case '5':
                                            header('Location: ../view/pagina4.php?fallo=true');
                                            break;
                                    case '4':
                                        switch ($res45) {
                                            case '1':
                                            case '2':
                                            case '3':
                                            case '4':
                                                    header('Location: ../view/pagina4.php?fallo=true');
                                                    break;
                                            case '5':
                                                session_start();
                                                $_SESSION['pag4']='check';
                                                header('Location: ../view/pagina5.php');
                                                break;
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
        }
} elseif ($_POST['pag5']) {
    $res51=$_POST['IPa1'];
    $res52=$_POST['IPa2'];
    $res53=$_POST['IPa3'];
    $res54=$_POST['IPa4'];
        switch ($res51) {
            case '1':
            case '2':
                header('Location: ../view/pagina5.php?fallo=true');
                break;
            case '3':
                switch ($res52) {
                    case '2':
                    case '3':
                        header('Location: ../view/pagina5.php?fallo=true');
                        break;
                    case '1':
                        switch ($res53) {
                            case '2':
                            case '3':
                                header('Location: ../view/pagina5.php?fallo=true');
                                break;
                            
                            case '1':
                                switch ($res54) {
                                    case '1':
                                    case '2':
                                        header('Location: ../view/pagina5.php?fallo=true');
                                        break;
                                    
                                    case '3':
                                        session_start();
                                        $_SESSION['pag5']='check';
                                        header('Location: ../view/pagina6.php');
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
        }
} elseif ($_POST['pag6']) {
    $res61=$_POST['1a'];
    $res62=$_POST['2a'];
        if ($res61 == '160.120.0.1' and $res62 == '160.120.255.254' ) {
            session_start();
            $_SESSION['pag6']='check';
            header('Location: ../view/pagina7.php');
        } else {
            header('Location: ../view/pagina6.php?fallo=true');
        }
} elseif ($_POST['pag7']) {
    $res71=$_POST['rt7'];
    $res72=$_POST['srv7'];
        switch ($res71) {
            case '1':
            case '2':
            case '4':
                header('Location: ../view/pagina7.php?fallo=true');
                break;
            case '3':
                switch ($res72) {
                    case '1':
                    case '2':
                    case '4':
                        header('Location: ../view/pagina7.php?fallo=true');
                        break;
                    case '3':
                        session_start();
                        $_SESSION['pag7']='check';
                        header('Location: ../view/pagina8.php');
                        break;
                }
                break;
        }
} elseif ($_POST['pag8']) {
    $res81=$_POST['host1'];
    $res82=$_POST['host2'];
    $res83=$_POST['host3'];
    $res84=$_POST['host4'];
        if ($res81== '4') {
            switch ($res82) {
                case '1':
                    if ($res83=='6') {
                        switch ($res84) {
                            case '1':
                                header('Location: ../view/pagina8.php?fallo=true');
                                break;
                            
                            case '2':
                                session_start();
                                $_SESSION['pag8']='check';
                                header('Location: ../view/Final.php');
                                break;
                        }
                    } else {
                        header('Location: ../view/pagina8.php?fallo=true');
                    }
                    break;
                
                case '2':
                    header('Location: ../view/pagina8.php?fallo=true');
                    break;
            }
        } else {
            header('Location: ../view/pagina8.php?fallo=true');
    } 
} elseif ($_POST['finalpag']) {
    header('Location: ./replay.com.php ');
}