<?php

class Wordfilter {

    static function filter($text) {
        $patterns_to_filter = array (
            '/f+u+c+k+/i', /* fuck case-insensitive and multiple letter repeats */
            '/f+u+a+r+k+/i', /* fuark case-insensitive and multiple letter repeats */
            '/s+h+i+t+/i', /* shit case-insensitive and multiple letter repeats */
            '/(f+|ph)[a4]+g+[o0]+t+/i', /* faggot or phaggot or f4ggot of ph4ggot case-insensitive and multiple letter repeats*/
            '/(f+|ph)[a4]+g+/i', /* fag or phag or f4g or ph4g case-insensitive and multiple letter repeats */
            '/s+l+([o0]{2,}|u+)t+/i' /* sloot or slut or sl00t case-insensitive and multiple letter repeats */
        );

        $replacements = array (
            'poppycock', /* tribute to Poseidon */
            'poppycock', /* see above */
            'chitty chitty bang bang', /* Mary Poppins... always a classic */
            'fratstar', /* Ezra Hub legend */
            'fratstar', /* see above */
            'slot machine' /* put your coin in, pull the lever, take a chance... see what happens? */
        );

        $text = preg_replace($patterns_to_filter, $replacements, $text);
        return $text;

    }
}

?>
