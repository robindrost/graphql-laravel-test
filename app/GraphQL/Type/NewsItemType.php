<?php

namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class NewsItemType extends GraphQLType
{

    protected $attributes = [
        'name' => 'News item',
        'description' => 'A news item'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'The id of the news item.'
            ],
            'title' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'The title of the news item'
            ],
            'body' => [
                'type' => Type::nonNull(Type::String()),
                'description' => 'The body of the news item'
            ],
            'user' => [
                'type' => GraphQL::type('user'),
                'description' => 'The user',
            ],
        ];
    }

}
