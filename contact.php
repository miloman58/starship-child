<?php
/*
Template Name: Форма обратной связи
*/
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starship
 */

get_header(); ?>

<div class="col-sm-8 blog-main">

	<div class="blog-post">
       <div class="blog-page">
				 <!--Contact form -->
				 <?php
				 $action=$_REQUEST['action'];
				 if ($action=="")    /* display the contact form */
				     {
				     ?>
				     <form  action="" method="POST" enctype="multipart/form-data">
				     <input type="hidden" name="action" value="submit">
				     Ваше имя:<br>
				     <input name="name" type="text" value="" size="30"/><br>
				     Ваш email:<br>
				     <input name="email" type="text" value="" size="30"/><br>
				     Ваше сообщение:<br>
				     <textarea name="message" rows="5" cols="30"></textarea><br>
				     <input  type="submit" value="Отправить"/>
				     </form>
				     <?php
				     }
				 else                /* send the submitted data */
				     {
				     $name=$_REQUEST['name'];
				     $email=$_REQUEST['email'];
				     $message=$_REQUEST['message'];
				     if (($name=="")||($email=="")||($message==""))
				         {
				         echo "Все поля обязательные для заполнения, пожалуйста <a href=\"\">заполните форму</a> еще раз.";
				         }
				     else{
				         $from="From: $name<$email>\r\nReturn-path: $email";
				         $subject="Сообщение отправлено с помощью контактной формы";
				         mail("zachatieinfo.ru@yandex.ru", $subject, $message, $from);
				         echo "Сообщение отправлено!";
				         }
				     }
				 ?>


    </div>    <!-- /.blog-page -->
		</div><!-- /.blog-post -->

	</div><!-- /.blog-main -->

<?php
get_sidebar();
get_footer();
