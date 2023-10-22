<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Chirp::create([
            'user_id' => 2,
            'message' => '¡Hola a todos! Acabo de compartir un nuevo Chirp. Espero que lo disfruten. 😊',
        ]);

        Chirp::create([
            'user_id' => 2,
            'message' => 'Saludos a la comunidad. Aquí tienes otro Chirp lleno de pensamientos interesantes. ¡Espero que te guste! 🌟',
        ]);

        Chirp::create([
            'user_id' => 1,
            'message' => '¡Buen día! Compartiendo un poco de inspiración y conocimiento. Siempre es un placer estar aquí. 🚀',
        ]);

        Chirp::create([
            'user_id' => 1,
            'message' => '¡Hola a todos! Compartiendo algunas ideas y reflexiones. ¡Gracias por ser parte de esta comunidad! 🙌',
        ]);

        Chirp::create(['user_id' => 1, 'message' => '¡Hola a todos! Acabo de compartir un nuevo Chirp. Espero que lo disfruten. 😊']);
        Chirp::create(['user_id' => 2, 'message' => '¡Saludos a la comunidad de programadores! Aquí compartiendo otro Chirp. 🚀']);
        Chirp::create(['user_id' => 3, 'message' => '¡Hola, amigos del desarrollo web! Acabo de publicar un nuevo Chirp. 💻']);
        Chirp::create(['user_id' => 4, 'message' => 'Compartiendo mis pensamientos sobre programación. ¡Espero que les guste! 👨‍💻']);
        Chirp::create(['user_id' => 5, 'message' => '¡Bienvenidos a mi Chirp! Hablando de proyectos emocionantes en desarrollo web. 🌐']);
        Chirp::create(['user_id' => 1, 'message' => '¡Otro día, otro Chirp! ¿Qué están programando hoy? 💡']);
        Chirp::create(['user_id' => 2, 'message' => 'Nueva publicación en mi perfil. ¡Hablemos de lenguajes de programación! 📝']);
        Chirp::create(['user_id' => 3, 'message' => 'Consejo del día: la documentación es clave en el desarrollo. 📚']);
        Chirp::create(['user_id' => 4, 'message' => 'Compartiendo un fragmento de código interesante. ¿Qué opinan? 💬']);
        Chirp::create(['user_id' => 5, 'message' => '¡Chirpeando sobre las últimas tendencias en tecnología! 🚀']);
        Chirp::create(['user_id' => 1, 'message' => 'Hoy hablamos sobre la seguridad en el desarrollo web. ¡Asegúrate de proteger tus aplicaciones! 🔒']);
        Chirp::create(['user_id' => 2, 'message' => 'Explorando proyectos de código abierto. ¡La colaboración es fundamental en el mundo del desarrollo! 🌎']);
        Chirp::create(['user_id' => 3, 'message' => 'Trucos para mantenerse motivado en la programación. La perseverancia es la clave del éxito. 💪']);
        Chirp::create(['user_id' => 4, 'message' => 'Un vistazo a mi configuración de desarrollo: hardware y software. ¿Cuál es tu equipo de trabajo? 💻']);
        Chirp::create(['user_id' => 5, 'message' => 'Chirpeando sobre proyectos personales. ¡Comparte tus proyectos actuales! 🛠']);
        Chirp::create(['user_id' => 1, 'message' => 'Compartiendo mi IDE favorito para el desarrollo. ¿Cuál es el tuyo? 🖥']);
        Chirp::create(['user_id' => 2, 'message' => 'Una cita inspiradora de un programador famoso. La inspiración nos impulsa. #Inspiración']);
        Chirp::create(['user_id' => 3, 'message' => 'Proyectos de código abierto: contribuciones y aprendizaje. ¡Contribuye a la comunidad! 🌱']);
        Chirp::create(['user_id' => 4, 'message' => 'Proyectos personales: ¡mucho por explorar! ¿Qué estás construyendo en este momento? 🚧']);
        Chirp::create(['user_id' => 5, 'message' => 'Hablando de proyectos emocionantes en desarrollo web. ¡Comparte tus proyectos actuales! 🌟']);
        Chirp::create(['user_id' => 1, 'message' => 'Explorando nuevos lenguajes de programación. ¿Alguna recomendación? 💬']);
        Chirp::create(['user_id' => 2, 'message' => 'Herramientas esenciales en mi flujo de trabajo diario. #DesarrolloWeb']);
        Chirp::create(['user_id' => 3, 'message' => 'Un consejo sobre seguridad en el desarrollo web. 🔒']);
        Chirp::create(['user_id' => 4, 'message' => 'Nuevo Chirp en mi perfil. ¿Qué están programando hoy? 🚀']);
        Chirp::create(['user_id' => 5, 'message' => 'Programador de día, soñador de código de noche. 🌙']);
        Chirp::create(['user_id' => 1, 'message' => 'Recursos de aprendizaje favoritos. ¿Cuáles son tus recursos indispensables? 📚']);
        Chirp::create(['user_id' => 2, 'message' => 'Muestra de código: resolviendo un problema de rendimiento. 🚀']);
        Chirp::create(['user_id' => 3, 'message' => 'Compartiendo un consejo de desarrollo web. #Programación']);
        Chirp::create(['user_id' => 4, 'message' => 'Explorando las tendencias tecnológicas actuales. ¿Qué te parece emocionante? 🌟']);
        Chirp::create(['user_id' => 5, 'message' => 'Una mirada a mi configuración de desarrollo. ¿Qué hardware y software usas para programar? 💻']);
    }
}
