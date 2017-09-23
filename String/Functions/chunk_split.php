<?php

// string chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] )
// Split a string into smaller chunks
chunk_split("Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.",25, "\r\n");

/*
'Lorem Ipsum is slechts ee
n proeftekst uit het druk
kerij- en zetterijwezen. 
Lorem Ipsum is de standaa
rd proeftekst in deze bed
rijfstak sinds de 16e eeu
w, toen een onbekende dru
kker een zethaak met lett
ers nam en ze door elkaar
 husselde om een font-cat
alogus te maken. Het heef
t niet alleen vijf eeuwen
...
*/

$russian = 'orem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.';
chunk_split($russian, 25, "\r\n");

/*
'orem Ipsum - это те�
�ст-"рыба", час�
�о используем�
�й в печати и в
эб-дизайне. Lore
m Ipsum является 
стандартной "�
�ыбой" для тек�
�тов на латини
це с начала XVI 
века. В то вре�
�я некий безым
янный печатни
к создал боль�
*/

function word_chunk($str, $len = 76, $end = "\n") {
    $pattern = '~.{1,' . $len . '}~u'; // like "~.{1,76}~u"
    $str = preg_replace($pattern, '$0' . $end, $str);
    return rtrim($str, $end);
}
word_chunk($russian, 25, "\r\n");
/*
'orem Ipsum - это текст-"р
ыба", часто используемый 
в печати и вэб-дизайне. L
orem Ipsum является станд
артной "рыбой" для тексто
в на латинице с начала XV
I века. В то время некий 
безымянный печатник созда
л большую коллекцию разме
ров и форм шрифтов, испол
...
*/