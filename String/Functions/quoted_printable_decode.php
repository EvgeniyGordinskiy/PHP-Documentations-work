<?php

// string quoted_printable_decode ( string $str )

// This function returns an 8-bit binary string corresponding to the decoded quoted printable string (according to » RFC2045, section 6.7, not » RFC2821, section 4.5.2, so additional periods are not stripped from the beginning of line).
'Ipsum is simply dummy text of the printing and typesetting industry. Lorem =
Ipsum has been the industry\'s standard dummy text ever since the 1500s, whe=
n an unknown printer took a galley of type and scrambled it to make a type =
specimen book. I'
$str = 'Lorem Ipsum - =D1=8D=D1=82=D0=BE =D1=82=D0=B5=D0=BA=D1=81=D1=82-"=D1=80=
=D1=8B=D0=B1=D0=B0", =D1=87=D0=B0=D1=81=D1=82=D0=BE =D0=B8=D1=81=D0=BF=
=D0=BE=D0=BB=D1=8C=D0=B7=D1=83=D0=B5=D0=BC=D1=8B=D0=B9 =D0=B2 =D0=BF=D0=
=B5=D1=87=D0=B0=D1=82=D0=B8 =D0=B8 =D0=B2=D1=8D=D0=B1-=D0=B4=D0=B8=D0=B7=
=D0=B0=D0=B9=D0=BD=D0=B5. Lorem Ipsum =D1=8F=D0=B2=D0=BB=D1=8F=D0=B5=D1=
=82=D1=81=D1=8F =D1=81=D1=82=D0=B0=D0=BD=D0=B4=D0=B0=D1=80=D1=82=D0=BD=
=D0=BE=D0=B9 "=D1=80=D1=8B=D0=B1=D0=BE=D0=B9" =D0=B4=D0=BB=D1=8F';

quoted_printable_decode($str); // 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для'
