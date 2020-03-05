<?php

require_once("../../../../wp-load.php");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://comercial.grupoift.pt/wp-content/plugins/ufcd-plugin/datasets/ufcd-data.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$response = json_decode($result, true);
foreach ($response['lista'] as $ufcd) {
    $ufcd_loop = $ufcd['ufcd-ufcd'];
    get_post_by_ufcd( $ufcd_loop );
}

function get_post_by_ufcd( $ufcd_code )
{

    $args = ( object )wp_parse_args( $args );
   
    $args = array(
        'meta_query'        => array(
            array(
                'key'       => 'ufcd-ufcd',
                'value'     => $ufcd_code
            )
        ),
        'post_type'         => 'page',
        'posts_per_page'    => '1'
    );

    $posts = get_posts( $args );
   
    if ( ! $posts || is_wp_error( $posts ) ) return false;

    return $posts[0];
   
}
