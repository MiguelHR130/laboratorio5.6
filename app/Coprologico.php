<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coprologico extends Model
{
    protected $fillable =   ['id','idPaciente','fecha','observaciones','color','olor','restos_alimenticios','consistencia','elementos_macroscopicos',
                           'moco_fecal','ph','sangre_oculta','pig_biliares','azucares_reductores','otros','fibras_digeridas','fibras_nodigeridas',
                            'fibras_vegetales','grasas','almidones','leucocitos','eritrocitos','levaduras','cristales','parasitos'];
    protected $table = 'coprologico';
    public $timestamps = false;
}
