<?php 
namespace App\Transformer;

use League\Fractal\TransformerAbstract;
use App\User;

class UserTransformer extends TransformerAbstract
{
	    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id'            => (int) $user->id,
            'name'          => $user->name,
            'email'         => $user->email,
            'links'         => [
                [
                    'rel' => 'self',
                    'uri' => '/books/'.'5',
                ]
            ]
        ];
    }
}