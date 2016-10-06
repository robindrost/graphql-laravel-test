<?php

namespace App\GraphQL\Query;

use GraphQL;
use App\News;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Folklore\GraphQL\Support\Query;

class NewsItemsQuery extends Query
{

    protected $attributes = [
        'name' => 'News items query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('newsItem'));
    }

    public function args()
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::String()],
            'title' => ['name' => 'title', 'type' => Type::String()],
            'body' => ['name' => 'body', 'type' => Type::String()]
        ];
    }

    public function resolve($root, $args, ResolveInfo $info)
    {
        $model = News::query();

        if (isset($args['id'])) {
            $model->where('id', $args['id']);
        }

        $fields = $info->getFieldSelection($depth = 3);

        foreach ($fields as $field => $keys) {
            if ($field == 'user') {
                $model->with('user');
            }
        }

        return $model->get();
    }

}
