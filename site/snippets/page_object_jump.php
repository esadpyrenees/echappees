<?php function page_object_jump( $direction, $steps, $item ) {
    $item = ( ! empty( $item ) ) ? $item : page();
        $children = $item->children();
        $index = $children->indexOf($item);

        if( $direction === 'forward' ) {
            if( ( $index + $steps ) > ( $children->count() + 1 ) ) {
                return $children->first();
            }
            return $children->nth($index + $steps);
        }
    return $item;
}
?>

<!-- ici pour afficher le titre, c'est là qu'il faut trouver comment afficher ce qu'il y a dans snippet sommaire -->
<!--<?php $page_object = page_object_jump( 'forward', $page );
echo $page_object->title();?>-->