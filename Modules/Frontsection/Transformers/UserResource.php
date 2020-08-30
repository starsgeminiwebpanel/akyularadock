<?php

namespace Modules\Frontsection\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;


class UserResource extends JsonResource
{

    /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */

    public static $wrap = 'user';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }


    /**
     * Customize the outgoing response for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function withResponse($request, $response)
    {

        //$response->header(['X-Requested-With' => 'XMLHttpRequest']);
        //$response->header(['Content-Type' => 'application/json']);
        $response->header('X-Value', 'True');
    }
}
