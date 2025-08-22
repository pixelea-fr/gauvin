<?php
/**
 * Title: Bannière Gauvin
 * Slug: gauvin/section-banner
 * Categories: banner
 * Block Types: core/cover
 * Description: Bannière Pleine Hauteur
 */
?>
<!-- wp:group {"metadata":{"name":"Contenu sans espace","patternName":"gauvin/template-page-overrides"},"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"https://picsum.photos/1920/1080","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"gradient-4","contentPosition":"center center","sizeSlug":"full","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-cover alignfull has-base-3-color has-text-color has-link-color" style="min-height:100vh"><img class="wp-block-cover__image-background size-full" alt="" src="https://picsum.photos/1920/1080" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-4-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Inner left container | 1400"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Groupe Inner Left | 600"},"layout":{"type":"constrained","justifyContent":"left","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","placeholder":"Rédigez le titre…","metadata":{"name":"Titre H1","bindings":{"__default":{"source":"core/pattern-overrides"}}},"fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size">LOREM IPSUM.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Introduction","bindings":{"__default":{"source":"core/pattern-overrides"}}}} -->
<p>LOREM IPSUM</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"metadata":{"name":"Bouton","bindings":{"__default":{"source":"core/pattern-overrides"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">Demandez votre devis</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:pattern {"slug":"ng1-2025/section-image-text"} /--></div>
<!-- /wp:group -->