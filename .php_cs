<?php
$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->in('tests')
    ->notPath('_files');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'protected_to_private' => false,
    ])
    ->setFinder($finder);


//    array(
//        'braces',
//        'duplicate_semicolon',
//        'elseif',
//        'encoding',
//        'eof_ending',
//        'function_call_space',
//        'function_declaration',
//        'indentation',
//        'join_function',
//        'line_after_namespace',
//        'linefeed',
//        'lowercase_keywords',
//        'parenthesis',
//        'multiple_use',
//        'method_argument_space',
//        'object_operator',
//        'operators_spaces',
//        'php_closing_tag',
//        'remove_lines_between_uses',
//        'short_tag',
//        'standardize_not_equal',
//        'trailing_spaces',
//        'unused_use',
//        'visibility',
//        'whitespacy_lines',
//    )