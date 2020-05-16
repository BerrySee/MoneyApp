<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OutcomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $model = $this->resource;
        return [
            'id'=>$model->id,
            'name'=>$model->name,
            'type'=>$model->type,
            'amount'=>$model->amount,
            'date'=>date('Y-m-d', strtotime($model->date))
        ];
    }
}
