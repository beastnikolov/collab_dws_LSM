<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'titulo' => 'Cadena Perpetua',
            'imagen' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UY1200_CR89,0,630,1200_AL_.jpg',
            'genero' => 'Drama',
            'sinopsis' => 'En 1947, Andrew Dufresne (Tim Robbins), vicepresidente de un importante banco de Portland, Maine, es juzgado por el homicidio de su esposa y de un hombre con quien ella tenía una aventura. Aunque insiste con su inocencia, las pruebas son motivo suficiente para que el juez lo condene a cumplir dos cadenas perpetuas en la prisión estatal de Shawshank.
            Al llegar a la cárcel se percata de lo duro que es el ambiente, los guardias no ahorran esfuerzos en disciplinar a los reclusos con los métodos más crueles, especialmente el jefe, Byron Hadley (Clancy Brown). Este régimen del terror cuenta con la aprobación del alcaide de la prisión, Samuel Norton (Bob Gunton).
            Durante los primeros meses, Dufresne se hace amigo del capo del contrabando en la prisión, Ellis Boyd Redding «Red» (Morgan Freeman) y le encarga un martillo para labrar piedras. Ocupa su tiempo y sus fuerzas en defenderse del acoso constante de una pandilla de violadores conocida como «Las hermanas», liderada por Bogs Diamond (Mark Rolston). Dos años después, Dufresne es seleccionado junto con Red y otros reclusos para reparar el techo de uno de los edificios de la prisión. Mientras cumple su trabajo, escucha al capitán Hadley quejarse por un embrollo fiscal causado por una herencia recibida de parte de su hermano. Dufresne se ofrece a ayudarlo y de este modo empieza a ganarse la confianza del personal de la prisión, incluido el alcaide. Este hecho le ayuda a librarse de la presión de «Las hermanas», pues Bogs queda inválido tras recibir una paliza del capitán. Con el tiempo, Dufresne es transferido a la biblioteca de la cárcel para ayudar al bibliotecario Brooks Hatlen (James Whitmore), hasta que este recibe la libertad condicional. Sin embargo, Brooks se suicida tiempo después por depresión que le causó la idea de haber desperdiciado su vida.',
            'pais' => 'USA',
            'productora' => 'Warner Bros. Pictures',
            'nota' => 9.2,
            'añoestreno' =>  "1994"
        ]);

        DB::table('movies')->insert([
            'titulo' => 'El Padrino',
            'imagen' => 'https://rockthebestmusic.com/wp-content/uploads/2015/06/The-Godfather-Poster.jpg',
            'genero' => 'Crimen, Drama',
            'sinopsis' => 'La historia comienza en el verano de 1945, cuando se celebra la boda de Connie (Talia Shire) y Carlo Rizzi (Gianni Russo). Connie es la hija de Don Vito Corleone (Marlon Brando), cabeza de la familia Corleone, y jefe de una de las cinco familias que ejercen el mando de la Cosa Nostra en la ciudad de Nueva York. Con el argumento de que todo siciliano debe atender las peticiones que le hacen el día de la boda de su hija, Don Vito es visitado, en el primer plano de la acción, por Amerigo Bonasera, dueño de una funeraria. Este solicita la ayuda de Corleone para vengar un ataque a su hija que fue herida y desfigurada por su novio y un amigo de este, al haberse negado a sostener relaciones sexuales, tras no conseguir que los dos individuos fueran sentenciados por las vías legales. Bonasera le ofrece dinero a Don Vito para que los mate, pero este se niega, ya que su hija no está muerta, por lo que toma su petición como una falta de respeto. Alega que él y su familia no son asesinos a sueldo y le recuerda que en los tiempos en que eran amigos, y que cuando él empezó a vincularse con asuntos ilegales, Amerigo Bonasera eludió su contacto, a pesar de que la esposa de Don Vito era la madrina de su hija. Finalmente, Amerigo Bonasera le expone su respeto y besa la mano de Don Vito y lo llama Padrino. El Don queda satisfecho y dice a Amerigo Bonasera que está en deuda con él y que algún día, "y puede que ese día nunca llegue" podría solicitarle un favor a cambio de ese, a lo que Amerigo Bonasera no podría negarse en razón de su amistad y como pago del mismo. Don Vito manda a Peter Clemenza (Richard S. Castellano) a golpear a los jóvenes porque sería injusto matarlos.',
            'pais' => 'USA',
            'productora' => 'Paramount Pictures',
            'nota' => 9.1,
            'añoestreno' =>  "1972"
        ]);

        DB::table('movies')->insert([
            'titulo' => 'El caballero oscuro',
            'imagen' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
            'genero' => 'Acción, Crimen, Drama',
            'sinopsis' => 'Nueve meses después de los eventos de la primera película, una banda de ladrones disfrazados con máscaras de payasos llevan a cabo un violento robo en uno de los bancos de la mafia de Gotham City, pero los asaltantes desconocen que entre ellos se encuentra el Joker (Heath Ledger), quien les había ordenado traicionarse y asesinarse unos a otros, con la finalidad de repartir entre menos el botín. Finalmente el Joker asesina al último de sus cómplices y escapa en un autobús escolar camuflado en una caravana de autobuses escolares que pasaban por el área curiosamente, antes de que llegue la policía de Gotham City al lugar. Al caer la noche, un grupo de imitadores de Batman intenta interrumpir una reunión de traficantes con el Dr. Jonathan Crane (Cillian Murphy) y el líder de la mafia, el "Checheno", cuando de pronto el verdadero Batman (Christian Bale) aparece y aprehende a todos los delincuentes, incluyendo a sus impostores y a estos últimos les advierte que no quiere volver a verlos nuevamente, ya que según este no necesita ayuda, sin embargo en plena confrontación el Checheno consigue escapar del lugar antes de ser capturado por Batman. Posteriormente Bruce sufre lesiones leves que le conducen a diseñar un traje nuevo que le permita mayor movilidad, rapidez y protección contra perros.',
            'pais' => 'USA',
            'productora' => 'Warner Bros. Pictures',
            'nota' => 8.5,
            'añoestreno' =>  '2008'
        ]);

        DB::table('movies')->insert([
            'titulo' => 'Interstellar',
            'imagen' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
            'genero' => 'Aventura, Drama, Sci-fi',
            'sinopsis' => 'A mediados del siglo XXI, la destrucción de las cosechas en la Tierra ha hecho que la agricultura sea cada vez más difícil y se vea amenazada la supervivencia de la humanidad. Joseph Cooper, viudo, exingeniero y piloto de la NASA, dirige una granja con su suegro Donald, su hijo Tom y su hija Murph, quien cree que su habitación está embrujada por un poltergeist. Cuando aparecen inexplicablemente extraños patrones de polvo en el suelo de la habitación de Murph, Cooper se da cuenta de que la gravedad está detrás de su formación, no un "fantasma". Interpreta el patrón como un conjunto de coordenadas geográficas formadas en código binario. Cooper y Murph siguen las coordenadas a una instalación secreta de la NASA, donde se encuentran con el exprofesor de Cooper, el doctor Brand.
            Brand revela que, misteriosamente, un agujero de gusano apareció cerca de Saturno hace 48 años, abriendo un camino a una galaxia distante con algunos planetas potencialmente habitables. Bajo su dirección, doce voluntarios viajaron a través del agujero para evaluar la idoneidad de cada planeta como nuevo hogar de la humanidad. Los voluntarios Miller, Edmunds y Mann enviaron datos alentadores de planetas cerca de un agujero negro supermasivo llamado Gargantúa. Brand recluta a Cooper para pilotar la nave espacial Endurance con el fin de investigar más, mientras trabaja en el "Plan A", una teoría gravitatoria de la propulsión que permitiría el éxodo desde la Tierra a esos nuevos planetas. El Endurance también lleva 5000 embriones congelados para el "Plan B", que es colonizar un planeta habitable para asegurar la supervivencia de la humanidad. Antes de que Cooper se vaya, se despide de Murph llevándose un reloj de pulsera y dejándole otro para comprobar la diferencia en el tiempo cuando vuelva, debida a los efectos relativistas de los viajes espaciales. Ella le da un último mensaje del "fantasma" que dice "Quédate". Como Cooper cree que es una excusa para que él no se vaya, Murph se enfada y no vuelve a ver a su padre. Antes de que Cooper se vaya, se cae un libro del estante de la habitación de Murph.',
            'pais' => 'USA',
            'productora' => 'Paramount Pictures',
            'nota' => 7.9,
            'añoestreno' =>  '2014'
        ]);

        DB::table('movies')->insert([
            'titulo' => 'Snatch',
            'imagen' => 'https://m.media-amazon.com/images/M/MV5BMTA2NDYxOGYtYjU1Mi00Y2QzLTgxMTQtMWI1MGI0ZGQ5MmU4XkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_.jpg',
            'genero' => 'Comedia, Crimen',
            'sinopsis' => 'Franky (Benicio del Toro) es un ladrón de diamantes que tiene que entregar una enorme pieza a su jefe Avi (Dennis Farina), pero en el camino es tentado por Boris el Navaja (Rade Serbedzija) para apostar en un combate ilegal de boxeo. En realidad, es una trampa para robarle, por lo que, cuando Avi se entera, contrata a Tony Dientes de Bala (Vinnie Jones) para encontrar tanto a Franky como el diamante. Pronto se descubre el triste destino de Franky, y la caza y captura de la gema desaparecida lleva a todo el mundo a un juego de locos que corre el riesgo de descontrolarse, donde el engaño, el chantaje y el fraude se mezclan de forma sangrienta con gángsters, un tinker (Brad Pitt) que pelea para poder comprarle una caravana a su madre, combates de boxeo amañados, un perro hambriento y gran variedad de armas en una caótica situación... y en medio de todo ello un gran diamante.',
            'pais' => 'Reino Unido',
            'productora' => 'Columbia Pictures',
            'nota' => 7,
            'añoestreno' =>  '2000'
        ]);

        DB::table('movies')->insert([
            'titulo' => 'La Jungla de Cristal',
            'imagen' => 'https://blogs.sugoi.com.pe/shigure/wp-content/uploads/2020/03/MV5BZjRlNDUxZjAtOGQ4OC00OTNlLTgxNmQtYTBmMDgwZmNmNjkxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
            'genero' => 'Acción',
            'sinopsis' => 'John McClane (Bruce Willis) es un policía de Nueva York que visita la ciudad de Los Ángeles para reconciliarse con su exesposa, Holly Gennaro (Bonnie Bedelia), quien se encuentra en una fiesta de Navidad en el edificio Nakatomi Plaza, piso 30, propiedad de un japonés: Joe Takagi. John es llevado al Nakatomi Plaza en una limusina conducida por un joven llamado Argyle, de quien se gana su confianza y se hacen buenos amigos. John sube al piso 30, donde es recibido por japoneses que lo conducen hasta donde está su esposa.
            Pronto el Nakatomi Plaza es tomado por 13 terroristas: Carl, Franco, Tony, Theo, Alexander, Marco, Kristoff, Eddie, Uli, Heinrich, Fritz, James y su jefe Hans Gruber (Alan Rickman). Todos ellos equipados con ametralladoras y armas automáticas (Hans con una pistola) en el momento en que John se estaba aseando en el baño. Logra escapar sin ser visto, con pantalón y una camiseta, pero sin zapatos. Los terroristas se presentan en la fiesta del piso 30 buscando al señor Takagi para darle a Nakatomi Corporations una lección de lo que codicia. Hans y unos cuantos escoltas llevan a Takagi al salón principal mientras John, armado con una pistola, los sigue. Hans interroga a Takagi sobre el código para abrir la bóveda del Nakatomi Plaza y admite que utiliza el terrorismo como señuelo mientras trata de robar los 640 millones de dólares que hay en la bóveda. Takagi rehúsa a decir la clave y es asesinado por Hans mientras McClane observa la escena escondido. McClane activa una alarma contra incendios para que los terroristas lo descubran e intenta atraer la ayuda de la policía. McClane asesina al hermano de Karl, Tony, poniéndolo furioso. McClane toma su ametralladora y el radio portátil comunicador y escribe en su camisa, «Ahora tengo una ametralladora. ¡Jo, Jo, Jo!», para enviarlo en el elevador al piso 30 como un mensaje para Hans.',
            'pais' => '20th Century Fox',
            'productora' => 'Silver Pictures',
            'nota' => 8.2,
            'añoestreno' =>  '1988'
        ]);

       /* DB::table('movies')->insert([
            'titulo' => '',
            'imagen' => '',
            'genero' => '',
            'sinopsis' => '',
            'pais' => '',
            'productora' => '',
            'nota' => 2,
            'añoestreno' =>  ''
        ]);*/
    }
}
