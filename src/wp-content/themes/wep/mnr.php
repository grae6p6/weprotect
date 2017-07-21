<?php

/*
Template name: Model National Response
 */

get_header(); ?>

	<main id="main" class="body" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part( 'template-parts/block' ) ?>
			<div class="mnr">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-3 menu">
							<div class="entry">Introduction</div>
							<div class="entry">Enablers</div>
							<div class="entry exp open">Policy and Governance</div>
							<div class="entry exp">Criminal Justice</div>
							<div class="entry exp">Societal</div>
							<div class="entry exp">Industry</div>
							<div class="entry exp">Media and communications</div>
							<div class="entry">Download full MNR document</div>
						</div>
						<div class="col-12 col-md-9 content">
							<h2><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Policy and legislation</h2>
							<h3>Capability 1 - Leadership</h3>
                            <p>A faucibus magnis parturient cubilia facilisis urna est cubilia ullamcorper fringilla scelerisque morbi cubilia lacinia nisl convallis consectetur nostra accumsan adipiscing. Euismod ipsum aptent parturient vestibulum per amet gravida molestie dictum adipiscing a placerat adipiscing mi hendrerit mattis a adipiscing parturient vehicula et pretium ipsum id parturient conubia. Lacus quam consectetur tristique a suspendisse elit elementum nulla sem odio parturient malesuada a fermentum a platea praesent nascetur vel parturient class scelerisque ut facilisi primis nec facilisis sem. Nunc convallis metus vestibulum a quisque suspendisse est quisque arcu dis consequat quam tortor est a elit magnis. Fermentum sem sit leo netus scelerisque vulputate sapien condimentum lacinia a justo suspendisse eros eros. Ullamcorper nisl condimentum primis nulla suspendisse pulvinar nunc lacus ipsum felis quis eleifend vitae placerat odio et consectetur in pretium hac.</p><p>Semper est nascetur a a ante scelerisque parturient euismod consequat suspendisse parturient urna nisi dolor a iaculis dis vestibulum scelerisque suspendisse. Commodo felis fringilla venenatis dictumst a nisi sit fringilla phasellus condimentum venenatis facilisis semper viverra a amet erat malesuada nunc a amet a iaculis gravida sociosqu inceptos ad per. Sodales integer nibh a a hac condimentum nec condimentum ullamcorper a etiam ullamcorper facilisis cras scelerisque a montes parturient orci placerat mus dis congue.</p>
                            <p>Mi quisque semper hendrerit ornare vivamus id parturient condimentum ridiculus dui a a aliquet dapibus. Praesent per eget torquent netus dui cursus odio urna faucibus porttitor ac a velit suspendisse a. Eget vestibulum eleifend placerat lacinia a ac scelerisque cubilia integer vulputate felis condimentum ac nascetur lorem quam mus. A condimentum penatibus nec sed odio nec in cursus consequat consectetur tellus etiam natoque aliquet gravida orci a parturient quis lacus bibendum primis hac lorem ipsum suspendisse. A penatibus condimentum suspendisse libero luctus integer feugiat ipsum a vulputate natoque a ridiculus a sed pretium a consectetur suscipit ac a vestibulum ullamcorper fringilla.</p>
                            <p>Et risus ullamcorper ridiculus parturient dapibus elit id sociosqu tincidunt dis primis mi lectus et enim posuere adipiscing ullamcorper sem posuere suspendisse. Vestibulum sociis a a venenatis lacinia et adipiscing id a duis scelerisque eleifend egestas sapien scelerisque dui fames parturient mattis laoreet morbi a ullamcorper leo. Vestibulum sagittis pharetra aliquam himenaeos arcu ornare interdum mollis vestibulum volutpat adipiscing ullamcorper nam gravida parturient potenti fames sem scelerisque aptent vestibulum viverra quam potenti nulla ultricies. Vestibulum rhoncus amet suspendisse varius ullamcorper ut vestibulum himenaeos hac aliquet dictumst a rhoncus et a habitasse hac a elit adipiscing sit ultricies risus. Ridiculus vivamus dis orci a placerat donec vehicula suscipit per curabitur a fermentum ut leo adipiscing tristique hendrerit class luctus eros quam nostra id diam vestibulum praesent.</p><p>Consectetur accumsan morbi proin consequat tellus adipiscing a a integer mi pretium bibendum parturient pulvinar augue ridiculus blandit vel nam pulvinar aptent pretium tristique habitasse dignissim a. Porttitor consequat porttitor a nec dui suspendisse adipiscing euismod facilisi vestibulum condimentum tincidunt in facilisis elementum a imperdiet orci eget. Parturient phasellus ultrices sodales etiam mattis phasellus est adipiscing diam odio dui vehicula elit ultricies leo duis adipiscing leo turpis bibendum vestibulum a quam habitasse dictum egestas scelerisque. Ad placerat himenaeos ac himenaeos adipiscing cursus eleifend adipiscing placerat elementum tempor praesent risus eros malesuada potenti hac duis blandit adipiscing nisl neque purus scelerisque in imperdiet in.</p>
                            <p>Condimentum scelerisque scelerisque dictumst nunc ligula gravida ligula vitae ad facilisis erat interdum vestibulum suscipit felis blandit iaculis eu pulvinar dapibus in nisl. Quis suscipit commodo magna proin dignissim tristique commodo lacus lacinia bibendum tellus nam augue lacus urna. Semper dapibus parturient parturient nec dui nunc tristique ullamcorper posuere diam viverra parturient a id a a lobortis suspendisse netus eu massa justo. Iaculis suscipit volutpat a fringilla himenaeos nisl arcu ullamcorper a leo a gravida lorem condimentum parturient natoque cras. Enim curae ullamcorper aenean scelerisque hac vestibulum phasellus consectetur ad per ad sem conubia vestibulum integer ultrices.</p>
						</div>
					</div>
				</div>
			</div>
			<?php wp_link_pages( array(
				'before' => '<div class="page-links"><div class="row"><div class="col">' . __( 'Pages:', 'wep' ),
				'after'  => '</div></div></div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</article>
		<?php endwhile; ?>
	</main>

<?php get_footer();