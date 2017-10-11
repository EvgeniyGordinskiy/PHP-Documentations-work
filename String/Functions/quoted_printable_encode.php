<?php

// string quoted_printable_encode ( string $str )

// Returns a quoted printable string created according to » RFC2045, section 6.7.This function is similar to imap_8bit(), except this one does not require the IMAP module to work.

$str = 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для';

 quoted_printable_encode($str); 
 /*  'Lorem Ipsum - =D1=8D=D1=82=D0=BE =D1=82=D0=B5=D0=BA=D1=81=D1=82-"=D1=80=
=D1=8B=D0=B1=D0=B0", =D1=87=D0=B0=D1=81=D1=82=D0=BE =D0=B8=D1=81=D0=BF=
=D0=BE=D0=BB=D1=8C=D0=B7=D1=83=D0=B5=D0=BC=D1=8B=D0=B9 =D0=B2 =D0=BF=D0=
=B5=D1=87=D0=B0=D1=82=D0=B8 =D0=B8 =D0=B2=D1=8D=D0=B1-=D0=B4=D0=B8=D0=B7=
=D0=B0=D0=B9=D0=BD=D0=B5. Lorem Ipsum =D1=8F=D0=B2=D0=BB=D1=8F=D0=B5=D1=
=82=D1=81=D1=8F =D1=81=D1=82=D0=B0=D0=BD=D0=B4=D0=B0=D1=80=D1=82=D0=BD=
=D0=BE=D0=B9 "=D1=80=D1=8B=D0=B1=D0=BE=D0=B9" =D0=B4=D0=BB=D1=8F'
*/