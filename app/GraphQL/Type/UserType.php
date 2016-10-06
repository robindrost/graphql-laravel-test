<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{

    protected $attributes = [
        'name' => 'User',
        'description' => 'A user'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'The id of the user.'
            ],
            'email' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'The email of the user.'
            ]
        ];
    }

}
