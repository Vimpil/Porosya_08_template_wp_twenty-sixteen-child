<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

global $images_folder;
global $template_parts;

get_header();?>

<?php
include 'template-parts/php_logger/ChromePhp.php';
?>

<?php get_template_part($template_parts_dir . '/navigation/topnav');

?>

    <?php get_template_part($template_parts_dir . '/navigation/leftnav');?>
<section class="main">
      <!-- {%- include sitemap.html -%} -->
      <?php get_template_part($template_parts_dir . '/slider');?>
      <h3>Наша спецтехника</h3>
      <?php get_template_part($template_parts_dir . '/gallerymain');?>

      <h3>Преимущества</h3>
      <div class="advantages">
        <div class="box">
          <div class="wrap"><img src="<?php echo $images_folder ?>advant.png" alt="car"></div>
          <div class="description">Обновляемый парк техники</div>
        </div>
        <div class="box">
          <div class="wrap"><img src="<?php echo $images_folder ?>advant2.png" alt=""></div>
          <div class="description">Опытные водители</div>
        </div>
        <div class="box">
          <div class="wrap"><img src="<?php echo $images_folder ?>advant3.png" alt=""></div>
          <div class="description">Прием заказов круглые сутки</div>
        </div>
        <div class="box">
          <div class="wrap"><img src="<?php echo $images_folder ?>advant4.png" alt=""></div>
          <div class="description">Любой вид расчета (наличный, безналичный)</div>
        </div>
      </div>
      <h4>Аренда спецтехники от компании «СтройСоюз»</h4>
      <p>Покупка техники для выполнения строительных и ремонтных работ часто невозможна из-за высокой стоимости. Лучшим решением в этом случае является аренда спецтехники на выгодных условиях, например, в компании «СтройСоюз».</p>
      <p>Сегодня на рынке можно взять в аренду любую технику — от катка до буровой установки. Аренда техники — это выгодная сделка, которая применима в разных сферах: в сельском хозяйстве, в промышленности, при строительстве дорог, уборке мусора,
      перевозке сыпучих материалов. Хорошие машины имеют высокую стоимость, и хранить их в гараже предприятия ради единичной работы невыгодно. Поэтому для выполнения определенного заказа выгоднее заключить договор аренды спецтехники.</p>
      <p>Наша компания имеет современную техническую базу. Все машины находятся в хорошем состоянии и своевременно проходят осмотры и ремонты. Автомобильный парк постоянно пополняется новыми моделями для удовлетворения потребностей клиента.
      Сотрудники, имеющие большой опыт работы, готовы предоставить консультации и полный комплекс услуг по подбору и аренде спецтехники.</p>
      <p>Компания работает на территории Новгородской области и Великого Новгорода. Также специалисты готовы выехать на объекты, находящиеся за пределами области.</p>
      <h3>Мы свяжемся с вами!</h3>
      <div class="call_back">
        <div class="title">Оставьте свои контактные данные в заявке</div>
        <div class="back">
          <div class="form">
            <div class="form-line name">
              <input placeholder="Ваше имя" type="text" id="name" name="name">
            </div>
            <div class="form-line ph_or_email">
              <input placeholder="Ваш телефон или e-mail" type="text" id="ph_or_email">
            </div>
            <div class="form-line textarea">
              <textarea placeholder="Сообщение..." type="text"></textarea>
            </div>
            <button class="yellow_button" id="live_a_request" type="button">Оставить заявку</button>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer();?>
</body>



<!-- get POST content -->

		<?php if (have_posts()): ?>



			<?php
// Start the loop.
while (have_posts()):
	the_post();

	/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
	// get_template_part('template-parts/content', get_post_format());

	// End the loop.
endwhile;

// If no content, include the "No posts found" template.
else:
	get_template_part($template - parts . '/content', 'none');

endif;
?>
<?php echo the_content(get_post_by_name('main_slider')->post_content); ?>

<!-- END get POST content -->



