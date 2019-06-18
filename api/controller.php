<?php
echo "entrando en controller";
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


    public function index()
    {
        $result = array_rand ($this->array,1);

        return $result;
    }
    
}