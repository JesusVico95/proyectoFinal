<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TEMPORADA DE VERANO
        $polloSoja = asset('assets/verano/polloSoja.jpg');

        DB::table('plates')->insert([
            'title_name' => 'Pollo con verduras salteadas y soja',
            'elaboration' => 'Salteamos el pollo en una sarten añadimos soja y retiramos.
            En esa misma sarten agregamos las verduras, salpimentamos al gusto agregamos el pollo
            Reposamos en el fuego durante 5 minutos y ya tenemos nuestra comida lista.',
            'photo' => $polloSoja,
            'time_elaboration' => 20,
            'season_id' => 3,
            'type_aliment' => 1,
        ]);
        $melocoton = asset('assets/verano/melocoton.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de melocotón',
            'elaboration' => 'Agregar en un bol canonigos y unas perlas de mozzarella.
            Cortamos unos cherrys por la mitad y el melocotón a rodajas.
            Consejo: Aliña tu ensalada con aceite vinagre sal y óregano al gusto',
            'photo' => $melocoton,
            'time_elaboration' => 10,
            'season_id' => 3,
            'type_aliment' => 2,
        ]);
        $couscous = asset('assets/verano/couscous.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Cous cous con espárragos',
            'elaboration' => 'En un bol añadimos el cous-cous.En una olla al fuego agregamos la misma cantidad de
            agua que de cous-cous, hervimos y agregamos el agua al bol.
            Mientras cortamos nuestros esparragos y los sazonamos, una vez rehogados los agregamos al cous-cous.',
            'photo' => $couscous,
            'time_elaboration' => 10,
            'season_id' => 3,
            'type_aliment' => 2,
        ]);
        $salmon = asset('assets/verano/salmon.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Salmón al papillote',
            'elaboration' => 'Cortamos unas verduras las salpimentamos y las colocamos en un papel de horno.
            Agregamos el salmón sobre estas verduras y lo horneamos a 180ºC durante 20 minutos',
            'photo' => $salmon,
            'time_elaboration' => 30,
            'season_id' => 3,
            'type_aliment' => 1,
        ]);
        $pasta = asset('assets/verano/macarrones.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pasta con atún, tomate y pimientos',
            'elaboration' => 'Plato de Verano',
            'photo' => $pasta,
            'time_elaboration' => 20,
            'season_id' => 3,
            'type_aliment' => 1,
        ]);
        $gazpacho = asset('assets/verano/gazpacho.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Gazpacho',
            'elaboration' => 'Plato frío de verano',
            'photo' => $gazpacho,
            'time_elaboration' => 10,
            'season_id' => 3,
            'type_aliment' => 2,
        ]);
        $quinoa = asset('assets/verano/quinoa.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de Quinoa, sandia y pepino',
            'elaboration' => 'Cena rápida y fresquita para el verano',
            'photo' => $quinoa,
            'time_elaboration' => 15,
            'season_id' => 3,
            'type_aliment' => 2,
        ]);
        $pollo = asset('assets/verano/pollo.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Arroz con pollo y esparragos',
            'elaboration' => 'Plato de verano',
            'photo' => $pollo,
            'time_elaboration' => 20,
            'season_id' => 3,
            'type_aliment' => 1,
        ]);
        $dorada = asset('assets/verano/dorada.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Dorada con tomate y cebolla al horno',
            'elaboration' => 'Introducir los alimentos al horno',
            'photo' => $dorada,
            'time_elaboration' => 20,
            'season_id' => 3,
            'type_aliment' => 1,
        ]);
        $mozarella = asset('assets/verano/mozarella.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de tomate con mozarella',
            'elaboration' => 'Cortar tomate y mozarella. Agregar aceite, vinagre y orégano.
            Consejo:Si quieres darle un toque extra de sabor, agregale una salsa pesto.',
            'photo' => $mozarella,
            'time_elaboration' => 10,
            'season_id' => 3,
            'type_aliment' => 2,
        ]);

        //TEMPORADA DE OTOÑO
        $boniato = asset('assets/otoño/boniato.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pollo con boniato asado',
            'elaboration' => 'Plato de Otoño',
            'photo' => $boniato,
            'time_elaboration' => 35,
            'season_id' => 4,
            'type_aliment' => 1,
        ]);
        $calabaza = asset('assets/otoño/calabaza.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Crema de calabaza',
            'elaboration' => 'La calabaza es muy tipica de esta temporada',
            'photo' => $calabaza,
            'time_elaboration' => 35,
            'season_id' => 4,
            'type_aliment' => 2,
        ]);
        $coliflor = asset('assets/otoño/coliflor.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Macarrones gratinados con coliflor',
            'elaboration' => 'Plato de Otoño',
            'photo' => $coliflor,
            'time_elaboration' => 35,
            'season_id' => 4,
            'type_aliment' => 1,
        ]);
        $acelgas = asset('assets/otoño/acelgas.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Tortilla de acelgas',
            'elaboration' => 'Cocinar previamente las acelgas.Batir huevos y agregar',
            'photo' => $acelgas,
            'time_elaboration' => 10,
            'season_id' => 4,
            'type_aliment' => 2,
        ]);
        $garbanzos = asset('assets/otoño/garbanzos.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Garbanzos con bacalao',
            'elaboration' => 'Agregar los garbanzos en una olla junto con el bacalao y las verduras',
            'photo' => $garbanzos,
            'time_elaboration' => 35,
            'season_id' => 4,
            'type_aliment' => 1,
        ]);
        $lubina = asset('assets/otoño/lubina.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Lubina con boniato asado',
            'elaboration' => 'Pasamos por plancha los lomos de la lubina y aprovechamos el boniato de la otra receta',
            'photo' => $lubina,
            'time_elaboration' => 15,
            'season_id' => 4,
            'type_aliment' => 2,
        ]);
        $ternera = asset('assets/otoño/ternera.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ternera con verduras',
            'elaboration' => 'Marcar ternera a la plancha y saltear veduras',
            'photo' => $ternera,
            'time_elaboration' => 15,
            'season_id' => 4,
            'type_aliment' => 1,
        ]);
        $champi = asset('assets/otoño/champi.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Tortilla francesa de champiñones',
            'elaboration' => 'Sofreir champiñones y batir huevos',
            'photo' => $champi,
            'time_elaboration' => 10,
            'season_id' => 4,
            'type_aliment' => 2,
        ]);
        $merluza = asset('assets/otoño/merluza.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Merluza al horno con arroz',
            'elaboration' => 'Sazonar la merluza e introducirla al horno',
            'photo' => $merluza,
            'time_elaboration' => 20,
            'season_id' => 4,
            'type_aliment' => 1,
        ]);
        $ensalada = asset('assets/otoño/ensalada.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Canonigos con aguacate,queso feta y membrillo',
            'elaboration' => 'Agregar todos los ingredientes en un bol añadir:Aceite,sal,vinagre.
            Consejo:Se pueden agregar frutos secos. ',
            'photo' => $ensalada,
            'time_elaboration' => 10,
            'season_id' => 4,
            'type_aliment' => 2,
        ]);

        //TEMPORADA INVIERNO
        $patatas = asset('assets/invierno/patatas.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de patatas',
            'elaboration' => 'Cortar y pelar patatas.Cocer las patatas y dejar enfriar.Agregar los 
            ingredientes restantes ',
            'photo' => $patatas,
            'time_elaboration' => 25,
            'season_id' => 1,
            'type_aliment' => 1,
        ]);
        $hamburguesa = asset('assets/invierno/hamburguesa.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Hamburguesa',
            'elaboration' => 'Marcar la hamburguesa a la plancha y acompañar con un bol de rúcula.',
            'photo' => $hamburguesa,
            'time_elaboration' => 20,
            'season_id' => 1,
            'type_aliment' => 2,
        ]);
        $pavo = asset('assets/invierno/pavo.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pavo con parrillada de verduras',
            'elaboration' => 'Marcar el pavo y en la misma sarten las verduras',
            'photo' => $pavo,
            'time_elaboration' => 20,
            'season_id' => 1,
            'type_aliment' => 1,
        ]);

        $espinacas = asset('assets/invierno/espinacas.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de espinacas',
            'elaboration' => 'En un bol agregar las espinacas con el resto de los ingredientes',
            'photo' => $espinacas,
            'time_elaboration' => 10,
            'season_id' => 1,
            'type_aliment' => 2,
        ]);
        $asada = asset('assets/invierno/asada.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Calabaza Asada con verduras',
            'elaboration' => 'Hervir la calabaza.Seguidamente sofreir las verduras junto con la calabaza',
            'photo' => $asada,
            'time_elaboration' => 30,
            'season_id' => 1,
            'type_aliment' => 1,
        ]);
        $tacos = asset('assets/invierno/tacos.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Tacos de pollo',
            'elaboration' => 'Sofreir los tacos de pollo en la sárten.Retirar y agregar el resto de ingedientes',
            'photo' => $tacos,
            'time_elaboration' => 25,
            'season_id' => 1,
            'type_aliment' => 2,
        ]);
        $pescado = asset('assets/invierno/pescado.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Salmón con arroz',
            'elaboration' => 'Cocer el arroz y marcar el salmón en la sárten',
            'photo' => $pescado,
            'time_elaboration' => 25,
            'season_id' => 1,
            'type_aliment' => 1,
        ]);
        $polloEnsalada = asset('assets/invierno/polloens.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pollo con queso y ensalada',
            'elaboration' => 'Marcar el pollo y cuando esté listo poner el queso.
            En un bol hacer una pequeña ensalada',
            'photo' => $polloEnsalada,
            'time_elaboration' => 10,
            'season_id' => 1,
            'type_aliment' => 2,
        ]);
        $ensPasta = asset('assets/invierno/enspasta.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de pasta con pollo',
            'elaboration' => 'Hervir pasta y cocinar el pollo a tiras.Dejar enfriar y agregar el
            resto de los ingredientes a la pasta',
            'photo' => $ensPasta,
            'time_elaboration' => 20,
            'season_id' => 1,
            'type_aliment' => 1,
        ]);
        $huevos = asset('assets/invierno/revueltos.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Huevos revueltos con champiñones',
            'elaboration' => 'Sofreir los champiñones y retirar.Batir los huevos previamente.
            Una vez agregados a la sarten, seguir removiendo y agregar los champiñones',
            'photo' => $huevos,
            'time_elaboration' => 5,
            'season_id' => 1,
            'type_aliment' => 2,
        ]);

        $lentejas = asset('assets/primavera/lentejas.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Lentejas con verduras',
            'elaboration' => 'Cocinar todas las verduras con las lentejas y cocer.',
            'photo' => $lentejas,
            'time_elaboration' => 20,
            'season_id' => 2,
            'type_aliment' => 1,
        ]);
        $judias = asset('assets/primavera/judias.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Tortilla con judias verdes',
            'elaboration' => 'Cocer las judias verdes 5minutos y rehogarlas.
            Batir los huevos y agregar.',
            'photo' => $judias,
            'time_elaboration' => 15,
            'season_id' => 2,
            'type_aliment' => 2,
        ]);
        $guisantes = asset('assets/primavera/guisantes.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pollo salteado con guisantes y espárragos',
            'elaboration' => 'Marcar el pollo y retirar.Agregar los espárragos y guisantes previamente
            cocidos.',
            'photo' => $guisantes,
            'time_elaboration' => 15,
            'season_id' => 2,
            'type_aliment' => 1,
        ]);
        $crema = asset('assets/primavera/crema.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Crema de zanahoria,patata y calabacin',
            'elaboration' => 'Pelar las verduras, rehogar y cubrir con agua.Después triturar y colar.',
            'photo' => $crema,
            'time_elaboration' => 25,
            'season_id' => 2,
            'type_aliment' => 2,
        ]);
        $ensLentejas = asset('assets/primavera/enslentejas.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de lentejas',
            'elaboration' => 'Cortar las verduras y agregar las lentejas.',
            'photo' => $ensLentejas,
            'time_elaboration' => 10,
            'season_id' => 2,
            'type_aliment' => 1,
        ]);
        $sopa = asset('assets/primavera/sopa.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Sopa de pollo',
            'elaboration' => 'Poner una olla de agua a hervir y agregar el pollo con el resto
            de las verduras',
            'photo' => $sopa,
            'time_elaboration' => 45,
            'season_id' => 2,
            'type_aliment' => 2,
        ]);
        $ensQuinoa = asset('assets/primavera/ensquinoa.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada de quinoa con dorada',
            'elaboration' => 'Hervimos la quinoa y reservamos.Agregamos los ingredientes restantes
            y una vinagreta con: aceite, limón y vinagre.
            Por otro lado cocinamos los lomos de dorada',
            'photo' => $ensQuinoa,
            'time_elaboration' => 15,
            'season_id' => 2,
            'type_aliment' => 1,
        ]);
        $ensGriega = asset('assets/primavera/ensgriega.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Ensalada Griega',
            'elaboration' => 'En un bol ponemos la ensalada,tomate ,orégano ,cebolla ,queso feta ,aceitunas',
            'photo' => $ensGriega,
            'time_elaboration' => 15,
            'season_id' => 2,
            'type_aliment' => 2,
        ]);
        $pastaSoja = asset('assets/primavera/pasta.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Pasta con soja,pavo y verduras',
            'elaboration' => 'Cocer la pasta y mientras marcar el pavo.Agregar el resto de las verduras.
            Saltear todo con soja.',
            'photo' => $pastaSoja,
            'time_elaboration' => 20,
            'season_id' => 2,
            'type_aliment' => 1,
        ]);
        $lubinaHorno = asset('assets/primavera/lubina.jpg');
        DB::table('plates')->insert([
            'title_name' => 'Lubina al horno',
            'elaboration' => 'Hornear la lubina y en una sarten saltear champiñones para acompañar',
            'photo' => $lubinaHorno,
            'time_elaboration' => 20,
            'season_id' => 2,
            'type_aliment' => 2,
        ]);
    }
}
