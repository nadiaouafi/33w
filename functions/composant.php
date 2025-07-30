<?php
/**
 * Gabarits sous forme de fonctions. Chacune peut être paramétrée
 */

function icone_sociaux($couleur)
{
    // pour enlever le # de la position 0, on extrait à partir de la position 1
    $couleur = substr($couleur, 1);
    ?>
    <a class="sociaux" href="https://github.com/nadiaouafi/33w">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://facebook.com">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <?php
}

/**
 * Générateur de vague pour séparer deux sections
 */
function vague($couleur1) {
    echo '
    <div class="vague">
        <svg viewBox="0 0 1440 150" xmlns="http://www.w3.org/2000/svg">
            <path fill="'.$couleur1. $couleur2.'">
                <animate attributeName="d" dur="10s" repeatCount="indefinite"
                    values="
                        M0,40 C360,120 1080,-40 1440,40 L1440,0 L0,0 Z;
                        M0,60 C360,-20 1080,120 1440,60 L1440,0 L0,0 Z;
                        M0,40 C360,120 1080,-40 1440,40 L1440,0 L0,0 Z
                    " />
            </path>
        </svg>
    </div>';
}
