<?php
function inline_notes($text) {

// /\[(\d+)\.(.*?)\]/s
//     \[ matches the character [ literally
//     1st Capturing group (\d+)
//         \d+ match a digit [0-9]
//             Quantifier: + Between one and unlimited times, as many times as possible, giving back as needed [greedy]
//     \. matches the character . literally
//     2nd Capturing group (.*?)
//         .*? matches any character
//             Quantifier: *? Between zero and unlimited times, as few times as possible, expanding as needed [lazy]
//     \] matches the character ] literally
//     s modifier: single line. Dot matches newline characters

  $regexContent  = '/\[(\d+)\.(.*?)\]/s'; 
  $replacement = '<sup class="footnote_call">${1}</sup><span class="footnote_content"> ${2}</span>';

  $text = preg_replace($regexContent, $replacement, $text);
  return $text;
}

kirbytext::$post[] = function($kirbytext, $value) {
  return inline_notes($value);
};

?>
