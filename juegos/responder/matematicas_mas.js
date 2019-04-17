var p1= "Calcula el Cuadrado ";
var p2= "Calcula el resultado de las Potencias: ";
var p3= "Calcula el resultado de las operaciones: ";
var n1= "Â¿CÃ³mo escribirÃ­as con cifras los nÃºmeros?: ";
var n2= "Â¿CÃ³mo escribirÃ­as con letras los nÃºmeros?: ";
var n3= "Calcula el resultado de las siguientes ";
var r1= "Â¿CÃ³mo escribirÃ­as con nÃºmeros romanos?:";
var r2= "Â¿CÃ³mo escribirÃ­as con nÃºmeros decimales?:";
var m1= "Expresa las siguientes unidades ";
var f1= "Indica si son divisibles por 2, 3, 5, 7 o por 11 los nÃºmeros:";
var f2= "de los nÃºmeros: ";
var f3= "Escribe la descomposiciÃ³n factorial ";
var f4= "Calcula el MÃ¡ximo ComÃºn Divisor ";
var f5= "Calcula el MÃ­nimo ComÃºn MÃºltiplo ";

function cvl(opcion){
switch (opcion) {
case 'P5':
	st = "(1) " + n3 + "multiplicaciones: ";
	sp = "5 x 8 = |4 x 6 = |6 x 5 =|8 x 3 =|9 x 4 =|9 x 8 =|7 x 9 =|4 x 9 =|3 x 2 =|5 x 7 =|7 x 3 =|3 x 5 =|8 x 6 =|7 x 2 =|6 x 7 =|8 x 4 =";
	sr ="40|24|30|24|36|72|63|36|6|35|21|15|48|14|42|32";
	break;
case 'P6':
	st = "(2) " + n3 + "multiplicaciones: ";
	sp = "2 x 5 x 9 =|3 x 4 x 8 =|4 x 6 x 7 =|5 x 8 x 6 =|6 x 9 x 5 =|7 x 3 x 4 =|8 x 7 x 4 =|9 x 5 x 2 =|2 x 9 x 3 =|3 x 8 x 2 =|4 x 7 x 5 =|5 x 4 x 9 =|6 x 2 x 8 =|7 x 6 x 3 =|8 x 2 x 7 =|9 x 3 x 6 =";
	sr ="90|96|168|240|270|84|224|90|54|48|140|180|96|126|112|162";
	break;

case 'P1':
	st = "(1) " + p1 + f2;
	sr = "81|49|36|25|16|64|100|144|169|121|196|225|256|289|9|324";
	sp = "9|7|6|5|4|8|10|12|13|11|14|15|16|17|3|18";
	break;
case 'P2':
	st = "(2) " + p1 + f2;
	sr = "400|441|484|529|576|625|676|729|784|841|900|1600|2500|361|3600";
	sp = "20|21|22|23|24|25|26|27|28|29|30|40|50|19|60";
	break;
case 'P3':
	st = "(3) " + p2 ;
	sr = "8|16|27|81|64|256|125|625|216|1296|32|243|343|512|729|1000";
	sp = "2<sup>3</sup> =|2<sup>4</sup> =|3<sup>3</sup> =|3<sup>4</sup> =|4<sup>3</sup> =|4<sup>4</sup> =|5<sup>3</sup> =|5<sup>4</sup> =|6<sup>3</sup> =|6<sup>4</sup> =|2<sup>5</sup> =|3<sup>5</sup> =|7<sup>3</sup> =|8<sup>3</sup> =|9<sup>3</sup> =|10<sup>3</sup> =";
	break;
case 'P4':
	st = "(4) " + p3 ;
	sr = "32|243|25|16|64|36|64|27|36|8|25|35|32|4|900";
	sp = "2<sup>3</sup> x 2<sup>2</sup> =|3<sup>3</sup> x 3<sup>2</sup> =|5<sup>6</sup> : 5<sup>4</sup> =|4<sup>7</sup> : 4<sup>5</sup> =|8<sup>3</sup> : 2<sup>3</sup> =|3<sup>2</sup> x 2<sup>2</sup> =|2<sup>3</sup> x 2<sup>1</sup> x 2<sup>2</sup> =|3<sup>0</sup> x 3 x 3<sup>2</sup> =|6<sup>6</sup> : 6<sup>4</sup> =|10<sup>3</sup> : 5<sup>3</sup> =|4<sup>2</sup> + 3<sup>2</sup> =|3<sup>3</sup> + 2<sup>3</sup> =|9<sup>2</sup> - 7<sup>2</sup> =|2<sup>3</sup> - 2<sup>2</sup> =|2<sup>2</sup> x 3<sup>2</sup> x 5<sup>2</sup> =";
	break;
case 'N1':
	st = "(1) " + n1;
	sp = "Treinta y dos|Ciento treinta y siete|Ochenta y nueve|Cuarenta y seis|Setecientos cuarenta y cuatro|Trescientos quince|Setenta y dos|Ciento diecisiete|Doscientos nueve|Ochocientos ocho|Diecinueve|Sesenta y nueve|Cuatrocientos once|Veintisiete|Seiscientos seis|Dieciocho";
	sr = "32|137|89|46|744|315|72|117|209|808|19|69|411|27|606|18";
	break;
case 'N2':
	st = "(2) " + n1;
	sp = "Mil doscientos dos|Treinta y nueve|Cincuenta y ocho|Dos mil cincuenta|DiecisÃ©is|Sesenta y cinco|Veinticinco|Cuatrocientos ochenta y tres|Mil quince|Seiscientos cuarenta y dos|Doscientos cincuenta y siete|Ochenta y cuatro|Noventa y seis|Ciento ocho|Dos mil siete|Cuarenta y cuatro";
	sr = "1.202|39|58|2.050|16|65|25|483|1.015|642|257|84|96|108|2.007|44";
	break;
case 'N3':
	st = "(3) " + n1;
	sp = "Setenta y seis|Once mil quince|Diecisiete|Trescientos cincuenta y dos|Cinco mil ciento doce|Cuarenta y tres|Ciento nueve|Treinta y siete|Seiscientos treinta y cuatro|Dos mil ciento veinte|Sesenta y siete|Treinta y cinco mil once|Cuarenta y uno|Doscientos cincuenta y tres|Mil doscientos cinco|Veinticuatro";
	sr = "76|11.015|17|352|5.112|43|109|37|634|2.120|67|35.011|41|253|1.205|24";
	break;
case 'N4':
	st = "(4) " + n1;
	sp = "Cinco mil nueve|Ciento tres|Ochenta y dos|Setenta y cinco|Seiscientos uno|Tres mil ciento trece|Cuatrocientos diecisÃ©is|Treinta y ocho|VeintisÃ©is|Siete mil quinientos once|Nueve mil cinco|Trescientos uno|Sesenta y ocho|Cincuenta y siete|Ciento seis|Mil trescientos treinta y uno";
	sr = "5.009|103|82|75|601|3.113|416|38|26|7.511|9.005|301|68|57|106|1.331";
	break;
case 'N5':
	st = "(5) " + n1;
	sp = "Mil veintidÃ³s|Dos mil doce|Siete mil ciento diez|Quince mil doscientos tres|Mil doce|Doce mil nueve|Setecientos ocho|Trescientos diecinueve|Setenta y uno|Novecientos seis|Cincuenta y ocho|Cuatrocientos cuarenta y dos|Tres mil doscientos nueve|Seiscientos catorce|Cuarenta y dos|Seiscientos diecinueve";
	sr = "1.022|2.012|7.110|15.203|1.012|12.009|708|319|71|906|58|442|3.209|614|42|619";
	break;
case 'N6':
	st = "(6) " + n1;
	sp = "Doscientos sesenta y siete|Trescientos veinticinco|Cuatrocientos setenta y dos|Quinientos veinte|Quinientos setenta y cuatro|Mil ciento tres|Dos mil ochenta|Dos mil trescientos cuatro|Cuatro mil quince|Cuatro mil doscientos siete|Seis mil ocho|Ocho mil diecisÃ©is|Nueve mil ciento tres|Diez mil cinco|Trece mil veinticuatro|Veinte mil diecisiete";
	sr = "267|325|472|520|574|1.103|2.080|2.304|4.015|4.207|6.008|8.016|9.103|10.005|13.024|20.017";
	break;
case 'N7':
	st = "(7) " + n1;
	sp = "Setecientos cincuenta|Novecientos diecisÃ©is|Tres mil dos|Tres mil quince|Cuatro mil ciento veinte|Cinco mil siete|Seis mil seiscientos|Diez mil cuatro|VeintitrÃ©s mil tres|Treinta y cinco mil ciento dos|Cuarenta mil doce|Cincuenta mil seiscientos|Setenta y dos mil quince|Ochenta y cinco mil nueve|Sesenta mil seis|Ciento dos mil";
	sr = "750|916|3.002|3.015|4.120|5.007|6.600|10.004|23.003|35.102|40.012|50.600|72.015|85.009|60.006|102.000";
	break;
case 'N8':
	st = "(1) " + n2;
	sp = "32|137|89|46|744|1.022|315|72|117|209|808|19|2.012|69|411|7.110";
	sr = "Treinta y dos|Ciento treinta y siete|Ochenta y nueve|Cuarenta y seis|Setecientos cuarenta y cuatro|Mil veintidÃ³s|Trescientos quince|Setenta y dos|Ciento diecisiete|Doscientos nueve|Ochocientos ocho|Diecinueve|Dos mil doce|Sesenta y nueve|Cuatrocientos once|Siete mil ciento diez";
	break;
case 'N9':
	st = "(2) " + n2;
	sp ="1.202|39|58|2.050|16|65|25|483|1.015|642|257|84|96|108|2.007|44";
	sr = "Mil doscientos dos|Treinta y nueve|Cincuenta y ocho|Dos mil cincuenta|DiecisÃ©is|Sesenta y cinco|Veinticinco|Cuatrocientos ochenta y tres|Mil quince|Seiscientos cuarenta y dos|Doscientos cincuenta y siete|Ochenta y cuatro|Noventa y seis|Ciento ocho|Dos mil siete|Cuarenta y cuatro";
	break;
case 'Na':
	st = "(3) " + n2;
	sp = "76|11.015|17|352|5.112|43|109|37|634|2.120|67|35.011|41|253|1.205|24";
	sr = "Setenta y seis|Once mil quince|Diecisiete|Trescientos cincuenta y dos|Cinco mil ciento doce|Cuarenta y tres|Ciento nueve|Treinta y siete|Seiscientos treinta y cuatro|Dos mil ciento veinte|Sesenta y siete|Treinta y cinco mil once|Cuarenta y uno|Doscientos cincuenta y tres|Mil doscientos cinco|Veinticuatro";
	break;
case 'Nb':
	st = "(4) " + n2;
	sp = "5.009|103|82|75|601|3.113|416|38|26|7.511|9.005|301|68|57|106|1.331";
	sr = "Cinco mil nueve|Ciento tres|Ochenta y dos|Setenta y cinco|Seiscientos uno|Tres mil ciento trece|Cuatrocientos diecisÃ©is|Treinta y ocho|VeintisÃ©is|Siete mil quinientos once|Nueve mil cinco|Trescientos uno|Sesenta y ocho|Cincuenta y siete|Ciento seis|Mil trescientos treinta y uno";
	break;
case 'Nc':
	st = "(5) " + n2;
	sp = "1.022|2.012|7.110|15.203|1.012|12.009|708|319|71|906|58|442|3.209|614|42|619";
	sr = "Mil veintidÃ³s|Dos mil doce|Siete mil ciento diez|Quince mil doscientos tres|Mil doce|Doce mil nueve|Setecientos ocho|Trescientos diecinueve|Setenta y uno|Novecientos seis|Cincuenta y ocho|Cuatrocientos cuarenta y dos|Tres mil doscientos nueve|Seiscientos catorce|Cuarenta y dos|Seiscientos diecinueve";
	break;
case 'Nd':
	st = "(6) " + n2;
	sp = "267|325|472|520|574|1.103|2.080|2.304|4.015|4.207|6.008|8.016|9.103|10.005|13.024|20.017";
	sr = "Doscientos sesenta y siete|Trescientos veinticinco|Cuatrocientos setenta y dos|Quinientos veinte|Quinientos setenta y cuatro|Mil ciento tres|Dos mil ochenta|Dos mil trescientos cuatro|Cuatro mil quince|Cuatro mil doscientos siete|Seis mil ocho|Ocho mil diecisÃ©is|Nueve mil ciento tres|Diez mil cinco|Trece mil veinticuatro|Veinte mil diecisiete";
	break;
case 'Ne':
	st = "(7) " + n2;
	sp = "750|916|3.002|3.015|4.120|5.007|6.600|10.004|23.003|35.102|40.012|50.600|72.015|85.009|60.006|102.000";
	sr = "Setecientos cincuenta|Novecientos diecisÃ©is|Tres mil dos|Tres mil quince|Cuatro mil ciento veinte|Cinco mil siete|Seis mil seiscientos|Diez mil cuatro|VeintitrÃ©s mil tres|Treinta y cinco mil ciento dos|Cuarenta mil doce|Cincuenta mil seiscientos|Setenta y dos mil quince|Ochenta y cinco mil nueve|Sesenta mil seis|Ciento dos mil";
	break;
case 'R1':
	st = "(1) " + r1;
	sp = "16|66|6|21|65|4|9|42|90|400|900|15|5|33|35|3";
	sr = "XVI|LXVI|VI|XXI|LXV|IV|IX|XLII|XC|CD|CM|XV|V|XXXIII|XXXV|III";
	break;
case 'R2':
	st = "(2) " + r1;
	sp = "129|7|13|22|39|61|75|88|104|444|989|8|23|20|40|68";
	sr = "CXXIX|VII|XIII|XXII|XXXIX|LXI|LXXV|LXXXVIII|CIV|CDXLIV|CMLXXXIX|VIII|XXIII|XX|XL|LXVIII";
	break;
case 'R3':
	st = "(3) " + r1;
	sp = "1.008|12|18|31|11|17|34|59|71|80|99|399|899|1.010|64|73";
	sr = "MVIII|XII|XVIII|XXXI|XI|XVII|XXXIV|LIX|LXXI|LXXX|XCIX|CCCXCIX|DCCCXCIX|MX|LXIV|LXXIII";
	break;
case 'R4':
	st = "(4) " + r1;
	sp = "76|1.015|14|352|112|43|2.109|37|684|1.120|67|511|441|254|1.205|94";
	sr = "LXXVI|MXV|XIV|CCCLII|CXII|XLIII|MMCIX|XXXVII|DCLXXXIV|MCXX|LXVII|DXI|CDXLI|CCLIV|MCCV|XCIV";
	break;
case 'R5':
	st = "(5) " + r1;
	sp = "101|1.001|19|54|77|89|109|445|81|407|912|1.050|906|78|442|707";
	sr = "CI|MI|XIX|LIV|LXXVII|LXXXIX|CIX|CDXLV|LXXXI|CDVII|CMXII|ML|CMVI|LXXVIII|CDXLII|DCCVII";
	break;
case 'R6':
	st = "(6) " + r1;
	sp = "24|28|30|38|44|53|69|74|108|253|398|447|706|1.482|1.593|1.775";
	sr = "XXIV|XXVIII|XXX|XXXVIII|XLIV|LIII|LXIX|LXXIV|CVIII|CCLIII|CCCXCVIII|CDXLVII|DCCVI|MCDLXXXII|MDXCIII|MDCCLXXV";
	break;
case 'R7':
	st = "(7) " + r1;
	sp = "102|124|271|383|495|566|689|718|857|931|1.009|1.142|1.275|1.355|1.694|1.860";
	sr = "CII|CXXIV|CCLXXI|CCCLXXXIII|CDXCV|DLXVI|DCLXXXIX|DCCXVIII|DCCCLVII|CMXXXI|MIX|MCXLII|MCCLXXV|MCCCLV|MDCXCIV|MDCCCLX";
	break;
case 'R8':
	st = "(1) " + r2;
	sp = "XVI|LXVI|VI|XXI|LXV|IV|IX|XLII|XC|CD|CM|XV|V|XXXIII|XXXV|III";
	sr = "16|66|6|21|65|4|9|42|90|400|900|15|5|33|35|3";
	break;
case 'R9':
	st = "(2) " + r2;
	sp = "CXXIX|VII|XIII|XXII|XXXIX|LXI|LXXV|LXXXVIII|CIV|CDXLIV|CMLXXXIX|VIII|XXIII|XX|XL|LXVIII";
	sr = "129|7|13|22|39|61|75|88|104|444|989|8|23|20|40|68";
	break;
case 'Ra':
	st = "(3) " + r2;
	sp = "MVIII|XII|XVIII|XXXI|XI|XVII|XXXIV|LIX|LXXI|LXXX|XCIX|CCCXCIX|DCCCXCIX|MX|LXIV|LXXIII";
	sr = "1.008|12|18|31|11|17|34|59|71|80|99|399|899|1.010|64|73";
	break;
case 'Rb':
	st = "(4) " + r2;
	sp = "LXXVI|MXV|XIV|CCCLII|CXII|XLIII|MMCIX|XXXVII|DCLXXXIV|MCXX|LXVII|DXI|CDXLI|CCLIV|MCCV|XCIV";
	sr = "76|1.015|14|352|112|43|2.109|37|684|1.120|67|511|441|254|1.205|94";
	break;
case 'Rc':
	st = "(5) " + r2;
	sp = "CI|MI|XIX|LIV|LXXVII|LXXXIX|CIX|CDXLV|LXXXI|CDVII|CMXII|ML|CMVI|LXXVIII|CDXLII|DCCVII";
	sr = "101|1.001|19|54|77|89|109|445|81|407|912|1.050|906|78|442|707";
	break;
case 'Rd':
	st = "(6) " + r2;
	sp = "XXIV|XXVIII|XXX|XXXVIII|XLIV|LIII|LXIX|LXXIV|CVIII|CCLIII|CCCXCVIII|CDXLVII|DCCVI|MCDLXXXII|MDXCIII|MDCCLXXV";
	sr = "24|28|30|38|44|53|69|74|108|253|398|447|706|1.482|1.593|1.775";
	break;
case 'Re':
	st = "(7) " + r2;
	sp = "CII|CXXIV|CCLXXI|CCCLXXXIII|CDXCV|DLXVI|DCLXXXIX|DCCXVIII|DCCCLVII|CMXXXI|MIX|MCXLII|MCCLXXV|MCCCLV|MDCXCIV|MDCCCLX";
	sr = "102|124|271|383|495|566|689|718|857|931|1.009|1.142|1.275|1.355|1.694|1.860";
	break;

case 'F1':
	st = "(1) Escribe con cifras las fracciones:";
	sp = "Dos tercios|Tres quintos|Nueve dÃ©cimos|Siete medios|Un cuarto|Tres sextos|Seis sÃ©ptimos|Dos octavos|Siete novenos|Cuatro quintos|Ocho dÃ©cimos|Cinco medios|Seis octavos|Cinco sextos|Cuatro sÃ©ptimos|Un tercio";
	sr = "2/3|3/5|9/10|7/2|1/4|3/6|6/7|2/8|7/9|4/5|8/10|5/2|6/8|5/6|4/7|1/3";
	break;
case 'F2':
	st = "(2) Escribe con letras las fracciones:";
	sr ="Dos tercios|Tres quintos|Nueve dÃ©cimos|Siete medios|Un cuarto|Tres sextos|Seis sÃ©ptimos|Dos octavos|Siete novenos|Cuatro quintos|Ocho dÃ©cimos|Cinco medios|Seis octavos|Cinco sextos|Cuatro sÃ©ptimos|Un tercio";
	sp = "2/3|3/5|9/10|7/2|1/4|3/6|6/7|2/8|7/9|4/5|8/10|5/2|6/8|5/6|4/7|1/3";
	break;
case 'F3':
	st = "(1) Calcula el resultado de las operaciones:";
	sp = "2 / 4 + 1 / 4 =|2 / 4 - 1 / 4 =|3 / 6 + 2 / 6 =|3 / 6 - 2 / 6 =|3 / 8 + 4 / 8 =|4 / 8 - 3 / 8 =|6 / 9 + 2 / 9 =|6 / 9 - 2 / 9 =|4 / 7 + 2 / 7 =|3 / 5 + 1 / 5 =|5 / 8 + 2 / 8 =|5 / 9 + 3 / 9 =|4 / 7 - 2 / 7 =|3 / 5 - 1 / 5 =|5 / 8 - 2 / 8 =|5 / 9 - 3 / 9 =";
	sr ="3/4|1/4|5/6|1/6|7/8|1/8|8/9|4/9|6/7|4/5|7/8|8/9|2/7|2/5|3/8|2/9";
	juego="FRACCIONES_OPERAR";
	break;
case 'F4':
	st = "(2) Calcula el resultado de las operaciones:";
	sp = "1 / 2 + 2 / 3 =|2 / 3 - 1 / 2 =|3 / 4 + 2 / 3 =|3 / 4 - 2 / 3 =|2 / 5 + 1 / 3 =|3 / 5 - 1 / 3 =|5 / 6 + 1 / 5 =|5 / 6 - 1 / 5 =|3 / 8 + 2 / 7 =|3 / 8 - 2 / 7 =|5 / 8 + 4 / 9 =|5 / 8 - 4 / 9 =|3 / 4 + 5 / 9 =|3 / 4 - 5 / 9 =|2 / 5 + 2 / 7 =|2 / 5 - 2 / 7 =";
	sr ="7/6|1/6|17/12|1/12|11/15|4/15|31/30|19/30|37/56|5/56|77/72|13/72|47/36|7/36|24/35|4/35";
	juego="FRACCIONES_OPERAR";
	break;
case 'F5':
	st = "(3) Calcula el resultado de las operaciones:";
	sp = "1 / 5 x 3 / 7 =|1 / 5 : 3 / 7 =|2 / 7 : 5 / 9 =|2 / 7 x 5 / 9 =|2 / 9 : 5 / 7 =|2 / 9 x 5 / 7 =|1 / 4 x 7 / 9 =|1 / 4 : 7 / 9 =|5 / 6 x 1 / 7 =|5 / 6 : 1 / 7 =|1 / 8 x 3 / 5 =|1 / 8 : 3 / 5 =|5 / 9 : 7 / 8 =|5 / 9 x 7 / 8 =|4 / 7 x 3 / 5 =|4 / 7 : 3 / 5 =";
	sr ="3/35|7/15|18/35|10/63|14/45|10/63|7/36|9/28|5/42|35/6|3/40|5/24|40/63|35/72|12/35|20/21";
	juego="FRACCIONES_OPERAR";
	break;

case 'Ml1':
	st = "(1) " + m1 + "en metros:";
	sp = "5 km|2 km|12 hm|7 hm|6 hm|6 dam|4 dam|2 dam|23 dm|74 dm|150 dm|56 cm|14 mm|45 cm|34 cm|75 mm";
	sr ="5.000|2.000|1.200|700|600|60|40|20|2,3|7,4|15|0,56|0,014|0,45|0,34|0,075";
	juego="MEDIDAS_LONGITUD";
	break;	
case 'Ml2':
	st = "(2) " + m1 + " en decÃ­metros:";
	sp = "1,5 km|1,2 hm|1,6 dam|2,3 m|15 cm|38 mm|0,8 km|2 hm|3 dam|7 m|21 cm|9 mm|0,5 hm|9 dam|1,8 m|9 cm";
	sr ="15.000|1.200|160|23|1,5|0,38|8.000|2.000|300|70|2,1|0,09|500|900|18|0,9";
	juego="MEDIDAS_LONGITUD";
	break;	
case 'Ml3':
	st = "(3) " + m1 + " en decÃ¡metros:";
	sp = "2 km|23 hm|64 m|114 dm|68 cm|254 mm|0,02 km|9 hm|15 m|789 dm|2.354 cm|3.578 mm|31 hm|347 m|258 dm|654 cm";
	sr ="200|230|6,4|1,14|0,068|0,0254|2|90|1,5|7,89|2,354|0,3578|310|34,7|2,58|0,654";
	juego="MEDIDAS_LONGITUD";
	break;	
case 'Mc1':
	st = "(1) " + m1 + " en litros:";
	sp = "7 kl|17 hl|11 dal|28 dl|61 cl|19 ml|2 kl|11 hl|49 cl|12 hl|9 dal|155 dl|39 cl|81 ml|7 dal|78 dl";
	sr ="7.000|1.700|110|2,8|0,61|0,019|2.000|1.100|0,49|1.200|90|15,5|0,39|0,081|70|7,8";
	juego="MEDIDAS_CAPACIDAD";
	break;	
case 'Mc2':
	st = "(2) " + m1 + " en decilitros:";
	sp = "2,5 kl|1,92 hl|3,21 dal|4,2 l|78 cl|65 ml|0,52 kl|4,55 hl|8 dal|7,5 l|76 cl|85 ml|0,55 hl|0,94 dal|2,5 l|89 cl";
	sr ="25.000|1.920|321|42|7,8|0,65|5.200|4.550|800|75|7,6|0,85|550|94|25|8,9";
	juego="MEDIDAS_CAPACIDAD";
	break;	
case 'Mc3':
	st = "(3) " + m1 + " en decalitros:";
	sp = "11 kl|53 hl|68 l|515 dl|89 cl|147 ml|0,45 kl|5 hl|32 l|357 dl|6.825 cl|876 ml|7,5 hl|155 l|875 dl|355 cl";
	sr ="1.100|530|6,8|5,15|0,089|0,0147|45|50|3,2|3,57|6,825|0,0876|75|15,5|8,75|0,355";
	juego="MEDIDAS_CAPACIDAD";
	break;	
case 'Mm1':
	st = "(1) " + m1 + " en gramos:";
	sp = "4 kg|15 hg|8 dag|75 dg|56 cg|14 mg|0,5 kg|7 hg|45 cg|6 hg|4 dag|150 dg|34 cg|75 mg|2 dag|74 dg";
	sr ="4.000|1.500|80|7,5|0,56|0,014|500|700|0,45|600|40|15|0,34|0,075|20|7,4";
	juego="MEDIDAS_MASA";
	break;	
case 'Mm2':
	st = "(2) " + m1 + " en decÃ­gramos:";
	sp = "3,4 kg|2,2 hg|1,6 dag|2,3 g|15 cg|38 mg|0,85 kg|2 hg|3 dag|7 g|21 cg|9 mg|0,5 hg|9 dag|1,8 g|9 cg";
	sr ="34.000|2.200|160|23|1,5|0,38|8.500|2.000|300|70|2,1|0,09|500|900|18|0,9";
	juego="MEDIDAS_MASA";
	break;	
case 'Mm3':
	st = "(3) " + m1 + " en decagramos:";
	sp = "6 kg|34 hg|64 g|114 dg|68 cg|254 mg|0,25 kg|9 hg|15 g|789 dg|1.598 cg|8.754 mg|51 hg|347 g|258 dg|357 cg";
	sr ="600|340|6,4|1,14|0,068|0,0254|25|90|1,5|7,89|1,598|0,8754|510|34,7|2,58|0,357";
	juego="MEDIDAS_MASA";
	break;	
case 'Ms1':
	st = "(1) " + m1 + " en dam<sup>2</sup>:";
	sp = "243 m<sup>2</sup>|1.587 dm<sup>2</sup>|0,086 km<sup>2</sup>|2.568 m<sup>2</sup>|6.200 cm<sup>2</sup>|0,5 km<sup>2</sup>|12.300 cm<sup>2</sup>|9.424 dm<sup>2</sup>|23.000 mm<sup>2</sup>|8.200 mm<sup>2</sup>|456 hm<sup>2</sup>|8 hm<sup>2</sup>|68 hm<sup>2</sup>|97 m<sup>2</sup>|895 dm<sup>2</sup>";
	sr ="2,43|0,1587|860|25,68|0,0062|5.000|0,0123|0,9424|0,00023|0,000082|45.600|800|6.800|0,97|0,0895";
	juego="MEDIDAS_SUPERFICIE";
	break;	
case 'Ms2':
	st = "(2) " + m1 + " en m<sup>2</sup>:";
	sp = "300 dm<sup>2</sup>|7 dam<sup>2</sup>|2 km<sup>2</sup>|375 dm<sup>2</sup>|8.546 cm<sup>2</sup>|0,74 km<sup>2</sup>|12.360 cm<sup>2</sup>|53 dam<sup>2</sup>|783.432 mm<sup>2</sup>|9.867 mm<sup>2</sup>|1,8 hm<sup>2</sup>|6 hm<sup>2</sup>|3,5 dam<sup>2</sup>|1.215 dm<sup>2</sup>|436 cm<sup>2</sup>";
	sr ="3|700|2.000.000|3,75|0,8546|740.000|1,2360|5.300|0,783432|0,009867|18.000|60.000|350|12,15|0,0436";
	juego="MEDIDAS_SUPERFICIE";
	break;	
case 'Ms3':
	st = "(3) " + m1 + " en dm<sup>2</sup>:";
	sp = "41 m<sup>2</sup>|9 dam<sup>2</sup>|0,071 km<sup>2</sup>|368 m<sup>2</sup>|6.289 cm<sup>2</sup>|0,532 km<sup>2</sup>|24.753 cm<sup>2</sup>|9,7 dam<sup>2</sup>|357.951 mm<sup>2</sup>|8.342 mm<sup>2</sup>|6,5 hm<sup>2</sup>|0,761 hm<sup>2</sup>|592 mm<sup>2</sup>|26,54 m<sup>2</sup>|753 cm<sup>2</sup>";
	sr ="4.100|90.000|7.100.000|36.800|62,89|53.200.000|247,53|97.000|35,7951|0,8342|6.500.000|761.000|0,0592|2.654|7,53";
	juego="MEDIDAS_SUPERFICIE";
	break;	
case 'Mv1':
	st = "(1) " + m1 + " en dam<sup>3</sup>:";
	sp = "365 m<sup>3</sup>|2.415 m<sup>3</sup>|65.000 m<sup>3</sup>|85 m<sup>3</sup>|5 hm<sup>3</sup>|0,75 hm<sup>3</sup>|80 hm<sup>3</sup>|125 hm<sup>3</sup>|9.500 dm<sup>3</sup>|31.687 dm<sup>3</sup>|215.000 dm<sup>3</sup>|0,085 km<sup>3</sup>|0,5 km<sup>3</sup>|120.315 cm<sup>3</sup>|235.000 mm<sup>3</sup>";
	sr ="0,365|2,415|65|0,085|5.000|750|80.000|125.000|0,0095|0,031687|0,215|85.000|500.000|0,120315|0,000235";
	juego="MEDIDAS_VOLUMEN";
	break;	
case 'Mv2':
	st = "(2) " + m1 + " en m<sup>3</sup>:";
	sp = "7 dam<sup>3</sup>|43 dam<sup>3</sup>|2,3 dam<sup>3</sup>|0,5 dam<sup>3</sup>|3.000 dm<sup>3</sup>|575 dm<sup>3</sup>|2.400 dm<sup>3</sup>|16.500 dm<sup>3</sup>|0,375 hm<sup>3</sup>|2 hm<sup>3</sup>|0,0014 hm<sup>3</sup>|9.246 cm<sup>3</sup>|14.300 cm<sup>3</sup>|0,005 km<sup>3</sup>|650.400 mm<sup>3</sup>";
	sr ="7.000|43.000|2.300|500|3|0,575|2,4|16,5|375.000|2.000.000|1.400|0,009246|0,0143|5.000.000|0,0006504";
	juego="MEDIDAS_VOLUMEN";
	break;	
case 'Mv3':
	st = "(3) " + m1 + " en dm<sup>3</sup>:";
	sp = "53 m<sup>3</sup>|8 m<sup>3</sup>|0,5 m<sup>3</sup>|6,55 m<sup>3</sup>|4.280 cm<sup>3</sup>|750 cm<sup>3</sup>|35.700 cm<sup>3</sup>|50 cm<sup>3</sup>|0,7 dam<sup>3</sup>|0,015 dam<sup>3</sup>|0,00658 dam<sup>3</sup>|257.000 mm<sup>3</sup>|18.340 mm<sup>3</sup>|5.925 mm<sup>3</sup>|0,000355 hm<sup>3</sup>";
	sr ="53.000|8.000|500|6.550|4,28|0,75|35,7|0,05|700.000|15.000|6.580|0,257|0,01834|0,005925|355.000";
	juego="MEDIDAS_VOLUMEN";
	break;	
	

case 'Fcs1':
	st = "(1) " + n3 + " sumas:";
	sp = "3+2+6+7+4+1+8 =|58 + 4 =|5+4+9+6+5+1 =|9 + 5 =|74 + 7 =|18 + 6 =|137 + 8 =|245 + 18 =|321 + 19 =|67 + 9 =|78 + 19 =|142 + 180 =|231 + 190 =|95 + 8 =|87 + 9 =|46 + 18 =";
	sr ="31|62|30|14|81|24|145|263|340|76|97|322|421|103|96|64";
	juego="CALCULO_SUMAS";
	break;
case 'Fcs2':
	st = "(2) " + n3 + " sumas:";
	sp = "421 + 19 =|77 + 9 =|48 + 19 =|242 + 180 =|331 + 190 =|85 + 8 =|97 + 9 =|56 + 18 =|7+4+5+8+3+2+6 =|68 + 7 =|3+4+9+6+7+8+1 =|8 + 5 =|54 + 7 =|9 + 6 =|337 + 8 =|745 + 18 =";
	sr ="440|86|67|422|521|93|106|74|35|75|38|13|61|15|345|763";
	juego="CALCULO_SUMAS";
	break;	
case 'Fcr1':
	st = "(1) " + n3 + " restas:";
	sp = "7 - 2 =|58 - 34 =|9 - 3 =|379 - 148 =|74 - 9 =|145 - 8 =|137 - 8 =|245 - 18 =|321 - 19 =|467 - 9 =|78 - 19 =|342 - 180 =|231 - 190 =|95 - 8 =|87 - 9 =|46 - 18 =";
	sr ="5|24|6|231|65|137|129|227|302|458|59|162|41|87|78|28";
	juego="CALCULO_RESTAS";
	break;
case 'Fcr2':
	st = "(2) " + n3 + " restas:";
	sp = "9 - 2 =|68 - 54 =|8 - 3 =|459 - 248 =|54 - 9 =|231 - 8 =|135 - 8 =|345 - 18 =|615 - 19 =|461 - 9 =|88 - 19 =|742 - 180 =|288 - 190 =|45 - 8 =|116 - 9 =|56 - 18 =";
	sr ="7|14|5|211|45|223|127|327|596|452|69|562|98|37|107|38";
	juego="CALCULO_RESTAS";
	break;
case 'Fcm1':
	st = "(1) " + n3 + " multiplicaciones:";
	sp = "5 x 8 x 2 =|54 x 6 =|26 x 5 =|56 x 5 =|5 x 9 x 4 =|29 x 8 =|17 x 9 =|42 x 9 =|32 x 11 =|54 x 11 =|7 x 12 =|23 x 12 =|8 x 15 =|32 x 15 =|39 x 11 =|48 x 11 =";
	sr ="80|324|130|280|180|232|153|378|352|594|84|276|120|480|429|528";
	juego="CALCULO_MULTIPLICACIONES";
	break;
case 'Fcm2':
	st = "(2) " + n3 + " multiplicaciones:";
	sp = "13 x 14 =|57 x 6 =|128 x 5 =|97 x 5 =|16 x 18 =|69 x 7 =|58 x 9 =|145 x 9 =|34 x 11 =|253 x 11 =|47 x 12 =|61 x 12 =|24 x 15 =|85 x 15 =|75 x 11 =|87 x 11 =";
	sr ="182|342|640|485|288|483|522|1305|374|2783|564|732|360|1275|825|957";
	juego="CALCULO_MULTIPLICACIONES";
	break;
case 'Fcd1':
	st = "(1) " + n3 + " divisiones:";
	sp = "48 : 4 =|184 : 8 =|286 : 2 =|75 : 5 =|90 : 5 =|215 : 5 =|96 : 3 =|240 : 6 =|630 : 7 =|4500 : 900 =|5600 : 80 =|324 : 4 =|1376 : 2 =|145 : 5 =|56 : 7 =|219 : 3 =";
	sr ="12|23|143|15|18|43|32|40|90|5|70|81|688|29|8|73";
	juego="CALCULO_DIVISIONES";
	break;
case 'Fcd2':
	st = "(2) " + n3 + " divisiones:";
	sp = "68 : 4 =|248 : 8 =|364 : 2 =|480 : 5 =|175 : 5 =|390 : 5 =|81 : 3 =|480 : 6 =|770 : 7 =|10800 : 900 =|4800 : 80 =|208 : 4 =|1446 : 2 =|132 : 6 =|84 : 7 =|45 : 3 =";
	sr ="17|31|182|96|35|78|27|80|110|12|60|52|723|22|12|15";
	juego="CALCULO_DIVISIONES";
	break;
case 'Fdd1':
	st = "(1) " + f1;
	sp = "26|158|85|265|91|217|161|143|319|407|869|291|219|87|1497|591";
	sr ="2|2|5|5|7|7|7|11|11|11|11|3|3|3|3|3";
	juego="CRITERIOS";
	break;
case 'Fdd2':
	st = "(2) " + f1;
	sp = "58|194|485|215|119|329|427|473|253|737|803|201|249|267|213|129";
	sr ="2|2|5|5|7|7|7|11|11|11|11|3|3|3|3|3";
	juego="CRITERIOS";
	break;
case 'Fdf1':
	st = "(1) " + f3 + f2;
	sp = "26 =|33 =|85 =|30 =|91 =|21 =|39 =|143 =|319 =|110 =|42 =|165 =|154 =|195 =|385 =|210 =";
	sr ="2x13|3x11|5x17|2x3x5|7x13|3x7|3x13|11x13|11x29|2x5x11|2x3x7|3x5x11|2x7x11|3x5x13|5x7x11|2x3x5x7";
	juego="FACTORES";
	break;
case 'Fdf2':
	st = "(2) " + f3 + f2;
	sp = "77 =|161 =|455 =|95 =|275 =|105 =|315 =|231 =|525 =|100 =|770 =|126 =|238 =|506 =|187 =|253 =";
	sr ="7x11|7x23|5x7x13|5x19|5x5x11|3x5x7|3x3x5x7|3x7x11|3x5x5x7|2x2x5x5|2x5x7x11|2x3x3x7|2x7x17|2x11x23|11x17|11x23";
	juego="FACTORES";
	break;
case 'FdM1':
	st = "(1) " + f4 + f2;
	sp = "m.c.d. (24 , 26) =|m.c.d. (86 , 28) =|m.c.d. (88 , 22) =|m.c.d. (126 , 15) =|m.c.d. (171 , 90) =|m.c.d. (174 , 66) =|m.c.d. (186 , 36) =|m.c.d. (245 , 65) =|m.c.d. (275 , 264) =|m.c.d. (285 , 165) =|m.c.d. (324 , 60) =|m.c.d. (369 , 99) =|m.c.d. (385 , 132) =|m.c.d. (420 , 49) =|m.c.d. (423 , 117) =|m.c.d. (464 , 244) =";
	sr ="2|2|22|3|9|6|6|5|11|15|12|9|11|7|9|4";
	juego="MAXIMO";
	break;
case 'FdM2':
	st = "(2) " + f4 + f2;
	sp = "m.c.d. (520 , 115) =|m.c.d. (534 , 138) =|m.c.d. (567 , 162) =|m.c.d. (616 , 168) =|m.c.d. (646 , 255) =|m.c.d. (680 , 360) =|m.c.d. (728 , 266) =|m.c.d. (756 , 462) =|m.c.d. (792 , 180) =|m.c.d. (816 , 231) =|m.c.d. (848 , 280) =|m.c.d. (861 , 410) =|m.c.d. (891 , 660) =|m.c.d. (915 , 210) =|m.c.d. (942 , 330) =|m.c.d. (984 , 312) =";
	sr ="5|6|81|56|17|40|14|42|36|3|8|41|33|15|6|24";
	juego="MAXIMO";
	break;
case 'Fdm1':
	st = "(1) " + f5 + f2;
	sp = "m.c.m. (24 , 26) =|m.c.m. (86 , 28) =|m.c.m. (88 , 22) =|m.c.m. (126 , 45) =|m.c.m. (172 , 96) =|m.c.m. (174 , 72) =|m.c.m. (184 , 36) =|m.c.m. (245 , 70) =|m.c.m. (275 , 110) =|m.c.m. (280 , 160) =|m.c.m. (324 , 180) =|m.c.m. (368 , 122) =|m.c.m. (384 , 96) =|m.c.m. (420 , 294) =|m.c.m. (456 , 84) =|m.c.m. (464 , 66) =";
	sr ="312|1.204|88|630|4.128|2.088|1.656|490|550|1.120|1.620|366|384|2.490|3.192|1.452";
	juego="MINIMO";
	break;
case 'Fdm2':
	st = "(2) " + f5 + f2;
	sp = "m.c.m. (522 , 116) =|m.c.m. (546 , 156) =|m.c.m. (567 , 162) =|m.c.m. (616 , 168) =|m.c.m. (648 , 189) =|m.c.m. (720 , 360) =|m.c.m. (688 , 172) =|m.c.m. (756 , 210) =|m.c.m. (790 , 237) =|m.c.m. (816 , 272) =|m.c.m. (840 , 280) =|m.c.m. (861 , 410) =|m.c.m. (891 , 165) =|m.c.m. (918 , 204) =|m.c.m. (952 , 224) =|m.c.m. (984 , 120) =";
	sr ="1.044|1.092|1.134|1.848|4.536|720|688|3.780|2.370|816|840|8.610|4.455|1.836|3.808|4.920";
	juego="MINIMO";
	break;
default:
	break;
}

}