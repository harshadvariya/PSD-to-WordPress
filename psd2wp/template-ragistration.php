<?php
/**
 * The template for displaying all pages
 * Template Name: Ragistration Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PSD_to_WP
 */

get_header();

function add_user()
{
    echo "hiii";
    wp_die();
}
add_action('wp_ajax_add_user', 'add_user');
add_action('wp_ajax_nopriv_add_user', 'add_user');


?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="ragister-wrap">
				<h3 class="text-center">Ragistration form</h3>
				<div class="col-md-5 text-center m-auto pt-5">
				<div class="ragister-form">
					<form method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username"> <br>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"><br>
							<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password"><br>
							<input type="submit" id="ragisterForm" name="ragister" value="Ragister" class="btn btn-primary btn-lg">
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<script type="text/javascript">
	$(document).ready(function(){
		 var admn_ajax = '<?php echo admin_url('admin-ajax.php'); ?>';

 $(document).on('click', '#ragisterForm', function (event){
	event.preventDefault();

	var form_data = $('form').serialize();
	var data = {
		action : 'add_user',
		form_data : form_data
	};
	$.ajax({
        type: "POST",
        url: my_ajax_object.ajax_url,
		data: data,
		cache: false,
		 success: function (response) {
			alert(response);
		},
		error : function(error){ console.log(error) }
	});

});



});
</script>

<?php
get_footer();