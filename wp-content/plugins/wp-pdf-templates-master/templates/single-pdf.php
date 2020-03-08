<?php
/**
 * Filename: single-pdf.php
 * Project: WordPress PDF Templates
 * Copyright: (c) 2014-2016 Antti Kuosmanen
 * License: GPLv3
 *
 * Copy this file to your theme directory to start customising the PDF template.
 * Colors for Posters
*/

function color_luminance( $hex, $percent ) {
	
	// validate hex string
	
	$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
	$new_hex = '#';
	
	if ( strlen( $hex ) < 6 ) {
		$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
	}
	
	// convert to decimal and change luminosity
	for ($i = 0; $i < 3; $i++) {
		$dec = hexdec( substr( $hex, $i*2, 2 ) );
		$dec = min( max( 0, $dec + $dec * $percent ), 255 ); 
		$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
	}		
	
	return $new_hex;
}


?>
<!DOCTYPE html>

<html>
<head>
  <title><?php wp_title(); ?></title>
<?php wp_head(); ?>
<?php

$selection = get_body_class();
    if (in_array('escola-de-educacao-corporativa', $selection)) {
        $img_file = 'eec';
        $agenda_color = 'cc5b5d';
    } elseif (in_array('escola-agroindustrial-e-rural', $selection)) {
        $img_file = 'ear';
        $agenda_color = 'a0b531';
    } elseif (in_array('escola-de-seguranca-no-trabalho', $selection)) {
        $img_file = 'est';
        $agenda_color = '6f9e89';
    } elseif (in_array('escola-de-tecnologia-e-inovacao', $selection)) {
        $img_file = 'eti';
        $agenda_color = '4982c2';
    } elseif (in_array('escola-de-transportes-e-logistica', $selection)) {
        $img_file = 'etl';
        $agenda_color = 'c17f22';
    } elseif (in_array('escola-de-seguranca-privada', $selection)) {
        $img_file = 'esp';
        $agenda_color = '686d74';
    } elseif (in_array('escola-de-saude-e-bem-estar', $selection)) {
        $img_file = 'esb';
        $agenda_color = '7aa5bd';
    } elseif (in_array('escola-de-estetica-e-beleza', $selection)) {
        $img_file = 'eeb';
        $agenda_color = 'ab3e8f';
    }
    
    $lighten_color = color_luminance( $agenda_color, 0.2 )
    
?>
<style>
    @page { margin: 0px; }
    
    body { 
        margin: 0px;
        background-image: url('https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/<?php echo $img_file; ?>.jpg');
        background-size: 800px 1125px;
    }
    
    figure {
        position: relative;
    }
    
    figure img {
        position: fixed;
        top: 564px;
        left: 456px;
        width: 302px;
        height: 267px;
        object-fit: cover;
    }
    
    h1 {
        position: fixed;
        font-family: "knema";
        color: #fff;
        font-size: 46px;
        line-height: 34px;
        letter-spacing: -1px;
        top: 350px;
        left: 60px;
        width: 400px;
    }
    
    aside {
        position: relative;
    }
    
    aside .first {
        width: 200px;
        position: absolute;
        font-family: "knema";
        color: #333;
        font-size: 26px;
        letter-spacing: -1px;
        bottom: 51px;
        right: 140px;
        text-align: center;
    }
    
    aside .second {
        width: 200px;
        position: absolute;
        font-family: "knema";
        color: #333;
        font-size: 26px;
        bottom: 73px;
        right: 140px;
        text-align: center;
    }
    aside .third {
        width: 200px;
        position: absolute;
        font-family: "Helvetica";
        color: #333;
        font-size: 16px;
        bottom: 101px;
        right: 140px;
        text-align: center;
    }
    
    h1 span {
        position: absolute;
        top: -75px;
        left: 0px;
        color: <?php echo $lighten_color; ?> !important;
        font-size: 115px !important;
        text-transform: uppercase;
        letter-spacing: -1px;
    }
    
    article {
        position: absolute;
        margin-top: 10px;
        margin-left: 60px;
        width: 340px;
        font-size: 12px;
        color: black;
    }
    
    article h2, article a, article li, article h3 {
        font-family: "Helvetica";
        color: white;
        font-weight: bold;
    }
    
    article p {
        font-family: "Helvetica";
        color: white;
        width: 340px;
        padding-top: 15px;
        font-size: 14px;
        line-height: 18px;
    }
    
    .logos-box {
        background: white;
        width: 400px;
        height: 120px;
        position: absolute;
        bottom: 60px;
        z-index: 20;
    }
    
    .certs {
        width: 400px;
        height: 100px;
        position: absolute;
        left: 30px;
        bottom: 0px;
        z-index: 25;
    }
    
    .financiada-txt {
        position: fixed;
        font-family: "Helvetica";
        top: 545px;
        left: 60px;
        width: 340px;
        font-size: 14px;
        line-height: 18px;
        color: white;
    }
    
    .agenda { 
        position: fixed;
        top: 758px;
        left: 60px;
        width: 340px;
    }
    .mes, .lugar {
        font-family: "Helvetica";
        text-transform: uppercase;
        font-weight: bold;
        color: white;
        font-size: 16px;
        padding-bottom: 10px;
        padding-top: 10px;
        top: 0;
        display: inline-block;
        text-align: center;
        background-color: #<?php echo $agenda_color; ?>;
        
    }
    .mes { margin-right: 10px; width: 120px; }
    .lugar { width: 200px; }

</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="agenda">
        <h3 class="mes"><?php the_field('mes_da_formacao'); ?></h3>
        <h3 class="lugar"><?php the_field('local_da_formacao'); ?></h3>
    </div>
    
	<div id="primary" <?php astra_primary_class(); ?>>
    <h1>
        <?php 
            $post_object = get_field('ufcd_do_cartaz', $post->ID);
            echo $post_object->post_title; 
        ?>
        
    </h1>
        
    <aside>
        <span class="first"><?php echo the_field('fone_de_contacto'); ?></span>
        <span class="second"><?php echo the_field('telemovel'); ?></span>
        <span class="third"><?php echo the_field('e-mail_de_contacto'); ?></span>
    </aside>
    
    <article><?php the_content(); ?></article>
    
    <?php if ( get_field( 'formacao_financiada' ) ): ?>
        <p class="financiada-txt">Formação financiada de frequência gratuita para empregados com formação mínima do 9º ano e desempregados com formação mínima do 12º ano. Emissão de certificado e subsídio alimentação incluídos.</p>
    <?php else: ?>
        <h1 class="sigla"><span><?php echo the_field('sigla_da_formacao'); ?></span></h1>
        
        <p class="financiada-txt"><?php echo the_field('texto_do_cartaz'); ?></p>
    <?php endif; ?>

    
	<figure><?php the_post_thumbnail(); ?>
    </figure>

    <?php if ( get_field( 'formacao_financiada' ) ): ?>

    <?php else: ?>
    
    <div class="logos-box">
    </div>
    <div class="certs">
        
        <?php $certs_array = get_field('certificacoes'); ?>
        
        <?php if( in_array('ACT', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/act.jpg" />
        <?php } ?>
        <?php if( in_array('IEFP', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/iefp.jpg" />
        <?php } ?>
        <?php if( in_array('PSP', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/psp.jpg" />
        <?php } ?>
        <?php if( in_array('DGERT', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/dgert.jpg" />
        <?php } ?>
        <?php if( in_array('ANSR', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/ansr.jpg" />
        <?php } ?>
        <?php if( in_array('ERS', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/ers.jpg" />        
        <?php } ?>
        <?php if( in_array('DRAPN', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/drapn.jpg" />
        <?php } ?>
        <?php if( in_array('IMT', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/imt.jpg" />
        <?php } ?>
        <?php if( in_array('DGAV', $certs_array )) { ?>
            <img src="https://comercial.grupoift.pt/wp-content/themes/ift-mkt/img/dgav.jpg" />
        <?php } ?>
    </div>
    
    <?php endif; ?>

	</div><!-- #primary -->
  <?php endwhile; endif; ?>
</body>
</html>

