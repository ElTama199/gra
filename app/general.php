<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general extends Model
{
    protected $table = 'datosgenerales';
    protected $fillable = [
        'iduser', 'nombre','edad','camisa','calle','colonia','municipio','ciudad','estado','codigopostal','telefono','sexo','calzado','lnacimiento','fnacimiento','nacionalidad','pantalon','vivec','estatura','peso','ecivil',
    ];
}
