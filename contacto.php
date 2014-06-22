<!DOCTYPE html>

<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->

<head>

	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="put a short description in here" />

    <meta name="keywords" content="put your important keywords in here" />

    <meta name="revisit-after" content="7 days" />

    <meta name="robots" content="index,follow" />

	

	<title>II Congreso de Investigación</title>

			

            

            <link rel="stylesheet" href="css/inuit.css" />

            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />

            <link rel="stylesheet" href="css/eve-styles.css" />

            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->

            <link rel="shortcut icon" href="icon.png" />

            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />

           <!--include that only on pages with forms-->

				 

                 <!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->

                  <!--[if lte IE 7]>

                    	<style>

                    		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }

                            .grid-4{ width:22% }

                        </style>

                    <![endif]-->

<style>

div label{

        float: left;

        width: 25%;

      }



      input{



        border: solid 2px black;



      }

      .clase{



        border: solid 2px red;

      }



      .error{



        background: orange;

        border: solid 4px red;



      }



      .msg{

        color: red;



      }</style>



</head>

<!--===============================================================  CODIGO PHP INSCRIPCION =====================================================================================-->



<?php

      //validar formulario

       if ($_POST) {

       

       // var_dump($_POST);



       $nombre = $_POST['nombre'];



       $apellido = $_POST['apellido'];

       

       $dni = $_POST['dni'];



       $correo = $_POST['correo'];



       $localidad = $_POST['localidad'];



       // var_dump($nombre);

       // var_dump($edad);



       $clasenombre = "";

       $claseapellido = "";

       $clasedni = "";

       $clasecorreo = "";

       $claselocalidad = "";



       if ($nombre == "") {



       $msgnombre = "falta especificar el nombre";



       $clasenombre ="error";



      }

       

       if ($apellido == "") {



        $msgapellido = "falta escribir su Apellido";



        $claseapellido = "error";



       }// else{



       //  if(!is_numeric($apellido)){



       //  $msgapellido = "Edad debe ser numeros";



       //  $claseapellido = "error";



       //  }

       // }

        if ($dni == "") {

          $msgdni = "falta especificar su DNI";

          $clasedni = "error";



        }

        else{



        if(!is_numeric($dni)){



       $msgdni = "Su DNI debe ser numerico";



       $clasedni = "error";



       }

       }





       if ($correo == "") {

          $msgcorreo = "falta especificar su correo";

          $clasecorreo = "error";



        }



        if ($localidad == "") {

          $msglocalidad = "falta especificar su localidad";

          $claselocalidad = "error";



        }



       if ($clasenombre == "" && $claseapellido == "" && $clasedni == "" && $clasecorreo == "" && $claselocalidad == "" ) {

        //agregar enviar a grabar datos 



        //echo "Ok";

        //header('location: grabar.php');

        include "conexion.php";



  $nombre = $_POST['nombre'];

  $apellido = $_POST['apellido'];

  $dni = $_POST['dni'];

  $correo = $_POST['correo'];

  $localidad = $_POST['localidad'];



  

$insertar = mysql_query("INSERT INTO validar VALUES (null,'".$nombre."','".$apellido."','".$dni."','".$correo."','".$localidad."')");



if ($insertar) {



  //echo(Registrado);

  //echo "<a href='../loguear.php' >Ver constancia</a>";

  // echo "<a href='contacto.php' id='verPDF' >Ver PDF</a>";

  ?>



<script language="javascript" type="text/javascript">

alert('Registrado');

location.href="index.html";

</script>



  <?php

}else{
?>
<script language="javascript" type="text/javascript">

alert('Ocurrio un error ese DNI ya fue Registrado');

location.href="contacto.php";

</script>
<?php
  //echo "A ocurrido un error";

}



 // sleep( 1 );





       }



       }

       



      ?>





<!--===============================================================  FIN CODIGO PHP INSCRIPCION =====================================================================================-->





<!--===============================================================  Logo, social and menu =====================================================================================--> 

<body>

	<div class="wrapper">	

                     <a href="index.html" id="logo"><img src="img/logo.png" alt="something" />

                      <h1 class="accessibility">ResponseEve, a responsive template by SiGa</h1></a>

                   

                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in-->

                    <!-- <div class="social">

                    <a href="#" title="facebook"><img src="img/facebook.png" width="20" height="20" alt="facebook"></a>

                    <a href="#" title="twitter"><img src="img/twitter.png" width="20" height="20" alt="twitter"></a>

                    <a href="#" title="linkedin"><img src="img/linkedin.png" width="20" height="20" alt="linkedin"></a>

                    <a href="#" title="vcard"><img src="img/vcard.png" width="20" height="20" alt="vcard"></a>

                    <a href="#" title="picasa"><img src="img/picasa.png" width="20" height="20" alt="picasa"></a>

                    </div> -->

                 

                    

                    <ul id="nav" class="main">

                      <li><a href="index.html">Inicio<!--<span>Die Startseite</span>--></a></li>
                        <li><a href="subpage.html" >Ejes</a></li>
                        <li><a href="subpage1.html">Condiciones</a></li>
                        <li><a href="subpage2.html">Operatoria</a></li>
                        <li><a href="subpage3.html">Fechas</a></li>
                        <li><a href="contacto.php"  class="active">Inscripción</a></li>

                    </ul>

                        

        </div><!--end of wrapper div--> 

           

	<div class="clear"></div>    



<!--===============================================================  Left content, address =====================================================================================-->    

     <div class="wrapper">

    

    		<div class="grids top">



                <div class="grid-6 grid">

                          <!--  <h2>Pre - Inscripción </h2>  -->
                            <div>    

                                <p >

                                <br />

                            <!--     Abonar el arancel en su I.E.S<br /> -->
<!-- 
                                Name of State<br />

                                Country<br /><br />

                                Phone: 123 456 789<br />

                                Fax: 123 456 789 - 11<br />

                                Email: jane@some.com
 -->
                              </p> 

                            </div> 

                             

                             

                             <div class="green bottom">   

                               <!--  <h3>Formalize</h3>

                                <p>This subpage includes the great JQuery plugin <strong>

                                <a href="http://formalize.me/" title="Formalize Website">Formalize</a></strong> 

                                by Nathan Smith.

                                <a href="http://formalize.me/" title="Formalize Website">Visit the website</a> to find out what it does and see the demos!

                                You don´t have to use a table as shown here (this is just an example), you can build your form without tables, too.

                                Inspect the CSS to utilize the classes that fit your needs.<br />

                                Comment or delete the section "Forms" in inuit.css when you make use of Formalize so the styles won´t interfere.

                                </p> -->

                             </div>    

                             

                           <!--   <div>    -->

                            <!--     <p class="message warning bottom">

                                <b>Note:</b> This is just a demo for contact form styles and behaviour. <b>It doesn't actually submit anything.</b>

                                To make it work, you will have to include a fitting script.

                              </p> -->

                             <!-- </div>    -->

						</div> 		

                

<!--===============================================================  Contact form =====================================================================================-->                 

                  <div class="grid-10 grid">

                           <h2>Inscripción..</h2>



					<!--An example for a contact form from formalize.me, table in use.</h6>-->

                                  

                       <form  name="form1" method="post"  action="">

                              <table class="form">

                                <tr>

                                  <th>

                                    <label for="name">

                                      Nombre

                                    </label>

                                  </th>

                                  <td>

                                    <!-- <input class="input_full" type="text" id="name" name="name" required="required" /> -->

                        <input type="text" name="nombre"  value="<?php echo $nombre;?>">

                        <span class="msg"><?php echo $msgnombre;?></span>

                                  </td>

                                </tr>

                                <tr>

                                  <th>

                                    <label for="apellido">

                                      Apellido

                                    </label>

                                  </th>

                                  <td>

                                  <input type="text" name="apellido"  value="<?php echo $apellido;?>">

                                  <span class="msg"><?php echo $msgapellido;?></span>

                                    <!-- <input class="input_full" type="apellido" id="apellido" name="apellido" required="required" /> -->

                                  </td>

                                </tr>

                               

                                <tr>

                        

                                  <th>

                                    <label for="dni">

                                      DNI

                                    </label>

                                  </th>

                                  <td>

                                    <input type="text" name="dni" maxlength="8" value="<?php echo $dni;?>">

                                  <span class="msg"><?php echo $msgdni;?></span> 

                                    <!-- <input class="input_full" type="dni" id="dni" name="dni" required="required" /> -->

                                 </td>

                                </tr>

                        

                                <tr>

                                  <th>

                                    <label for="correo">

                                      Correo

                                    </label>

                                  </th>

                                  <td>

                                    <input  type="text" name="correo" value="<?php echo $correo;?>">

                                  <span class="msg"><?php echo $msgcorreo;?></span> 

                                    <!-- <input class="input_full" type="email" id="email" name="email" required="required" /> -->

                                  </td>

                        

                                </tr>

                                <tr>

                                  <th>

                                    <label for="localidad">

                                      Localidad

                                    </label>

                                  </th>

                                  <td>

                                    <input type="text" name="localidad"  value="<?php echo $localidad;?>">

                                  <span class="msg"><?php echo $msglocalidad;?></span> 

                                    <!-- <input class="input_full" type="localidad "id="localidad" name="subject" required="required" />  -->

                                    <!-- <select>

                                      <option value="">Choose subject...</option>

                                      

                                        <option value="1k_2k">Question</option>

                                        <option value="2k_3k">Project</option>

                                        <option value="3k_4k">Feedback</option>

                                        <option value="4k_5k">Other</option>

                        

                                    </select> -->

                                 </td>

                                </tr> 

                                <tr> 

                        

                                  <!-- <th>

                                    <label for="priority_normal">

                                      Priority

                                    </label>

                                  </th>

                                  <td>

                                    <input type="radio" name="priority" id="priority_urgent" value="Urgent">

                                    <label for="priority_urgent">

                                      Urgent

                                    </label>

                        

                                    &nbsp;

                                    &nbsp;

                                    <input type="radio" name="priority" id="priority_normal" value="Normal" checked="checked">

                                    <label for="priority_normal">

                                      Normal

                                    </label>

                                    &nbsp;

                                    &nbsp;

                                    <input type="radio" name="priority" id="priority_low" value="Low">

                        

                                    <label for="priority_low">

                                      Low

                                    </label>

                                  </td>

                                </tr> -->

                                <tr>

                                 <!--  <th>

                        

                                    <label for="description">

                                      Your<br />

                                      message

                                    </label>

                                  </th>

                                  <td>

                                    <textarea id="description" name="description" rows="8" required="required" placeholder="Please write your message here."></textarea>

                                  </td> -->

                        

                                </tr>

                                 <tr>

                                  <th>

                                  <!--   <label for="cc">

                                      <abbr title="Courtesy Copy">CC</abbr>

                                    </label> -->

                        

                                  </th>

                                  <td>

                                   <!--  <input type="checkbox" id="cc" name="cc" value="1" />

                                    <label for="cc">

                                      Send me a copy of this email

                                    </label> -->

                                  </td>

                                </tr>

                              </table>

                        

                              <p>

                                <input type="submit" value="Validar" class="float_left" />

                                <!-- <input type="reset" value="Reset" class="float_right"> -->

                              </p>

                            </form>

                            

                      <!--  <p>(You can of course create your own CSS to style the tables for forms 

                       and hide the borders, for example, like shown here.)</p>    --> 

                           

                </div><!--end of grid-10--> 

			</div><!--end of grids-->

           

	</div><!--end of wrapper-->

    

<!--===============================================================  Footer =====================================================================================-->     

		<div class="wrapper">

				<div id="footer">
              
                
                      <div class="grids">
                                <div class="grid-5 grid text-center">
                                   <p>  ©  <a href="http://direcciondeeduc-superior.blogspot.com.ar/"  target="_blank">M.E.C.C y T</a>
                                    Conctar Igualdad Chaco

      </p> <!-- <p>&copy; Juan daniel <a href="" title="SG-Layout Webdesign - contact me!"> Estevez</a></p> -->
                                </div>
                                <div class="grid-6 grid text-center">
                                    <p>Diseño Web</p><p> <a href="#">Administradores de Red de Educación Superior</a></p>
                                    <!-- <p>Free responsive template v 1.0</p> -->
                                </div>
                                
                                <div class="grid-5 grid text-center">
                                  <!-- <p>Contact me <a href="http://sg-layout.com/kontakt/" title="Contact me!">here</a></p> -->
                                </div>
                                
                           </div><!--end of grids-->
                   </div><!--end of footer-->

		   </div><!--end of wrapper-->

    

    

        

                        

</body>

</html>