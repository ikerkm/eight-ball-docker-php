<?php

class Controller
{
    private $array=[];

    public function __construct()
    {
       $this->array = ['En mi opinión, sí',
       'Es cierto',
       'Es decididamente así',
       'Probablemente',
       'Buen pronóstico',
       'Todo apunta a que sí',
       'Sin duda',
       'Sí',
       'Sí - definitivamente',
       'Debes confiar en ello',
       'Respuesta vaga, vuelve a intentarlo',
       'Pregunta en otro momento',
       'Será mejor que no te lo diga ahora',
       'No puedo predecirlo ahora',
       'Concéntrate y vuelve a preguntar',
       'Puede ser',
       'No cuentes con ello',
       'Mi respuesta es no',
       'Mis fuentes me dicen que no',
       'Las perspectivas no son buenas',
       'Muy dudoso'];
    }


    public function redirectTo(string $page)
    {
        $host= $_SERVER['HTTP_HOST'];
        $uri= rtrim(dirname($_SERVER['PHP_SELF'],'/\\'));
        header("Location: http://$host$uri/$page");
    }
    
}