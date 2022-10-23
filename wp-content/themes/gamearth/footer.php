    <footer>
        <?php wp_footer() ?>

        <div class="menu-footer">
            <?php
            $categories = get_categories( 'hide_empty=0' );
            echo '<ul>';
            foreach ( $categories as $category ) {
                $color = carbon_get_term_meta( $category->term_id, 'crb_color' );
                echo '<li><a href="' . get_term_link( $category ) . '" style="color: ' . $color . ';">' . $category->name . '</a></li>';
            }
            echo '</ul>';
            ?>

            <?php
            // get the field value
            $copyright = carbon_get_theme_option( 'crb_footer_copyright' );
            // output the field value
            echo $copyright;
            ?>
        </div>
    </footer>

</body>
</html>