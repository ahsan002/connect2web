<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<h1>Our <span class="yellow">Blog</span></h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		
                <div class="blogBottom">
                    <div class="blogLeft">
                        <div class="blogHeader">
                            <div class="calender"><i class="fa fa-calendar"></i><?php echo get_the_date(' F ') ?><span class="yellow"><?php echo get_the_date(' j').','.get_the_date(' Y ') ?></span></div>
                            <div class="admin"><i class="fa fa-user"></i>By <span class="yellow"><?php the_author(); ?></span></div> 
                            <div class="clear"></div>
             <!--               <h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>  -->
                            <h2><?php the_title(); ?></h2>
                            <div class="blogSubHeading">Connect2oz Blog</div>  
                            
                        </div>
                    </div>
                 
		       <div class="blogRight"><!--Start blogRight section-->
		           <?php 
				$id = get_the_author_meta( 'ID' );
		                if(get_author_image_url($id)){		
				$avatar_url = get_author_image_url($id);		
				?>
				<img src="<?php echo $avatar_url; ?>" width="150px">
		                <?php
				}
		                else {
		                ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/blogimg1.jpg">
		                <?php } ?>
		       </div>
                </div>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
