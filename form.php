<div class="ccs_box">
    <style scoped>
        .ccs_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .ccs_field{
            display: contents;
        }
    </style>
    <p class="meta-options ccs_field">
        <label for="ccs_code_snippet"><?php esc_attr_e( 'Insert snippet in post/page using', 'ccs-code-snippet'); ?></label>
        <input id="ccs_code_snippet" type="text" name="ccs_code_snippet" value="<?php echo '[css_snippets id=' . get_the_ID() . ']'; ?>" />
    </p>
    <p class="meta-options ccs_field">
        <label for="ccs_code_snippet"><?php esc_attr_e( 'Code Snippet', 'ccs-code-snippet'); ?></label>
        <textarea id="ccs_code_snippet" type="text" rows="30" name="ccs_code_snippet"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccs_code_snippet', true ) ); ?></textarea>
    </p>
</div>
